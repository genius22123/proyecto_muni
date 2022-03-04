<?php

namespace App\Http\Controllers\Admin\publicaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\categoria_publicaciones;

class categoriaAdmin extends Controller
{
    public function __construct()
    {
       $this->middleware('can:Listado de categorias-publicaciones')->only('index');
       $this->middleware('can:Crear categoria-publicaciones')->only('create','store');
       $this->middleware('can:Editar categoria-publicaciones')->only('edit','update');
       $this->middleware('can:Eliminar categoria-publicaciones')->only('destroy');
    }
    public function index()
    {
        $categorias=categoria_publicaciones::all();
        return view('admin.publicaciones.categoria.index',compact('categorias'));
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

        return view('admin.publicaciones.categoria.create',compact('colors'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:categoria_publicaciones',
            'descripcion'=>'required',
            'color'=>'required'
        ]);
        categoria_publicaciones::create([
            'nombre'=>$request->nombre,
            'slug'=>$request->slug = Str::slug($request->input('nombre')),
            'descripcion'=>$request->descripcion,
            'color'=>$request->color
        ]);

        return redirect()->route('admin.publicaciones.categoria.index')->with('nice','Accion ejecutada correctamente');
    }



    
    public function edit(categoria_publicaciones $categorium)
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
        return view('admin.publicaciones.categoria.edit',compact('categorium','colors'));
    }

    public function update(Request $request,categoria_publicaciones $categorium)
    {
        $request->validate([
            'nombre'=>"required|unique:categoria_publicaciones,nombre,$categorium->id",
            'descripcion'=>'required',
            'color'=>'required'
        ]);
        $categorium->update([
            'nombre'=>$request->nombre,
            'slug'=>$request->slug = Str::slug($request->input('nombre')),
           'descripcion'=>$request->descripcion,
           'color'=>$request->color
        ]);

        return redirect()->route('admin.publicaciones.categoria.index')->with('nice','Accion ejecutada correctamente');
    }

  
    public function destroy(categoria_publicaciones $categorium)
    {
        $categorium->delete();
        return redirect()->route('admin.publicaciones.categoria.index')->with('delete','Eliminado  correctamente');
    }
}
