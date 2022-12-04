<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends AbstractModel
{
    protected $table = 'categorys';
    protected string $cacheTag = '_ca_';
    protected $dates = ['updated_at', 'created_at'];
    protected $fillable = ['id' , 'parent_id' ,'title'  ,'metaTitle', 'url_rewrite'  ,'content'   ,'created_at' , 'updated_at' ];

    /**
     * @param $value
     * @return BelongsToMany
     */
    protected function Posts ($value = ''): BelongsToMany
    {
        return $this->belongsToMany(Post::class,'post_categorys');
    }

    public function countPost(): int
    {
        return $this->Posts()->where('enabled',1)
            ->where('status',\App\Models\Post::STATUS_APPROVED)->count();
    }

    public function getPostCollectionByStatus(string $status = Post::STATUS_APPROVED): Collection
    {
        if(!array_key_exists($status,Post::STATUS))
        {
            throw new \Exception("Status doesn't exists");
        }
        return $this->Posts()->where('enabled',1)
            ->where('status',$status)->get();
    }

    public function validateBeforeSave(array $data): bool
    {
        parent::validateBeforeSave($data);

        if ($this::where('url_rewrite', $data[0]['url_rewrite'])->count() === 0) {
            return true;
        }
        throw new \Exception('Data exists');
    }
    public static function CategoriesCollection($columns = ['*'])
    {
        return parent::all($columns = ['*'])->where("enabled",1);
    }

}


