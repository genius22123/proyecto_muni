@extends('adminlte::page')

@section('title', 'SIC | Gobierno local Taraco')



@section('content')
<section class="pt-3 " style="font-family: 'Nunito Sans', sans-serif;">
<div class="card p-4   ">
    <div class="card-body">
      <h3 >Documetos Normativos Categorias | Editar </h3>
      <hr>
          <div class="mt-4" >
            {!! Form::model($categoria,['route'=>['admin.documentos-normativos.update',$categoria],'method'=>'put']) !!}
            <div>
                 <div class="form-outline">
                    {!! Form::text('nombre', null, ['class'=>'form-control form-control-lg ']) !!}
                    {!! Form::label('nombre','Ingrese Nombre' , ['class'=>'form-label']) !!} 
                    
                   
                </div>
                @error('nombre')
                <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
                <div>
                <div class="form-outline mt-4">
                    {!! Form::text('descripcion', null, ['class'=>'form-control form-control-lg ']) !!}
                    {!! Form::label('descripcion','Descripcion:' , ['class'=>'form-label']) !!} 
                
                    
                </div>
                @error('descripcion')
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
     
@stop