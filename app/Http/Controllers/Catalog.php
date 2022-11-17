<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hashtag;
use App\Models\Post;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use function PHPUnit\Framework\isEmpty;

class Catalog extends AbstractController
{

    public function posts(Request $request,$category_url_rewrite)
    {

        $objectCategory = Category::where('url_rewrite',$category_url_rewrite)->where('enabled',1)->get();
        if($objectCategory->count() === 0){
            return to_route('index');
        }
        $objectCategory = $objectCategory[0];

        $postCollection = $objectCategory->getPostCollectionByStatus();
        $this->addDataView('postCollection',$postCollection);
        $this->addDataView('category',$objectCategory);

        $this->addBreadcrumb($objectCategory->title,[
            'label' => $objectCategory->title
        ]);

        $this->addDataView('hashtags',Hashtag::all());
        return $this->getView('frontend.pages.posts');
    }
    public function postDetail(Request $request,$post_url_rewrite)
    {
        if(empty($post_url_rewrite)){
            to_route('404');
        }
        $post = Post::searchByQuery(['match' => ['url_key' => $post_url_rewrite]])->first();
        $this->addDataView('post' ,$post);

        return $this->getView('frontend.pages.postdetail');

    }
}
