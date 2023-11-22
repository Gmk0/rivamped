<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Realisation extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

     protected $fillable=['title', 'published_at', 'slug', 'is_publish', 'tags', 'content', 'files', 'description'];



     protected $cast=['published_at'=>'date',];
}
