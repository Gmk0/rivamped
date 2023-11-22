<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model
{
    use HasFactory;

    protected  $fillable = ['title','image','category_id', 'user_id','description', 'slug', 'content', 'like', 'is_publish'];


    /**
     * Les attributs qui doivent être castés à des types natifs.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime', // Cast de la colonne 'created_at' en type 'datetime'
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



    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
