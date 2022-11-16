<?php

namespace App\Models;

use Illuminate\Auth\Events\Validated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\AbstractModel;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Validation\Rule;

class Category extends AbstractModel
{
    protected $table = 'categorys';
    protected string $cacheTag = '_ca_';

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

    public function getPostCollectionByStatus(string $status = Post::STATUS_APPROVED): BelongsToMany
    {
        if(!in_array($status,Post::STATUS))
        {
            throw new \Exception("Status doesn't exists");
        }
        return $this->Posts()->where('enabled',1)
            ->where('status',$status);
    }

    public function validateBeforeSave(array $data): bool
    {
        parent::validateBeforeSave($data);

        if ($this::where('url_rewrite', $data[0]['url_rewrite'])->count() === 0) {
            return true;
        }
        throw new \Exception('Data exists');
    }

}


