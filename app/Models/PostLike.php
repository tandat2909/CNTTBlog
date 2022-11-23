<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostLike extends AbstractModel
{

    /**
     * @param $value
     * @return BelongsTo
     */
    public function User($value): BelongsTo
    {
        return $this->belongsTo(User::class,'author_id');
    }

    /**
     * @param $value
     * @return BelongsTo
     */
    public function Post($value): BelongsTo
    {
        return $this->belongsTo(Post::class,'post_id');
    }

}