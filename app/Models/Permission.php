<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends AbstractModel
{
    const GET = 'get';
    const CREATE = 'create';
    const UPDATE = 'update';
    const DELETE = 'delete';


    protected $dates = ['created_at','updated_at'];

    protected $fillable = ['id','title','slug','description','active','created_at','updated_at','content'];

    public function Roles($value = ''): BelongsToMany
    {
        return $this->belongsToMany(Role::class,'role_permissions');
    }



}