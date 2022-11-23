<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Hashtag;
use App\Models\Post;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('url_key', __('Url key'));
        $grid->column('author_id', __('Author'))->display(function (){
            return $this->author->name;
        });
        $grid->column('views', __('Views'));


        $grid->column('allow_comment', __('Allow comment'))->display(function ($allow_comment){
            return $allow_comment ? "<span class='badge bg-green'>Allow</span>" : "<span class='badge bg-red'>Disallowance</span>";
        });
        $grid->column('publish_date', __('Publish date'));

        $grid->column('status', __('Status'))->display(function ($status){
            if(array_key_exists($status,Post::STATUS))
                return Post::STATUS[$status];
            return $status;
        });
        $grid->column('enabled', __('Enabled'))->display(function ($enabled){
            return $enabled? "Enable": "Disable";
        });
        $grid->column('modifier_id', __('Modifier'))->display(function (){
            return $this->modifier ? $this->modifier->name : "";
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
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('short_description', __('Short description'));
        $show->field('metaTitle', __('MetaTitle'));
        $show->field('status', __('Status'));
        $show->field('post_content', __('Post content'));
        $show->field('image', __('Image'));
        $show->field('views', __('Views'));
        $show->field('enabled', __('Enabled'));
        $show->field('url_key', __('Url key'));
        $show->field('allow_comment', __('Allow comment'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('author_id', __('Author'));
        $show->field('modifier_id', __('Modifier'));
        $show->field('publish_date', __('Publish date'));
        $show->field('banner_image', __('Banner image'));
        $show->field('featured_image', __('Featured image'));


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post());

        $form->text('name', __('Name'));
        $form->textarea('short_description', __('Short description'));
        $form->text('metaTitle', __('MetaTitle'));
        $form->select('status', __('Status'))->default(Post::STATUS_PENDING)->options(Post::STATUS);
        $form->textarea('post_content', __('Post content'));
        $form->text('url_key', __('Url Post'));
        $form->multipleSelect("categorys",__("Category"))->options(function (){
            $categories = Category::where("enabled",1)->select("id","title")->get()->toArray();
            $options = [];
            foreach ($categories as $category){
                $options[$category["id"]] = $category["title"];
            }
            return $options;

        });
        $form->multipleSelect("hashtags",__("Hashtag"))->options(function (){
            $hashtags = Hashtag::where("enabled",1)->select("id","title")->get()->toArray();
            $options = [];
            foreach ($hashtags as $hashtag){
                $options[$hashtag["id"]] = $hashtag["title"];
            }
            return $options;

        });
        $form->image('image', __('Image'));
        $form->image('banner_image', __('Banner image'));
        $form->image('featured_image', __('Featured image'));
        $form->select('author_id', __('Author'))->options(function ($id) {
            $users = User::where("enabled",1)->select("id","name")->get()->toArray();
            $user = [];
             array_map(function ($u) use (&$user){
                $user[$u["id"]] = $u["name"];
            },$users);
            return $user;
        });


        $form->datetime('publish_date', __('Publish date'))->default(date('Y-m-d H:i:s'));
        $form->switch('allow_comment', __('Allow comment'))->default(1);
        $form->switch('enabled', __('Enabled'))->default(1);
        return $form;
    }
}
