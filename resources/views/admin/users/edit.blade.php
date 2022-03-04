@extends('adminlte::page')

@section('title', 'SIC | Gobierno local Taraco')



@section('content')
<section class="pt-3 " style="font-family: 'Nunito Sans', sans-serif;">
<div class="card p-4   ">
    <div class="card-body">
      <h3 >Usuarios | Editar </h3>
      <hr>
          <div class="mt-4" >
            {!! Form::model($user,['route'=>['admin.users.update',$user],'method'=>'put']) !!}
            
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
                {!! Form::label('roles', 'Asignar Roles:') !!} 
               <div  class="mt-2">
                
                 @foreach ($roles as $role)
                     <div class="form-check ">
                         <label >
                       {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'form-check-input']) !!}
                         
                                  {{$role->name}}
                         </label>
                 </div> 
                 @endforeach
                
 
                 </div>
               
           
                @error('tags')
                <span class="text-danger">{{$message}}</span>
                @enderror
             </div>

                {!! Form::submit('Editar', ['class'=>'btn btn-warning btn-lg mt-4']) !!}
             
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

        <script>
            document.querySelector('#url').addEventListener('change',()=>{
                let pdf=document.querySelector('#url').files[0];
                let url=URL.createObjectURL(pdf);
               document.querySelector('#vista-previa').setAttribute('src',url);
            })
        </script>
     
@stop