<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostComment extends AbstractModel
{

    protected $fillable = [
        "id",
        "post_id",
        "parent_id",
        "user_id",
        "enabled",
        "created_at",
        "updated_at",
        "content",
    ];
    protected $dates = [  "created_at","updated_at",];


    /**
     * @param $value
     * @return BelongsTo
     */
    public function User($value=''): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    /**
     * @param $value
     * @return BelongsTo
     */
    public function Post($value=''): BelongsTo
    {
        return $this->belongsTo(Post::class,'post_id');
    }

    public function CommentChild($value=''){
        return $this->hasMany(PostComment::class,'parent_id');
    }


}
