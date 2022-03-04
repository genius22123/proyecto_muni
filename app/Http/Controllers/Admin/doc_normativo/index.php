<?php

namespace App\Http\Controllers\Admin\doc_normativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\normativo_documentos;
use App\Models\categoria_documentos;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class index extends Controller
{
    public function __construct()
    {
       $this->middleware('can:Listado documentos normativos')->only('index');
       $this->middleware('can:Crear documentos normativos')->only('create','store');
       $this->middleware('can:Editar documentos normativos')->only('edit','update');
       $this->middleware('can:Eliminar documentos normativos')->only('destroy');
    }
    
    public function index()
    {
        $doc_normativos=normativo_documentos::all();
        return view('admin.documentos_normativos.index',compact('doc_normativos'));
    }

  
    public function create()
    {
        $categorias=categoria_documentos::pluck('nombre','id');
        return view('admin.documentos_normativos.create',compact('categorias'));
    }


    public function store(Request $request)
    {
         
        $request->validate([
            'titulo'=>'required|unique:gestion_documentos',
            'descripcion'=>'required',
            'url'=>'required|mimes:pdf|file|max:60000',
            'categoria_documentos_id'=>'required',
            'fecha'=>'required',
            'usuario_id'=>'required'
        ]);

        $url=Storage::put('normativo', $request->file('url'));

        normativo_documentos::create([
            'titulo'=>$request->titulo,
            
           'descripcion'=>$request->descripcion,
           'url'=>$url,
           'usuario_id'=>$request->usuario_id,
           'categoria_documentos_id'=>$request->categoria_documentos_id,
           'fecha'=>$request->fecha,
        ]); 

        return redirect()->route('admin.documentos-normativos.listado.index');
    }

   

    
    public function edit(normativo_documentos $documentos_normativo)
    {
        $categorias=categoria_documentos::pluck('nombre','id');
        return view('admin.documentos_normativos.edit',compact('documentos_normativo','categorias'));
        
    }

   
    public function update(Request $request,normativo_documentos $documentos_normativo)
    {
        $request->validate([
            'titulo'=>'required|unique:gestion_documentos',
            'descripcion'=>'required',
            'url'=>'mimes:pdf|file|max:60000',
            'categoria_documentos_id'=>'required',
            'fecha'=>'required',
        ]);

        $documentos_normativo->update([
            'titulo'=>$request->titulo,
   
                 'descripcion'=>$request->descripcion,
           
            'categoria_documentos_id'=>$request->categoria_documentos_id,
            'fecha'=>$request->fecha

        ]);
        if($request->file('url')){
            $url=Storage::put('normativo',$request->file('url'));

            if($documentos_normativo->url){
                Storage::delete($documentos_normativo->url);
                $documentos_normativo->update([
                    'url'=>$url
                 ]);
            }
        }
        return redirect()->route('admin.documentos-normativos.listado.index')->with('nice','Accion ejecutada correctamente');
        
    }

  
    public function destroy(normativo_documentos $documentos_normativo)
    {
        
    }
}
