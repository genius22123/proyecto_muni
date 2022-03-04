<?php

namespace App\Http\Controllers\Admin\publicaciones;

use App\Http\Controllers\Controller;
use App\Models\categoria_publicaciones;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\Tag;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class publicacionesAdmin extends Controller
{
    public function __construct()
    {
       $this->middleware('can:Listado publicaciones')->only('index');
       $this->middleware('can:Crear publicaciones')->only('create','store');
       $this->middleware('can:Editar publicaciones')->only('edit','update');
       $this->middleware('can:Eliminar publicaciones')->only('destroy');
    }
    
    public function index()
    {
        $posts=Post::where('usuario_id',auth()->user()->id)->latest('id')->get();
        return view('admin.publicaciones.index',compact('posts'));
    }

    
    public function create()
    {
        $categorias=categoria_publicaciones::pluck('nombre','id');
        $tags=Tag::all();
        return view('admin.publicaciones.create',compact('categorias','tags'));
    }

   
    public function store(StorePostRequest $request)
    {
       
        $post= Post::create([
            'titulo'=>$request->titulo,
            'slug'=>$request->slug = Str::slug($request->input('titulo')),
           'extracto'=>$request->extracto,
           'cuerpo'=>$request->cuerpo,
           'estado'=>$request->estado,
           'fecha'=>$request->fecha,
           'categoria_publicaciones_id'=>$request->categoria_publicaciones_id,
           'usuario_id'=>$request->usuario_id
        ]); 

        if($request->file('url')){
           $url=Storage::put('publicaciones',$request->file('url'));

           $post->image()->create([
               'url'=>$url
           ]);
        };


        if ($request->tags) {
           $post->tags()->attach($request->tags);
        }
        return redirect()->route('admin.publicaciones.inicio.index'); 
    }

    

   
    public function edit(Post $publicacione)
    {
        $this->authorize('author',$publicacione);
        $categorias=categoria_publicaciones::pluck('nombre','id');
        $tags=Tag::all();
       return view('admin.publicaciones.edit',compact('publicacione','categorias','tags'));
    }

   
    public function update(UpdatePostRequest $request,Post $publicacione)
    {
        $this->authorize('author',$publicacione);
         $publicacione->update([
            'titulo'=>$request->titulo,
            'slug'=>$request->slug = Str::slug($request->input('titulo')),
           'extracto'=>$request->extracto,
           'cuerpo'=>$request->cuerpo,
           'estado'=>$request->estado,
  
           'categoria_publicaciones_id'=>$request->categoria_publicaciones_id,
 
        ]);

         if($request->file('url')){
            $url=Storage::put('publicaciones',$request->file('url'));
 
            if ($publicacione->image) {
                    Storage::delete($publicacione->image->url);


                    $publicacione->image->update([
                        'url'=>$url
                    ]);
            }else {
                $publicacione->image()->create([
                    'url'=>$url
                ]);
            }
           
         } 

         if ($request->tags) {
            $publicacione->tags()->sync($request->tags);
         }  
          return redirect()->route('admin.publicaciones.inicio.index')->with('nice','Accion ejecutada correctamente'); 
       
    }

    
    public function destroy(Post $publicacione)
    {
        $this->authorize('author',$publicacione);
       $publicacione->delete();
       return redirect()->route('admin.publicaciones.inicio.index')->with('delete','Eliminado  correctamente');

    }
}
