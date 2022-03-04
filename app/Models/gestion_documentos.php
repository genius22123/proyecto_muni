<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class gestion_documentos extends Model
{
    use HasFactory;
    protected $fillable=['titulo','slug','url','descripcion','usuario_id'];
    public function getRouteKeyName()
    {
       return "slug";
    } 
    //relacion uno a muchos ibversa
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
