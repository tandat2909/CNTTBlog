<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hashtag;
use App\Models\Permission;
use App\Models\Post;
use App\Models\User;
use App\Models\Role as ModelRole;
use Illuminate\Support\Facades\Hash;

class Home extends Controller
{

    protected array $requirePermissionAction = [
        'index'=>[]
    ];

   public function index(){

//       $this->test();

       $this->addDataView('hashtags',Hashtag::all());
       $this->addDataView('categories',Category::all());
       return $this->getView('frontend.pages.forums');
   }

   function test(){
       Post::addAllToIndex();
//       Post::reindex();

       $post = Post::searchByQuery(['match' => ['name' => 'Test']]);
       echo $post->first()->name;
//       var_dump($post);

//
//       $user = User::create([
//           'name' => "Tan Dat",
//           'email' => 'dat.vu.ffd@boofly.com',
//           'firstName' => 'Tan',
//           'lastName' => 'Dat',
//           'password' => Hash::make('Tinice@299108'),
//           'role_id' => 1
//       ]);
//       $catelog = Category::create(['title'=>'Catagory Test','url_rewrite'=>'ffffweffff','content'=>"fewf"]);
//
//       $post = Post::create([
//           'name'=>'Test Create',
//           'short_description' => 'showffff',
//           'slug' => 'ff',
//           'post_content' => 'wefwefw',
//           'url_key' => 'test-create',
//           'author_id' =>$user->id,
//           'store_ids' => 32
//
//       ]);

//       $post = Post::where('id',1)->attach([1]);



   }

}
