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

        if ($request->has('search')) {
            $keyword = $request->get('search');
            $collectionPost = Post::searchByQuery(
                [
                    'multi_match' => [
                        'query' => $keyword,
                        'fields' => [
                            'title',
                            'name',
                            'short_description',
                            'post_content',
                            'url_key',
                            'metaTitle'
                        ]
                    ]
                ]

            );
        }

        $this->addDataView('hashtags', Hashtag::all());
        $this->addDataView('postCollection', $collectionPost);
        return $this->getView('frontend.pages.search');
    }

}
