<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Category;

class Post extends AbstractModel
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'short_description', 'metaTitle', 'slug', 'status', 'post_content',
        'store_ids', 'image', 'views', 'enabled', 'url_key', 'allow_comment', 'created_at', 'updated_at', 'author_id',
        'modifier_id', 'publish_date', 'banner_image', 'featured_image'
    ];

    /**
     * @param $value
     * @return BelongsToMany
     */
    public function Categorys($value = ''): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'post_categorys');
    }

    /**
     * @param $value
     * @return BelongsTo
     */
    public function Author($value = ''): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * @param $value
     * @return BelongsTo
     */
    public function Modifier($value = ''): BelongsTo
    {
        return $this->belongsTo(User::class, 'modifier_id');
    }

    /**
     * @param $value
     * @return HasMany
     */
    public function CommentCollection($value): HasMany
    {
        return $this->hasMany(PostComment::class,'post_id');
    }

    public static function validateBeforeSave($data): bool
    {
        return true;
    }
}

