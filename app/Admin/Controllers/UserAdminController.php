<?php

namespace App\Admin\Controllers;


use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Grid\Displayers\Actions;

class UserAdminController extends \Encore\Admin\Controllers\UserController
{
    protected function grid()
    {
        $grid= parent::grid();
        $grid->actions(function (Actions $actions) {
            $actions->disableDelete();
        });
        return $grid;
    }

    public function form()
    {
        $form = parent::form();

        $form->tools(function ( $tools){
            $tools->disableDelete();
            $tools->disableView();
        });
        return $form;
    }

    protected function detail($id)
    {
        return ;
    }
}
