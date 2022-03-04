@extends('layouts.theme.app')
@section('title')
Normativa Municipal - {{$id->nombre}} | Municipalidad distrital de Taraco
@endsection

@section('baner')
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="  background: linear-gradient(rgba(12, 13, 14, 0.8), rgba(12, 13, 14, 0.8)), url('http://wpthemesgrid.com/themes/mediplus/img/bread-bg.jpg') fixed center center;
    background-size: cover;
    padding: 50px 0;
     
  font-family: 'Rajdhani', sans-serif;">
        <div class="container">
         <div class="text-center text-white">
             <h1 class="text-uppercase">Gestion Municipal - {{$id->nombre}}</h1>
         </div>
                <div class="text-center  d-flex justify-content-center">
               
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item "><a href="#">Inicio</a></li>
                              <li class="breadcrumb-item active text-white ">Normativa Municipal</li>
                              <li class="breadcrumb-item active text-white" aria-current="page">{{$id->nombre}}</li>
                            </ol>
                          </nav>
                </div>
          
        </div>
      </section><!-- End Cta Section -->

@endsection
@section('contenido')

<div class="table-responsive text-center bg-white" style="font-family: 'Rajdhani', sans-serif;">
    <h4 class="text-center">Normativa Municipal - {{$id->nombre}}</h4>
    <table class="table  table-hover  ">
        <thead class="" style="background-color: #e3e9f7;color:black">
            <tr>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Archivo</th>
                <th >Fecha</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach ($normativa_docs as $item)
               <tr>
                <td>{{$item->titulo}}</td>
                <td>{{$item->descripcion}}</td>
                <td><a href="{{Storage::url($item->url)}}" target="_blank"><i class="bi bi-file-earmark-pdf fs-5"></i></a></td>
                <td>{{$item->fecha}}</td>
             
            </tr>  
            @endforeach
           
     
          
        </tbody>
    </table>
</div>

@endsection