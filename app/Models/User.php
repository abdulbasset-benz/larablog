<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'email',
        'password',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class,'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class,  'role_user', 'user_id', 'role_id');
    }
}