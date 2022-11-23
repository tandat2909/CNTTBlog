<?php

namespace App\Admin\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RoleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Role';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Role());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('slug', __('Slug'));
        $grid->column('description', __('Description'));
        $grid->column('content', __('Content'));
        $grid->column('active', __('Active'))->display(function ($active){
            return $active? "Active": "InActive";
        });;
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
        $show = new Show(Role::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('description', __('Description'));
        $show->field('active', __('Active'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('content', __('Content'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Role());
        $form->switch('active', __('Active'));
        $form->text('title', __('Title'));
        $form->text('slug', __('Slug'));
        $form->textarea('description', __('Description'));
        $form->textarea('content', __('Content'));
        $form->multipleSelect("permisstions",__('Permissions'))->options(function (){
            $permissions = Permission::where('active',1)->select('id','title')->get()->toArray();
            foreach ($permissions as $permission){
                $options[$permission["id"]] = $permission["title"];
            }
            return $options ?? [];
        });


        return $form;
    }
}
