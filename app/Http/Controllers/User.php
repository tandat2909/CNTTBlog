<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class User extends AbstractController
{
    public function profile(Request $request,$profile)
    {
        if(!empty($profile))
        {
           $user =  \App\Models\User::where('profile',$profile)->get()->first();
        }
        if(isset($user->id))
        {
            $this->addDataView('user',$user);
            return $this->getView('frontend.pages.profile');
        }
        return redirect()->route('404');
    }
}
