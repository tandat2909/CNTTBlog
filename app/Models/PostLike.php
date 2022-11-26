<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostLike extends AbstractModel
{

    protected $primaryKey = ['post_id','user_id'];
    public $incrementing = false;

    protected $fillable = ['post_id','user_id','is_like','created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];
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


    protected function setKeysForSaveQuery($query)
    {
        $keys = $this->getKeyName();
        if(!is_array($keys)){
            return parent::setKeysForSaveQuery($query);
        }

        foreach($keys as $keyName){
            $query->where($keyName, '=', $this->getKeyForSaveQuery($keyName));
        }

        return $query;
    }

    protected function getKeyForSaveQuery($keyName = null)
    {
        if(is_null($keyName)){
            $keyName = $this->getKeyName();
        }
        if (isset($this->original[$keyName])) {
            return $this->original[$keyName];
        }

        return $this->getAttribute($keyName);
    }


}
