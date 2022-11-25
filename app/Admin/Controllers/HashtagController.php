<?php

namespace App\Admin\Controllers;

use App\Models\Hashtag;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HashtagController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Hashtag';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Hashtag());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
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
        $show = new Show(Hashtag::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
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
        $form = new Form(new Hashtag());

        $form->text('title', __('Title'));
        $form->switch('enabled', __('Enabled'))->default(1);

        return $form;
    }
}
