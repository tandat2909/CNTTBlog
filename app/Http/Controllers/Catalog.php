<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hashtag;
use App\Models\Post;
use App\Models\PostComment;
use App\Models\PostLike;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class Catalog extends AbstractController
{
    const PAGE_SIZE = 20;

    public function posts(Request $request, $category_url_rewrite)
    {

        $objectCategory = Category::where('url_rewrite', $category_url_rewrite)->where('enabled', 1)->get()->first();
        if ($objectCategory->count() === 0) {
            return to_route('index');
        }
//        $objectCategory = $objectCategory[0];
        $skip = 0;
        if(!empty($request->get('p'))){
            $p = $request->get('p');
            $skip = $p * self::PAGE_SIZE;
        }

        $postCollection = $objectCategory->getPostCollectionByStatus();
        $recent = clone $postCollection;
        $totalPost = $postCollection->count();

        $recent = $recent->sortBy(function ($value,$key){
            if(!is_object($value)) return $value;
            return $value->created_at->timestamp;
        }, 1)->skip(0)->take(5);
        $pageCollection = $postCollection->skip($skip)->take(self::PAGE_SIZE);

        $this->addDataView('postCollection', $pageCollection);
        $this->addDataView('recent', $recent);
        $this->addDataView('category', $objectCategory);
        $this->addDataView("pageSize",self::PAGE_SIZE);
        $this->addDataView("totalPost",$totalPost);

        $this->addBreadcrumb($objectCategory->title, [
            'label' => $objectCategory->title
        ]);

        $this->addDataView('hashtags', Hashtag::all());
        return $this->getView('frontend.pages.posts');
    }

    public function postDetail(Request $request, $post_url_rewrite)
    {
        if (empty($post_url_rewrite)) {
            to_route('404');
        }

        $post = $this->getPost($post_url_rewrite);
        $user = Auth::user();

        if ((isset($post->enabled) && $post->enabled && $post->status === Post::STATUS_APPROVED) ||
            ($post->author_id == $user->id && $post->status == Post::STATUS_PENDING)
        ) {
            $this->addDataView('post', $post);
            $post->update(["views" => $post->views + 1]);
            $post->addToIndex();
            $this->addDataView('hashtags',Hashtag::all());
            $this->addDataView('currentUser',$user);
            return $this->getView('frontend.pages.postdetail');

        }
        return to_route("404");
    }

    public function commentPost(Request $request,$post_url_rewrite)
    {
        $post = $this->getPost($post_url_rewrite);
        if(!$post->allow_comment)  return response()->json(['error'=>"Can't comment on this post"]);
        $parentCommentId = $request->get('parent_id');
        $content = $request->get("content");
        $user = Auth::user();
        if(!empty($parentCommentId))
        {
            $parentComment = PostComment::find($parentCommentId);
            if(!isset($parentComment->id) || !$parentComment->enabled)
            {
                $parentCommentId = null;
            }
        }

        if(!$post || empty($content) || !$user)
        {
            return to_route('404');
        }

        $comment = PostComment::create([
            'post_id' => $post->id,
            'parent_id'=> $parentCommentId,
            'user_id' => $user->id,
            'content' =>$content
        ]);

        $this->addDataView("post",$post);
        return $this->getView("frontend.includes.viewcomments");
    }

    private function getPost($post_url_rewrite){
        $post = Post::where('url_key',$post_url_rewrite)->first();
        if(isset($post->id)){
            return $post;
        }
        return null;
    }

    public function commentDelete(Request $request,$comment_id)
    {
        $comment = PostComment::find($comment_id);
        if(isset($comment->id) && $comment->enabled){
            $user = Auth::user();
            $userComment = $comment->user_id;
            if($user === $userComment)
            {
                if($comment->CommentChild->delete())
                {
                    $comment->delete();
                }
            }
        }
        return back();

    }

//   handle action Like of post
    public function handleOnBtnLike(Request $request,$post_url_rewrite)
    {
        $post = $this->getPost($post_url_rewrite);
        $user = Auth::user();
        if($user){

            $like = PostLike::where("post_id",$post->id)->where("user_id",$user->id);
            $isLike = $like->first() ? !$like->first()->is_like :1;
            $like->updateOrCreate([
                'user_id' => $user->id,
                'post_id' => $post -> id
            ],[
                'is_like' => $isLike,
            ]);
            return response()->json(["like"=>$isLike]);
        } else {
            return  response()->json(["url_login"=>URL::route('login')],500);
        }
    }

}
