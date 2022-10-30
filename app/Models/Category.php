<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\AbstractModel;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends AbstractModel
{
    use HasFactory;
    protected $table = 'categorys';
    protected string $cacheTag = '_ca_';

    protected $fillable = ['id' , 'parent_id' ,'title'  ,'metaTitle', 'slug'  ,'content'   ,'created_at' , 'updated_at' ];

    /**
     * @param $value
     * @return BelongsToMany
     */
    protected function Posts ($value = ''): BelongsToMany
    {
        return $this->belongsToMany(Post::class,'post_categorys');
    }


    public static function validateBeforeSave($data): bool
    {
        return true;
    }
}


