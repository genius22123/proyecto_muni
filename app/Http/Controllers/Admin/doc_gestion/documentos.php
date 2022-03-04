<?php

namespace App\Http\Controllers\Admin\doc_gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gestion_documentos;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;

class documentos extends Controller
{
    public function __construct()
    {
       $this->middleware('can:Listado documentos gestion')->only('index');
       $this->middleware('can:Crear documentos gestion')->only('create','store');
       $this->middleware('can:Editar documentos gestion')->only('edit','update');
       $this->middleware('can:Eliminar documentos gestion')->only('destroy');
    }
    
    public function index()
    {
        $gestion_docs=gestion_documentos::all();
        return view('admin.documentos_gestion.index',compact('gestion_docs'));
    }

   
    public function create()
    {
        return view('admin.documentos_gestion.create');
    }

   
    public function store(Request $request)
    {
       
        
         
        $request->validate([
            'titulo'=>'required|unique:gestion_documentos',
            'descripcion'=>'required',
            'url'=>'required|mimes:pdf|file|max:60000', 
            'usuario_id'=>'required'
        ]);

        $url=Storage::put('gestion', $request->file('url'));

        gestion_documentos::create([
            'titulo'=>$request->titulo,
            'slug'=>$request->slug = Str::slug($request->input('titulo')),
           'descripcion'=>$request->descripcion,
           'url'=>$url,
           'usuario_id'=>$request->usuario_id
        ]); 

        return redirect()->route('admin.documentos-gestion.index')->with('nice','Accion ejecutada correctamente');


    }
 
    public function edit(gestion_documentos $documentos_gestion)
    {
        return view('admin.documentos_gestion.edit',compact('documentos_gestion'));
    }

  
    public function update(Request $request,gestion_documentos $documentos_gestion)
    {
        $request->validate([
            'titulo'=>"required|unique:gestion_documentos,titulo,$documentos_gestion->id",
            'descripcion'=>'required',
            'url'=>'mimes:pdf|file|max:60000', 
         
        ]);
        $documentos_gestion->update([
            'titulo'=>$request->titulo,
            'slug'=>$request->slug = Str::slug($request->input('titulo')),
           'descripcion'=>$request->descripcion
        ]);

        if($request->file('url')){
            $url=Storage::put('gestion',$request->file('url'));

            if($documentos_gestion->url){
                Storage::delete($documentos_gestion->url);
                $documentos_gestion->update([
                    'url'=>$url
                 ]);
            }
        }
        return redirect()->route('admin.documentos-gestion.index')->with('nice','Accion ejecutada correctamente');
    }

   
    public function destroy(gestion_documentos $documentos_gestion)
    {
        $documentos_gestion->delete();
        return redirect()->route('admin.documentos-gestion.index')->with('delete','Eliminado  correctamente');
    }
}
