<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hashtag;
use App\Models\Post;
use Illuminate\Http\Request;

class Search extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
   public function searchForum(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
   {

       if($request->has('q'))
       {
           $keyword = $request->get('q');
           $collectionPost = Post::search($keyword)->toArray();
       }
       $this->addDataView('hashtags',Hashtag::all());
       $this->addDataView('categories',Category::all());
       $this->addDataView('postCollection',$collectionPost);
       return $this->getView('frontend/forums');
   }

}
