<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\gestion_documentos;
use App\Models\categoria_documentos;

class Navigation extends Component
{
    public function render()
    {
        $gestion_documentos=gestion_documentos::all();
        $categoria_documentos=categoria_documentos::all();
        return view('livewire.navigation' ,compact('gestion_documentos','categoria_documentos'));
    }
}
