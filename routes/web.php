<?php

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

function buildAction($classController,$action): string
{
    return $classController.'@'.$action;
}

Route::resource('frontend/forums',\App\Http\Controllers\Home::class);
Route::get('/', buildAction(\App\Http\Controllers\Home::class,'index'));


Route::resource('roles',\App\Http\Controllers\Role::class);
Route::get('admin/roles',
    [
        'as' => 'roles',
        'uses' => buildAction(\App\Http\Controllers\Role::class,'getAll')
    ]);
