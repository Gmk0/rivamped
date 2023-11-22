<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;


    protected $fillable=['title', 'published_at', 'is_publish', 'like', 'category_id', 'slug', 'description', 'content', 'tags'];

}
