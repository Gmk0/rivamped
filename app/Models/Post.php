<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class Post extends Model implements HasMedia
{
    use HasFactory;


    use InteractsWithMedia;
    protected  $fillable = ['title','image','category_id', 'user_id','description', 'slug', 'content', 'tags', 'like', 'is_publish', 'published_at'];


    /**
     * Les attributs qui doivent être castés à des types natifs.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'tags'=>'array',
        'published_at'=>'datetime',
    ];

    /**
     * Accesseur pour formater la date 'created_at' de manière conviviale
     *
     * @param $value
     * @return string
     */
    public function getCreatedAtAttribute($value)
    {
        // Formater la date en utilisant Carbon (la classe de gestion de dates de Laravel)
        return $this->asDateTime($value)->format('d/m/Y'); // Format de date personnalisé
    }

    public function getTagsAttribute($value)
    {
        $tagIds = json_decode($value); // Convertit la chaîne JSON en tableau
        return Tag::whereIn('id', $tagIds)->get();
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
