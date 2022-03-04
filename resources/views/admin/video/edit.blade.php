@extends('adminlte::page')

@section('title', 'SIC | Gobierno local Taraco')


@section('content')
<section class="pt-3 " style="font-family: 'Nunito Sans', sans-serif;">
<div class="card p-4   ">
    <div class="card-body">
      <h3 >Slider Principal | Crear </h3>
      <hr>
          <div class="mt-4" >
            {!! Form::model($video,['route'=>['admin.video.update',$video],'method'=>'put','files'=>true]) !!}
               
            <div class="row"> 
                <div class="col-6">
                    <div class="form-outline">
                        {!! Form::text('titulo', null, ['class'=>'form-control form-control-lg ']) !!}
                        {!! Form::label('titulo','Titulo' , ['class'=>'form-label']) !!} 
                        
                    
                    </div>
                    @error('titulo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-6 ">
                    <div class="form-outline">
                        {!! Form::text('etiqueta', null, ['class'=>'form-control form-control-lg ']) !!}
                        {!! Form::label('etiqueta','Etiqueta' , ['class'=>'form-label']) !!} 
                    </div>
                    @error('etiqueta')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-12 mt-4">
                    <div class="">
                        {!! Form::label('color', 'Color') !!} 
                       {!! Form::select('color', $colors, null, ['class'=>'form-select form-select-lg']) !!}
                    
                        
                    </div>
                    @error('color')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-12 mt-4">
                    <div class="form-outline">
                        {!! Form::text('url', null, ['class'=>'form-control form-control-lg ']) !!}
                        {!! Form::label('url','Direccion URL' , ['class'=>'form-label']) !!} 
                    </div>
                    @error('url')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                </div>

               <hr >

            <div class="row ">
              
                <div class="col-12 order-2 col-sm-6 order-sm-1">
                    <div class="text-center">
                    <img id="vista-previa" src="{{Storage::url($video->imagen)}}" class="mt-2 img-fluid" > 
                    </div>
                </div>
                <div class="col-12 order-1 col-sm-6 order-sm-2">
                    {!! Form::label('imagen', 'Seleccione Imagen No mayor a 10MB solo pormato jpg / png', ['class'=>'form-label']) !!}
                    {!! Form::file('imagen', ['class'=>'form-control']) !!}
                    @error('imagen')
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
           document.querySelector('#imagen').addEventListener('change',()=>{
                let pdf=document.querySelector('#imagen').files[0];
                let url=URL.createObjectURL(pdf);
               document.querySelector('#vista-previa').setAttribute('src',url);
            })
        </script>
     
@stop