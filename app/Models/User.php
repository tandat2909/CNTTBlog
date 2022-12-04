<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $dates = ['created_at','updated_at','lastLogin','email_verified_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'role_id',
        'name',
        'email',
        'avatar',
        'email_verified_at',
        'firstName',
        'middleName',
        'lastName',
        'lastLogin',
        'intro',
        'profile',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'enabled'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function PostCollection ($value=''): HasMany
    {
        $user = Auth::user();
        $posts = $this->hasMany(Post::class,'author_id');
        if($user && $this->id === $user->id){
            return $posts;
        }
        return $posts->where('status',Post::STATUS_APPROVED);
    }

    public function countPost(): int
    {
        return $this->PostCollection()->count();
    }

    public function CommentCollection($value =''): HasMany
    {
        return $this->hasMany(PostComment::class,'user_id');
    }
    public function countComment(): int
    {
        return $this->CommentCollection()->count();
    }
}
