<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_article extends Model
{
    use HasFactory;

    protected $table = 'article';

    protected $fillable = ['title', 'content', 'slug', 'image', 'created_at', 'updated_at'];


}
