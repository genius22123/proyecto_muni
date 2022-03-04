<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class categoria_publicaciones extends Model
{
    use HasFactory;
    protected $fillable=['nombre','slug','descripcion','color'];
    //relaciopn uno amhcus
    public function getRouteKeyName()
    {
       return "slug";
    } 
    public function publicaciones()
    {
        return  $this->hasMany(Post::class);
    }

}
