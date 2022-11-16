<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends AbstractModel
{

    public const USER = 'user';
    public const ADMIN = 'admin';

    protected $fillable = ['id','title','slug','description','active','created_at','updated_at','content'];
    protected $dates = ['created_at','updated_at'];

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




}
