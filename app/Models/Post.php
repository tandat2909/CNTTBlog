<?php

namespace App\Models;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends AbstractModel
{
    use HasFactory, ElasticquentTrait;

    const STATUS_PENDING = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_DISAPPROVED = 'disapproved';

    const STATUS = [self::STATUS_PENDING => "Pending", self::STATUS_APPROVED => "Approved", self::STATUS_DISAPPROVED => "Disapproved"];

    protected $mappingProperties = [
        'name' => [
            "type" => 'string',
            "analyzer" => "standard"
        ],
        'short_description' => [
            "type" => 'string',
            "analyzer" => "standard",
        ],
        'metaTitle' => [
            "type" => 'string',
            "analyzer" => "standard",
        ],
        'status' => [
            "type" => 'integer',
            "analyzer" => "standard",
        ],
        'post_content' => [
            "type" => 'string',
            "analyzer" => "standard",
        ],
        'views' => [
            "type" => 'integer',
            "analyzer" => "standard",
        ],
        'author_id' => [
            "type" => 'integer',
            'analyzer' => 'standard'
        ]
    ];
    protected $dates = [
        'created_at', 'updated_at'
    ];
    protected $fillable = [
        'id', 'name', 'short_description', 'metaTitle', 'status', 'post_content',
         'image', 'views', 'enabled', 'url_key', 'allow_comment', 'created_at', 'updated_at', 'author_id',
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
    public function CommentCollection($value=''): HasMany
    {
        return $this->hasMany(PostComment::class, 'post_id');
    }

    /**
     * @param $value
     * @return BelongsToMany
     */
    public function Hashtags($value=''): BelongsToMany
    {
        return $this->belongsToMany(Hashtag::class, 'post_hashtag');
    }


}

