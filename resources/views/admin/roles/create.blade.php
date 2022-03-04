@extends('adminlte::page')

@section('title', 'SIC | Gobierno local Taraco')



@section('content')
<section class="pt-3 " style="font-family: 'Nunito Sans', sans-serif;">
<div class="card p-4   ">
    <div class="card-body">
      <h3 >Roles | Crear </h3>
      <hr>
          <div class="mt-4" >
            {!! Form::open(['route'=>'admin.roles.store']) !!}
            
            <div>
                <div class="form-outline mt-4">
                    {!! Form::text('name', null, ['class'=>'form-control form-control-lg ']) !!}
                    {!! Form::label('name','Nombre:' , ['class'=>'form-label']) !!} 
                
                    
                </div>
                @error('name')
                <span class="text-danger">{{$message}}</span>
                
               @enderror
            </div>

           

            <div class="mt-4">
            {!! Form::label('permissions', 'Asignar Rol:') !!}
               <div  class="mt-2">
                
                 @foreach ($permissions as $permission)
                      <div class="form-check ">
                         <label >
                       {!! Form::checkbox('permissions[]',$permission->id,null,['class'=>'form-check-input']) !!}
                         
                                  {{$permission->name}}
                         </label>
                 </div>  
                 
                 @endforeach
                
 
                 </div> 

               
             </div>

                {!! Form::submit('Añadir Rol', ['class'=>'btn btn-warning btn-lg mt-4']) !!}
             
            {!! Form::close() !!}
          </div>
      

    </div>
  </div>
</section>
@stop

@section('css')

<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
rel="stylesheet"
/>
<style>
   
    .nav-pills .nav-link {
        background-color:rgba(0, 0, 0, 0);
  
            padding: 17px 19px 16px; 
            font-size: 14px;
            text-transform:none;
    }
    .nav-pills .nav-link i{
            font-size: 20px;
    }
  

</style>
@stop

@section('js')
    
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
        ></script>

      
     
@stop