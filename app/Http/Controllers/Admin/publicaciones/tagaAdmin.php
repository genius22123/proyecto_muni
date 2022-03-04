<?php

namespace App\Http\Controllers\Admin\publicaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Str;
class tagaAdmin extends Controller
{
     public function __construct()
    {
       $this->middleware('can:Listado etiquetas-publicaciones')->only('index');
       $this->middleware('can:Crear etiquetas-publicaciones')->only('create','store');
       $this->middleware('can:Editar etiquetas-publicaciones')->only('edit','update');
       $this->middleware('can:Eliminar etiquetas-publicaciones')->only('destroy');
    }
    
    public function index()
    {
        $tags=Tag::all();
        return view('admin.publicaciones.etiqueta.index',compact('tags'));
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
        return view('admin.publicaciones.etiqueta.create',compact('colors'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:tags',
          
            'color'=>'required'
        ]);
        Tag::create([
            'nombre'=>$request->nombre,
            'slug'=>$request->slug = Str::slug($request->input('nombre')),
            'color'=>$request->color
        ]);

        return redirect()->route('admin.publicaciones.etiqueta.index')->with('nice','Accion ejecutada correctamente');

    }

    
   

   
    public function edit(Tag $etiqueta)
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
            return view('admin.publicaciones.etiqueta.edit',compact('etiqueta','colors'));
    }

    
    public function update(Request $request,Tag $etiqueta)
    {
        $request->validate([
            'nombre'=>"required|unique:tags,nombre,$etiqueta->id",
          
            'color'=>'required'
        ]);
        $etiqueta->update([
            'nombre'=>$request->nombre,
            'slug'=>$request->slug = Str::slug($request->input('nombre')),
           
           'color'=>$request->color
        ]);

        return redirect()->route('admin.publicaciones.etiqueta.index')->with('nice','Accion ejecutada correctamente');

    }

    
    public function destroy(Tag $etiqueta)
    {
        $etiqueta->delete();
        return redirect()->route('admin.publicaciones.etiqueta.index')->with('delete','Eliminado  correctamente');
    }
}
