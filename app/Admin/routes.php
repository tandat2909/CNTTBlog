<?php

use App\Admin\Controllers\CategoryController;
use App\Admin\Controllers\HashtagController;
use App\Admin\Controllers\PermissionController;
use App\Admin\Controllers\PostCommentController;
use App\Admin\Controllers\PostController;
use App\Admin\Controllers\RoleController;
use App\Admin\Controllers\UserAdminController;
use App\Admin\Controllers\UserController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('posts', PostController::class);
    $router->resource('roles', RoleController::class);
    $router->resource('permissions', PermissionController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('post-comments', PostCommentController::class);
    $router->resource('auth/users', UserAdminController::class);
    $router->resource('hashtags', HashtagController::class);

});
