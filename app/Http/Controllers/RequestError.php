<?php

namespace App\Http\Controllers;

class RequestError extends Controller
{

    public function page404()
    {
        return $this->getView("frontend.pages.404-error");
    }
}