<?php

namespace App\Http\Controllers\Admin\video;

use App\Http\Controllers\Controller;
use App\Models\videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class videoAdmin extends Controller
{
    public function __construct()
    {
       $this->middleware('can:Listado videos')->only('index');
       $this->middleware('can:Crear videos')->only('create','store');
       $this->middleware('can:Editar videos')->only('edit','update');
       $this->middleware('can:Eliminar videos')->only('destroy');
    }
    public function index()
    {
        $videos=videos::all();
        return view('admin.video.index',compact('videos'));
    }

    public function create()
    {
        $colors=[
            'primary'=>'Color azul ',
            'secondary'=>'Color morado ',
            'success'=>'Color verde',
            'danger'=>'Color rojo',
            'warning'=>'Color amarillo ',
            'info'=>'Color celeste',
            'light'=>'Color gris claro ',
            'dark'=>'Color negro claro', ];

        return view('admin.video.create',compact('colors'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'titulo'=>'required',
            'etiqueta'=>'required',
            'color'=>'required',
            'url'=>'required',
            'imagen'=>'required|mimes:jpg,png|file|max:60000|dimensions:min_width=200,min_height=200', 
         
        ]);

        $imagen=Storage::put('videos', $request->file('imagen'));

        videos::create([
            'titulo'=>$request->titulo,
            'etiqueta'=>$request->etiqueta,
            'color'=>$request->color,
            'url'=>$request->url,
           'imagen'=>$imagen
        ]); 

        return redirect()->route('admin.video.index')->with('nice','Accion ejecutada correctamente');
    }


    public function edit(videos $video)
    {
        $colors=[
            'primary'=>'Color azul ',
            'secondary'=>'Color morado ',
            'success'=>'Color verde',
            'danger'=>'Color rojo',
            'warning'=>'Color amarillo ',
            'info'=>'Color celeste',
            'light'=>'Color gris claro ',
            'dark'=>'Color negro claro', ];
        return view('admin.video.edit',compact('video','colors'));
    }

   
    public function update(Request $request,videos $video)
    {
        $request->validate([
            'titulo'=>'required',
            'etiqueta'=>'required',
            'color'=>'required',
            'url'=>'required',
            'imagen'=>'mimes:jpg,png|file|max:60000|dimensions:min_width=200,min_height=200', 
         
        ]);

        $video->update([
            'titulo'=>$request->titulo,
            'etiqueta'=>$request->etiqueta,
            'color'=>$request->color,
            'url'=>$request->url,
          
        ]); 
        if($request->file('imagen')){
            $imagen=Storage::put('videos',$request->file('imagen'));

            if($video->url){
                Storage::delete($video->url);
                $video->update([
                    'imagen'=>$imagen
                 ]);
            }
        }

        return redirect()->route('admin.video.index')->with('nice','Accion ejecutada correctamente');
    }

    
    public function destroy(videos $video)
    {
        $video->delete();
        return redirect()->route('admin.video.index')->with('delete','Eliminado  correctamente');
    }
}
