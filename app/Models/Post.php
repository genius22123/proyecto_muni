<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\categoria_publicaciones;
use App\Models\Tag;
class Post extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    public function getRouteKeyName()
    {
       return "slug";
    } 
    //realcion uno amu8chos inversa
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    //realciopn uno a mu8chos ibnnversA
    public function categoria_publicaciones()
    {
        return $this->belongsTo(categoria_publicaciones::class);
    }

    //realcion muchos a mhcuis
    public function tags()
    {
        return  $this->belongsToMany(Tag::class);
    }
    //relacion unoa uno pilimorfica
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
