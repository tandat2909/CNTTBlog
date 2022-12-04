<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

function buildAction($classController, $action): string
{
    return $classController . '@' . $action;
}

Route::resource('frontend.pages.forums', \App\Http\Controllers\Home::class);
Route::get('/', [
    'as' => 'index',
    'uses'=>buildAction(\App\Http\Controllers\Home::class, 'index')
]);


Route::get('{category_url_rewrite}/posts',
    [
        'as'=>'catalog_posts',
        'uses'=> buildAction(\App\Http\Controllers\Catalog::class,'posts')
    ]
);
Route::get('posts/{post_url_rewrite}',
    [
        'as'=>'post_detail',
        'uses'=> buildAction(\App\Http\Controllers\Catalog::class,'postDetail')
    ]
);

Route::post('posts/{post_url_rewrite}/comment',[
    'as'=>'post_comment',
    'uses'=> buildAction(\App\Http\Controllers\Catalog::class,'commentPost')
]);
Route::delete('comment/delete/{comment_id}',[
    'as'=>'comment_delete',
    'uses'=> buildAction(\App\Http\Controllers\Catalog::class,'commentDelete')
]);


Route::resource('frontend.pages.search', \App\Http\Controllers\Search::class);
Route::get('searchForum',
    [
        'as' => 'searchForum',
        'uses' => buildAction(\App\Http\Controllers\Search::class, 'searchForum')
    ]);

//Router Like
Route::get('posts/{post_url_rewrite}/like',[
    'as'=>'post_like',
    'uses'=> buildAction(\App\Http\Controllers\Catalog::class,'handleOnBtnLike')
]);
Route::get("404",['as' => "404",'uses'=> buildAction(\App\Http\Controllers\RequestError::class,'page404')]);

Auth::routes();


Route::resource("frontend.pages.postcreate",\App\Http\Controllers\PostController::class);

Route::get("post/create",[
    "as"=>"post_create_form",
    "uses" => buildAction(\App\Http\Controllers\PostController::class,"createPost")
]);

Route::post("post/create",[
    "as"=>"post_create",
    "uses" => buildAction(\App\Http\Controllers\PostController::class,"createPost")
]);

Route::get('profile/{profile}',[
    'as' => 'user',
    'uses' => buildAction(\App\Http\Controllers\User::class,"profile")
]);





