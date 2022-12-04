<?php

namespace App\Models;

class Hashtag extends AbstractModel
{
    protected $table = 'hashtag';

    protected string $cacheTag ='_ht_';

    protected $fillable = ['id','title','enable','created_at','updated_at'];

    protected $dates = ['created_at','updated_at'];


    public function Posts($value = ''): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Post::class,'post_hashtag');
    }

    public static function HashtagCollection($columns = ['*'])
    {
        return parent::all($columns = ['*'])->where("enabled",1);
    }






}