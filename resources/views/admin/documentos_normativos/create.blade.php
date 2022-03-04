@extends('adminlte::page')

@section('title', 'SIC | Gobierno local Taraco')


@section('content')
<section class="pt-3 " style="font-family: 'Nunito Sans', sans-serif;">
<div class="card p-4   ">
    <div class="card-body">
      <h3 >Documentos Normativos | Crear </h3>
      <hr>
          <div class="mt-4" >
            {!! Form::open(['route'=>'admin.documentos-normativos.listado.store','files'=>true]) !!}
                    {!! Form::hidden('usuario_id', auth()->user()->id) !!}
            
                    
          <div>
                 <div class="form-outline">
                    {!! Form::text('titulo', null, ['class'=>'form-control form-control-lg ']) !!}
                    {!! Form::label('titulo','Ingrese Titulo' , ['class'=>'form-label']) !!} 
                    
                   
                </div>
                @error('titulo')
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
            <div class="row mt-4">
                <div class="col">
                <div class="">
                    {!! Form::label('categoria_documentos_id', 'Categoria') !!} 
                   {!! Form::select('categoria_documentos_id', $categorias, null, ['class'=>'form-select form-select-lg']) !!}
                
                    
                </div>
                @error('categoria_documentos_id')
                <span class="text-danger">{{$message}}</span>
                
               @enderror
            </div>

            <div class="col">
              <div >
                {!! Form::label('fecha', 'Fecha') !!} 
                   {!! Form::date('fecha', null, ['class'=>'form-control form-control-lg ']) !!}
      
                </div>
                  
          
               @error('fecha')
               <span class="text-danger">{{$message}}</span>
               @enderror
              </div>
             
            </div>
              <hr >

            <div class="row ">
              
                <div class="col-12 order-2 col-sm-6 order-sm-1">
                    <div class=" ratio ratio-21x9">
                    <embed id="vista-previa" class="mt-2"  type="application/pdf"> 
                    </div>
                </div>
                <div class="col-12 order-1 col-sm-6 order-sm-2">
                    <div>
                    {!! Form::label('url', 'Seleccione Archivo No mayor a 10MB solo pormato pdf', ['class'=>'form-label']) !!}
                    {!! Form::file('url', ['class'=>'form-control']) !!}
                    </div>
                    @error('url')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
                {!! Form::submit('Añadir', ['class'=>'btn btn-success btn-lg mt-4']) !!}
             
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