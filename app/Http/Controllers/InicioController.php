<?php

namespace App\Http\Controllers;

use App\Models\categoria_documentos;
use App\Models\gestion_documentos;
use App\Models\normativo_documentos;
use App\Models\Post;
use App\Models\Sliders;
use App\Models\videos;


use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $videos=videos::all();
        $sliders=Sliders::all();
        $categoria_docs=categoria_documentos::take(6)->get();
  /*      $ultimo_post=Post::where('estado',2)->latest('id')->first(); */
         $posts=Post::where('estado',2)->latest('id')->take(7)->get();
        
        return view('welcome', compact('categoria_docs','sliders','videos','posts'));
    }
    public function gestion(gestion_documentos $id)
    {
       
    
        return view('gestion-municipal.show',compact('id'));
    }
    public function normativa(categoria_documentos $id)
    {
        $normativa_docs=normativo_documentos::where('categoria_documentos_id',$id->id)->get();
       return view('normativa-municipal.show',compact('normativa_docs','id'));
    }
}
