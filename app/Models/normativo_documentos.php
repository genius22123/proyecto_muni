<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categoria_documentos;
use App\Models\User;

class normativo_documentos extends Model
{
    use HasFactory;
    
    protected $fillable=['titulo','descripcion','url','fecha','categoria_documentos_id','usuario_id'];
    //relacion unioa muchos inversa
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

     //relacion unioa muchos inversa
     public function categoria_documentos()
     {
         return $this->belongsTo(categoria_documentos::class);
     }
}
