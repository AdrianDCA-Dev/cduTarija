<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color'];
    //relacion muchos a muchos
    public function getRouteKeyName()
    {
        return "slug"; // TODO: Change the autogenerated stub
    }
    public function tags(){
        return $this->belongsToMany(Post::class);
    }

    // RELACIÓN MUCHOS A MUCHOS (inversa - posts)
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
