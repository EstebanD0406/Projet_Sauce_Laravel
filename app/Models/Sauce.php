<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    protected $fillable = [
        'userId',
        'name',
        'manufacturer',
        'description',
        'mainPepper',
        'imageUrl',
        'heat',
        'likes',
        'dislikes',
        'usersLiked',
        'usersDisliked'
    ];

    protected $casts = [
        'usersLiked' => 'array',
        'usersDisliked' => 'array'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('like')->withTimestamps();
    }
}
