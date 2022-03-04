<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Comunicados extends Component
{
    public function render()
    {
        $comunicados=Post::where('estado',2)->where('categoria_publicaciones_id',6)->get();
        return view('livewire.comunicados',compact('comunicados'));
    }
}
