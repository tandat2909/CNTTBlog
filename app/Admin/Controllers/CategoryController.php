<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Category';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('metaTitle', __('MetaTitle'));
        $grid->column('url_rewrite', __('Url rewrite'));
        $grid->column('content', __('Content'));
        $grid->column('enabled', __('Enabled'))->display(function ($enabled){
            return $enabled? "Enable": "Disable";
        });
        $grid->column('created_at', __('Created at'))->display(function (){
            return $this->created_at ? $this->created_at->format("Y-m-d H:i:s"):"";
        });
        $grid->column('updated_at', __('Updated at'))->display(function (){
            return $this->updated_at?$this->updated_at->format("Y-m-d H:i:s"):"";
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
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('parent_id', __('Parent'));
        $show->field('title', __('Title'));
        $show->field('image', __('Image'));
        $show->field('metaTitle', __('MetaTitle'));
        $show->field('url_rewrite', __('Url rewrite'));
        $show->field('content', __('Content'));
        $show->field('enabled', __('Enabled'));
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
        $form = new Form(new Category());

        $form->select('parent_id', __('Parent'))->options(function (){
            $categories = Category::where("enabled",1)->select("id","title")->get()->toArray();
            $options = [];
            foreach ($categories as $category){
                $options[$category["id"]] = $category["title"];
            }
            return $options;

        });
        $form->text('title', __('Title'));
        $form->image('image', __('Image'));
        $form->text('metaTitle', __('MetaTitle'));
        $form->text('url_rewrite', __('Url rewrite'));
        $form->textarea('content', __('Content'));
        $form->switch('enabled', __('Enabled'))->default(1);

        return $form;
    }
}
