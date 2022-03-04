<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
       $this->middleware('can:Listado de roles')->only('index');
       $this->middleware('can:Crear roles')->only('create','store');
       $this->middleware('can:Editar roles')->only('edit','update');
       $this->middleware('can:Eliminar roles')->only('destroy');
    }
    
    public function index()
    {
        $roles=Role::all();
        return view('admin.roles.index',compact('roles'));
    }

    
    public function create()
    {
        $permissions=Permission::all();
        return view('admin.roles.create',compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);
        
         $roles= Role::create([
             'name'=>$request->name
            ]);

    
          $roles->permissions()->sync($request->permissions);  
        
          return redirect()->route('admin.roles.index')->with('nice','Accion ejecutada correctamente');;
    }

   

    public function edit(Role $role)
    {
        $permissions=Permission::all();
        return view('admin.roles.edit',compact('role','permissions'));
    }

   
    public function update(Request $request,Role $role)
    {
        $request->validate([
            'name'=>'required'
        ]);

        $role->update([
            'name'=>$request->name
        ]);

        $role->permissions()->sync($request->permissions);  
        
        return redirect()->route('admin.roles.index')->with('nice','Accion ejecutada correctamente');
    }

    
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with('delete','Eliminado  correctamente');

    }
}
