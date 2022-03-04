<?php

namespace App\Http\Controllers;

use App\Models\categoria_publicaciones;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $categories=categoria_publicaciones::all();
        $similar=Post::where('estado',2)->take(5)->get();
        $posts=Post::where('estado',2)->latest('id')->paginate(8);
        $etiquetas=Tag::all();
   
        return view('post.index',compact('posts','categories','similar','etiquetas'));
    }
    public function show(Post $post)
    {
        $this->authorize('published',$post);
        $categories=categoria_publicaciones::all();
        $similar=Post::where('estado',2)->take(5)->get();
        $etiquetas=Tag::all();
        return view('post.show',compact('post','categories','similar','etiquetas'));
    }

    public function category(categoria_publicaciones $category )
    {
        $categories=categoria_publicaciones::all();
        $similar=Post::where('estado',2)->take(5)->get();
        $etiquetas=Tag::all();
       $posts=Post::where('categoria_publicaciones_id',$category->id)->where('estado',2)->latest('id')->paginate(8);
       return view('post.category',compact('posts','categories','similar','category','etiquetas'));
    }
    public function tag(Tag  $tag)
    {
        $categories=categoria_publicaciones::all();
        $similar=Post::where('estado',2)->take(5)->get();
        $etiquetas=Tag::all();
       $posts=$tag->publicaciones()->where('estado',2)->latest('id')->paginate(8);
       return view('post.tag',compact('posts','categories','similar','tag','etiquetas'));
    }
}
