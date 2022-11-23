<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hashtag;
use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use function PHPUnit\Framework\isEmpty;

class Catalog extends AbstractController
{
    const PAGE_SIZE = 1;

    public function posts(Request $request, $category_url_rewrite)
    {

        $objectCategory = Category::where('url_rewrite', $category_url_rewrite)->where('enabled', 1)->get();
        if ($objectCategory->count() === 0) {
            return to_route('index');
        }
        $objectCategory = $objectCategory[0];
        $skip = 0;
        if(!empty($request->get('p'))){
            $p = $request->get('p');
            $skip = $p * self::PAGE_SIZE;
        }

        $postCollection = $objectCategory->getPostCollectionByStatus();
        $totalPost = $postCollection->count();

        $pageCollection = $postCollection->skip($skip)->take(self::PAGE_SIZE);

        $this->addDataView('postCollection', $pageCollection);
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
//        Post::createIndex();
//        Post::putMapping(true);
//        Post::addAllToIndex();
        if (empty($post_url_rewrite)) {
            to_route('404');
        }

        $post = $this->getPost($post_url_rewrite);
        if (isset($post->enabled) && $post->enabled) {
            $this->addDataView('post', $post);
            $post->update(["views" => $post->views + 1]);
            $post->addToIndex();
            return $this->getView('frontend.pages.postdetail');
        }
        return to_route("404");
    }

    public function commentPost(Request $request,$post_url_rewrite)
    {
        $post = $this->getPost($post_url_rewrite);
        $parentCommentId = $request->get('parent_id');
        $content = $request->get("content");
        if(!empty($parentCommentId))
        {
            $parentComment = PostComment::find($parentCommentId);
            if(!isset($parentComment->id) || !$parentComment->enabled)
            {
                return to_route('404');
            }
        }

        if(!$post || empty($content) || !Auth::hasUser() || !Auth::check())
        {
            return to_route('404');
        }
        $user = Auth::user();

        $comment = PostComment::create([
            'post_id' => $post->id,
            'parent_id'=> $parentCommentId,
            'user_id' => $user->id,
            'content' =>$content
        ]);

        return to_route('post_detail',['post_url_rewrite' => $post_url_rewrite]);
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
}
