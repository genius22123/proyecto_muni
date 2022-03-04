<?php

namespace App\Http\Controllers\Admin\doc_normativo;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoria_documentos;

class categoria extends Controller
{
    public function __construct()
    {
       $this->middleware('can:Listado documentos normativos-categoria')->only('index');
       $this->middleware('can:Crear documentos normativos-categoria')->only('create','store');
       $this->middleware('can:Editar documentos normativos-categoria')->only('edit','update');
       $this->middleware('can:Eliminar documentos normativos-categoria')->only('destroy');
    }
   
    public function index()
    {
        $categorias_normativos=categoria_documentos::all();
        return view('admin.documentos_normativos.categorias.index',compact('categorias_normativos'));
    }

    public function create()
    {
        return view('admin.documentos_normativos.categorias.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:categoria_documentos',
            'descripcion'=>'required'
        ]);

        categoria_documentos::create([
            'nombre'=>$request->nombre,
            'slug'=>$request->slug = Str::slug($request->input('nombre')),
           'descripcion'=>$request->descripcion
        ]);
        return redirect()->route('admin.documentos-normativos.index')->with('nice','Accion ejecutada correctamente');
    }

    
    
    public function edit(categoria_documentos $categoria)
    {
        return view('admin.documentos_normativos.categorias.edit',compact('categoria'));
    }

    
    public function update(Request $request,categoria_documentos $categoria)
    {
        $request->validate([
            'nombre'=>"required|unique:categoria_documentos,nombre,$categoria->id",
            'descripcion'=>'required'
        ]);

        $categoria->update([
            'nombre'=>$request->nombre,
            'slug'=>$request->slug = Str::slug($request->input('nombre')),
           'descripcion'=>$request->descripcion
        ]);
        return redirect()->route('admin.documentos-normativos.index')->with('nice','Accion ejecutada correctamente');
    }

   
    public function destroy(categoria_documentos $categoria)
    {
        $categoria->delete();
        return redirect()->route('admin.documentos-normativos.index')->with('delete','Eliminado  correctamente');
    }
}
