<?php

namespace App\Http\Controllers\Admin\slider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sliders;
use Illuminate\Support\Facades\Storage;

class sliderAdmin extends Controller
{
    public function __construct()
    {
       $this->middleware('can:Listado slider')->only('index');
       $this->middleware('can:Crear slider')->only('create','store');
       $this->middleware('can:Editar slider')->only('edit','update');
       $this->middleware('can:Eliminar slider')->only('destroy');
    }
    public function index()
    {
        $sliders=Sliders::all();
        return view('admin.slider.index',compact('sliders'));
    }

   
    public function create()
    {
        return view('admin.slider.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
           
            'url'=>'required|mimes:jpg,png|file|max:60000|dimensions:min_width=1700,min_height=500', 
         
        ]);

        $url=Storage::put('sliders', $request->file('url'));

        Sliders::create([
            'nombre'=>$request->nombre,
           'url'=>$url,
        ]); 

        return redirect()->route('admin.slider.index')->with('nice','Accion ejecutada correctamente');

    }

  
    public function edit(Sliders $slider)
    {
        return view('admin.slider.edit',compact('slider'));
    }

    
    public function update(Request $request,Sliders $slider)
    {
        $request->validate([
            'nombre'=>'required',
            'url'=>'mimes:jpg,png|file|max:60000|dimensions:min_width=1700,min_height=500', 
         
        ]);

        $slider->update([
            'nombre'=>$request->nombre,
        ]);

        
        if($request->file('url')){
            $url=Storage::put('sliders',$request->file('url'));

            if($slider->url){
                Storage::delete($slider->url);
                $slider->update([
                    'url'=>$url
                 ]);
            }
        }

        return redirect()->route('admin.slider.index')->with('nice','Accion ejecutada correctamente');
    }

   
    public function destroy(Sliders $slider)
    {
        $slider->delete();
        return redirect()->route('admin.slider.index')->with('delete','Eliminado  correctamente');
    }
}
