<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
       $this->middleware('can:Listado de Usuarios')->only('index');
       $this->middleware('can:Crear usuarios')->only('create','store');
       $this->middleware('can:Editar usuarios')->only('edit','update');
       $this->middleware('can:Eliminar usuarios')->only('destroy');
    }
    
    public function index()
    {
        $users= User::all();
        return view('admin.users.index',compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create',compact('roles'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email:rfc|unique:users,email',
            'password'=>'required|min:5'
            
        ]);
        $password=$request->password;
        $p=bcrypt($password);

        $user= User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$p
          
        ]); 

        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.index'); 
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit',compact('user','roles'));
    }

    public function update(Request $request,User $user)
    {
        $request->validate([
            'name'=>'required',
            
        ]);

        $user->update([
            'name'=>$request->name,
          
        ]);
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index')->with('nice','Accion ejecutada correctamente');
    }

   
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('delete','Eliminado  correctamente');
    }
}
