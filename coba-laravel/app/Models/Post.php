<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body']; // yang boleh diisi sisanya gaboleh
    protected $guarded = ['id']; // yang gaboleh diisi sisanya boleh
}
