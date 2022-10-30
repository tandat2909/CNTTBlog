<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends AbstractModel
{
    use HasFactory;

    protected $fillable = ['id','title','slug','description','active','created_at','updated_at','content'];


    /**
     * @param string $value
     * @return BelongsToMany
     */
    public function Permisstions (string $value = ''): BelongsToMany
    {
        return $this->belongsToMany(Permission::class,'role_permissions');
    }

    /**
     * @param string $value
     * @return HasMany
     */
    public function Users (string $value = ''): HasMany
    {
        return $this->hasMany(User::class);
    }

    public static function validateBeforeSave($data): bool
    {
        return true;
    }


}
