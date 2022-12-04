<?php

namespace App\Admin\Controllers;

use App\Models\Role;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Hash;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('role_id', __('Role'))->display(function (){
            return $this->role?$this->role->title:'';
        })->badge("red");
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('firstName', __('FirstName'));
        $grid->column('middleName', __('MiddleName'));
        $grid->column('lastName', __('LastName'));

        $grid->column('lastLogin', __('LastLogin'))->display(function (){
            return $this->lastLogin?$this->lastLogin->format("Y-m-d H:i:s"):'';
        });
        $grid->column('intro', __('Intro'));
        $grid->column('profile', __('Profile'));


        $grid->column('email_verified_at', __('Email verified'))->display(function (){
            return $this->email_verified_at?$this->email_verified_at->format("Y-m-d H:i:s"):"";
        });

        $grid->column('enabled', __('Enabled'))->display(function ($enabled){
            return $enabled? "Enable": "Disable";
        });

        $grid->column('created_at', __('Created at'))->display(function ($created_at){
            return $this->created_at->format("Y-m-d H:i:s");

        });
        $grid->column('updated_at', __('Updated at'))->display(function ($created_at){
            return $this->updated_at->format("Y-m-d H:i:s");

        });


        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));
        $show->field('enabled', __('Enabled'));
        $show->field('id', __('Id'));
        $show->field('role_id', __('Role id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('firstName', __('FirstName'));
        $show->field('middleName', __('MiddleName'));
        $show->field('lastName', __('LastName'));
        $show->field('lastLogin', __('LastLogin'));
        $show->field('intro', __('Intro'));
        $show->field('profile', __('Profile'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->switch('enabled', __('Enabled'))->default(1);

        $form->text('name', __('Name'))->disable();
        $form->email('email', __('Email'));
        $form->text('firstName', __('FirstName'));
        $form->text('middleName', __('MiddleName'));
        $form->text('lastName', __('LastName'));
        $form->image('avatar',__('Avatar'));
        $form->textarea('intro', __('Intro'));
        $form->textarea('profile', __('Profile'));
        $form->password('password', __('Password'));
        $form->select('role_id', __('Role'))->options(function (){
            $roles = Role::where("active",1)->select("id","title")->get()->toArray();
            $options = [];
            foreach ($roles as $role){
                $options[$role["id"]] = $role["title"];
            }
            return $options;
        });
        $form->text('remember_token', __('Remember token'));
        $form->datetime('email_verified_at', __('Email verified at'))->disable();
        $form->datetime('lastLogin', __('LastLogin'))->disable();
        $form->saving(function (Form $form) {
            if ($form->password && $form->model()->password != $form->password) {
                $form->password = Hash::make($form->password);
            }
            if(empty($form->password)){
                $form->password = $form->model()->password;
            }
            $form->name = $form->lastName.' '.$form-> middleName ." ".$form->firstName;
            //$form->avatar =  $form->avatar ? config_path("disk").$form->avatar :$form->model()->avatar;
        });
        return $form;
    }
}
