<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\normativo_documentos;

class categoria_documentos extends Model
{
    use HasFactory;
    
    protected $fillable=['nombre','slug','descripcion'];

    public function getRouteKeyName()
    {
       return "slug";
    } 
    //relacion uno a muchos
    public function normativo_documentos()
    {   
        return $this->hasMany(normativo_documentos::class);
    }
}
