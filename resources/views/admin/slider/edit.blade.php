@extends('adminlte::page')

@section('title', 'SIC | Gobierno local Taraco')


@section('content')
<section class="pt-3 " style="font-family: 'Nunito Sans', sans-serif;">
<div class="card p-4   ">
    <div class="card-body">
      <h3 >Slider Principal | Crear </h3>
      <hr>
          <div class="mt-4" >
            {!! Form::model($slider,['route'=>['admin.slider.update',$slider],'method'=>'put','files'=>true]) !!}
               
            <div>
                 <div class="form-outline">
                    {!! Form::text('nombre', null, ['class'=>'form-control form-control-lg ']) !!}
                    {!! Form::label('nombre','Nombre' , ['class'=>'form-label']) !!} 
                    
                   
                </div>
                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

        <hr >

            <div class="row ">
              
                <div class="col-12 order-2 col-sm-6 order-sm-1">
                    <div class=" ratio ratio-21x9">
                    <img id="vista-previa" src="{{Storage::url($slider->url)}}" class="mt-2 img-fluid" > 
                    </div>
                </div>
                <div class="col-12 order-1 col-sm-6 order-sm-2">
                    {!! Form::label('url', 'Seleccione Imagen No mayor a 10MB solo pormato jpg / png', ['class'=>'form-label']) !!}
                    {!! Form::file('url', ['class'=>'form-control']) !!}
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