<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

class Post extends Model
{
    public $table = "posts";

    protected $fillable = [
        'title',
        'description',
        'body',
        'image'
    ];
}
