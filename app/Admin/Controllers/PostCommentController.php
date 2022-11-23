<?php

namespace App\Admin\Controllers;

use App\Models\Post;
use App\Models\PostComment;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostCommentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PostComment';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PostComment());

        $grid->column('id', __('Id'));
        $grid->column('parent_id', __('Parent id'));
        $grid->column('post_id', __('Post id'))->display(function (){
            return $this->post->name;
        });

        $grid->column('user_id', __('User id'))->display(function (){
            return $this->user? $this->user->name:"";
        });
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
        $show = new Show(PostComment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('post_id', __('Post id'));
        $show->field('parent_id', __('Parent id'));
        $show->field('user_id', __('User id'));
        $show->field('enabled', __('Enabled'));
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
        $form = new Form(new PostComment());

        $form->select('post_id', __('Post'))->options(function (){
            $posts = Post::where('enabled',1)->where("status",Post::STATUS_APPROVED)->select("id","name")->get()->toArray();
            $options=[];
            foreach ($posts as $post){
                $options[$post["id"]] = $post["name"];
            }
            return $options;
        });
        $form->select('parent_id', __('Parent id'))->options(function (){
            $comments= PostComment::where('enabled',1)->select("id","content")->get()->toArray();
            $options=[];
            foreach ($comments as $comment){
                $options[$comment["id"]] = strlen($comment["content"]) > 30 ? str_split($comment['content'],30):$comment['content'];
            }
            return $options;
        });
        $form->select('user_id', __('User'))->options(function (){
            $users = User::where("enabled",1)->select("id","name")->get()->toArray();
            $options = [];
            foreach ($users as $user) {
                $options[$user["id"]] = $user["name"];
            }
            return $options;
        });
        $form->switch('enabled', __('Enabled'))->default(1);
        $form->textarea('content', __('Content'));

        return $form;
    }
}
