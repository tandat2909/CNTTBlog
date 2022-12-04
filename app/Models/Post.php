<?php

namespace App\Models;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Post extends AbstractModel
{
    use HasFactory, ElasticquentTrait;

    const STATUS_PENDING = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_DISAPPROVED = 'disapproved';

    const STATUS = [
        self::STATUS_PENDING => "Pending",
        self::STATUS_APPROVED => "Approved",
        self::STATUS_DISAPPROVED => "Disapproved"
    ];
    const STATUS_COLOR = [
        self::STATUS_PENDING => "yellow",
        self::STATUS_APPROVED => "green",
        self::STATUS_DISAPPROVED => "red"
    ];

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
        return $this->hasMany(PostComment::class, 'post_id')->where('parent_id', null);
    }

    /**
     * @param $value
     * @return BelongsToMany
     */
    public function Hashtags($value=''): BelongsToMany
    {
        return $this->belongsToMany(Hashtag::class, 'post_hashtag');
    }

    /**
     * @param $value
     * @return HasMany
     */
    public function LikeCollection($value = ''): HasMany
    {
        return $this->hasMany(PostLike::class, 'post_id')->where('is_like',1);
    }

    public  function isUserLikePost():bool {
        $user = Auth::user();
        if(!isset($user->id)) return false;
        $like = $this->LikeCollection()->where("user_id",$user->id);
        return $like->first() ? $like->first()->is_like:false;
    }
    public function save(array $options = [])
    {
        if (parent::save($options)){
           $this->addToIndex();
            return true;
        }
        return false;
    }


}

