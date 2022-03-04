<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Tag extends Model
{
    use HasFactory;
    protected $fillable=['nombre','slug','color'];
    public function getRouteKeyName()
    {
       return "slug";
    } 
    //relacuon muchos amuchos
    public function publicaciones()
    {   
        return $this->belongsToMany(Post::class);
    }
}
