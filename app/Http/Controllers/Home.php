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

       $this->addDataView('hashtags',Hashtag::all());

       return $this->getView('frontend.pages.forums');
   }


}
