@extends('adminlte::page')

@section('title', 'SIC | Gobierno local Taraco')


@section('content')
<section class="pt-3 " style="font-family: 'Nunito Sans', sans-serif;">
<div class="card p-4   ">
    <div class="card-body">
      <h3 >Publicaciones | Crear </h3>
      <hr>
          <div class="mt-4" >
            {!! Form::open(['route'=>'admin.publicaciones.inicio.store','files'=>true]) !!}
                   
           {{--    {!! Form::hidden('usuario_id', auth()->user()->id) !!} --}}
            
                    
          <div>
                 <div class="form-outline">
                    {!! Form::text('titulo', null, ['class'=>'form-control form-control-lg ']) !!}
                    {!! Form::label('titulo','Ingrese Titulo' , ['class'=>'form-label']) !!} 
                    
                   
                </div>
                @error('titulo')
                <span class="text-danger">{{$message}}</span>
                @enderror
        </div>
           

            <div class="row mt-4">
              <div class="col-6">
                <div class="">
                    {!! Form::label('categoria_publicaciones_id', 'Categoria') !!} 
                   {!! Form::select('categoria_publicaciones_id', $categorias, null, ['class'=>'form-select form-select-lg']) !!}
                
                    
                </div>
                @error('categoria_publicaciones_id')
                <span class="text-danger">{{$message}}</span>
                
               @enderror
            </div>

            <div class="col-6">
               {!! Form::label('tags', 'Etiquetas:') !!} 
              <div  class="mt-2">
               
                @foreach ($tags as $tag)
                    <div class="form-check form-check-inline">
                      {!! Form::checkbox('tags[]', $tag->id, null, ['class'=>'form-check-input']) !!}
                        
                      <label class="form-check-label">{{$tag->nombre}}</label> 
                </div> 
                @endforeach
               

                </div>
              
          
               @error('tags')
               <span class="text-danger">{{$message}}</span>
               @enderror
            </div>

            <div class="col-6 mt-3">
              
              {!! Form::label('estado', 'Estado:') !!} 
              <div class="form-check">
                
                {!! Form::radio('estado',1,true, ['class'=>'form-check-input']) !!}
                <p class="form-check-label" > Borrador </p>
              </div>

              <div class="form-check">
                
                {!! Form::radio('estado',2,false, ['class'=>'form-check-input']) !!}
                <p class="form-check-label" > Publicar </p>
              </div>
              
            </div>

            <div class="col-6">
              <div  class="mt-4">
                {!! Form::label('fecha', 'Fecha') !!} 
                   {!! Form::date('fecha', \Carbon\Carbon::now(), ['class'=>'form-control form-control-lg ']) !!}
      
                </div>
                  
          
               @error('fecha')
               <span class="text-danger">{{$message}}</span>
               @enderror
              </div>

              <div class="col-12">
                <div class=" mt-4">
                  {!! Form::label('extracto','Extracto:' , ['class'=>'form-label']) !!} 

                  {!! Form::textarea('extracto', null, ['class'=>'form-control  ']) !!}
                </div>
              @error('extracto')
              <span class="text-danger">{{$message}}</span>
              
             @enderror
          </div>
              
            <div class="col-12">
              <div class="mt-4">
                {!! Form::label('cuerpo','Cuerpo:' , ['class'=>'form-label']) !!} 
                {!! Form::textarea('cuerpo', null, ['class'=>'form-control  ']) !!}
              
              </div>
            @error('extracto')
            <span class="text-danger">{{$message}}</span>
            
           @enderror
        </div>
             
            </div>
              <hr >

            <div class="row ">
              
                <div class="col-12 order-2 col-sm-6 order-sm-1">
                    <div class=" ratio ratio-21x9">
                    <img id="vista-previa" src="http://via.placeholder.com/640x360" class="mt-2"  > 
                    </div>
                </div>
                <div class="col-12 order-1 col-sm-6 order-sm-2">
                    <div>
                    {!! Form::label('url', 'Seleccione Archivo No mayor a 10MB solo pormato pdf', ['class'=>'form-label']) !!}
                    {!! Form::file('url', ['class'=>'form-control','accept'=>'image/*']) !!}
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
        <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
        <script>
            document.querySelector('#url').addEventListener('change',()=>{
                let pdf=document.querySelector('#url').files[0];
                let url=URL.createObjectURL(pdf);
               document.querySelector('#vista-previa').setAttribute('src',url);
            })
        </script>
        <script>
          ClassicEditor
              .create( document.querySelector( '#cuerpo' ) )
              .catch( error => {
                  console.error( error );
              } );

              ClassicEditor
              .create( document.querySelector( '#extracto' ) )
              .catch( error => {
                  console.error( error );
              } );
      </script>
     
@stop