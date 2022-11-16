<?php

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

Route::resource('roles', \App\Http\Controllers\Admin\Role::class);
Route::get('admin/roles',
    [
        'as' => 'roles',
        'uses' => buildAction(\App\Http\Controllers\Admin\Role::class, 'getAll')
    ]);

Route::get('{category_url_rewrite}/posts',
    [
        'as'=>'catalog_posts',
        'uses'=> buildAction(\App\Http\Controllers\Catalog::class,'posts')
    ]
);

Route::get('searchForum',
    [
        'as' => 'searchForum',
        'uses' => buildAction(\App\Http\Controllers\Search::class, 'searchForum')
    ]);

Route::get("404",['as' => "404",'uses'=>buildAction(\App\Http\Controllers\RequestError::class,'page404')]);

Auth::routes();

