<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class Axe extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;
    protected  $fillable = ['title', 'image', 'description', 'slug', 'content', 'like', 'is_publish'];

}
