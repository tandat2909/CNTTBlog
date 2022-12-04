<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hashtag;
use App\Models\Permission;
use App\Models\Post;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    protected mixed $classModel = Post::class;
    protected array $requireRole = [Role::USER];
    protected array $requirePermissionAction = [
        'createPost'=>[Permission::CREATE]
    ];

    public function createPost(Request $request)
    {

        if($request->isMethod(Request::METHOD_GET)){
            $hashtags = Hashtag::HashtagCollection();
            $categories = Category::CategoriesCollection();
            $this->addDataView("hashtags",$hashtags);
            $this->addDataView("categories",$categories);
            $this->addDataView("formData", session('post.formData'));
            $this->addBreadcrumb("create_post",[
                'label'=>'Create Post',
                'link' => ''
            ]);
            return $this->getView("frontend.pages.postcreate");
        }
        $dataForm = $request->all();
        session(['post.formData' => $dataForm]);
        $request->validate([
            'name' => ['required','unique:posts','max:255'],
            'publish_date' => ['required','date'],
            'post_content' => ['required','string'],
            'categories_ids' => ['required','array',"min:1"]
        ]);
        $user = Auth::user();
        $url_key = !empty($dataForm['url_key']) ? $dataForm['url_key'] : str_replace(' ','-',$dataForm["name"]);

        $post = Post::create([
            'name'=> $dataForm["name"],
            'short_description' => $dataForm['short_description'],
            'post_content' => $dataForm['post_content'],
            'url_key' => str_replace(' ','-',$url_key),
            'author_id' => $user->id,
            'publish_date' => $dataForm['publish_date'],
            'status' => Post::STATUS_PENDING
        ]);

        $post->hashtags()->attach($dataForm['hashtag_ids']);
        $post->categorys()->attach($dataForm['categories_ids']);
        $post->save();
        session(['post.formData' => []]);


        return $post->toArray();

    }


}
