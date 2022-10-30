<?php

namespace App\Http\Controllers;

use App\Models\Category;

class Home extends AbstractController
{
   public function index(){
       $this->addDataView('categories',Category::all());
       return $this->getView('frontend/forums');
   }
}
