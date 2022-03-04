@extends('layouts.theme.app')
@section('title')
Gestion municipal - {{$id->titulo}} | Municipalidad distrital de Taraco
@endsection

@section('baner')
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="  background: linear-gradient(rgba(12, 13, 14, 0.8), rgba(12, 13, 14, 0.8)), url('http://wpthemesgrid.com/themes/mediplus/img/bread-bg.jpg') fixed center center;
    background-size: cover;
    padding: 50px 0;
     
  font-family: 'Rajdhani', sans-serif;">
        <div class="container">
         <div class="text-center text-white">
             <h1 class="text-uppercase">Gestion Municipal - {{$id->titulo}}</h1>
         </div>
                <div class="text-center  d-flex justify-content-center">
               
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item "><a href="#">Inicio</a></li>
                              <li class="breadcrumb-item active text-white ">Gestion Municipal</li>
                              <li class="breadcrumb-item active text-white" aria-current="page">{{$id->titulo}}</li>
                            </ol>
                          </nav>
                </div>
          
        </div>
      </section><!-- End Cta Section -->

@endsection
@section('contenido')

<div class="container">
  
    <div class="ratio ratio-16x9 d-none d-md-flex" style="height: 900px"  >
   
    <iframe src="{{Storage::url($id->url)}}" frameborder="5"></iframe>
    </div>
    <div class="my-5 d-md-none text-center">
        <p>Accedio desde un dispositivo movil le recomendamos :</p>
        <a href="{{Storage::url($id->url)}}" class="btn btn-danger"> Descargar Docuemento</a>
    </div>
</div>

@endsection