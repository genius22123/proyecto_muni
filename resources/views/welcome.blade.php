

 @extends('layouts.theme.app')
 @section('title')
Municipalidad distrital de Taraco
 @endsection
 @section('baner')

 <section id="slider"   >

    <div id="baner" class="swiper ">
      <div class="swiper-wrapper">
       

        @foreach ($sliders as $slider)
              <div class="swiper-slide">
            <img src="{{Storage::url($slider->url)}}" alt="">
          </div> 
        @endforeach
       
       
      </div>
      <div id="next" class="button-next d-flex align-items-center justify-content-center  "><i class="bi bi-arrow-left-short"></i></i></div>
      <div id="prev" class="button-prev d-flex align-items-center justify-content-center  "><i class="bi bi-arrow-right-short"></i></i></div>
      <div class="swiper-pagination"></div>
    </div>

    
  
  </section>

  
  <section id="why-us" class="why-us">
    <div class="container">

      <div class="row">
        <div class="col-xl-4 col-lg-5" data-aos="fade-up">
          <div class="content">
            <h3 class="text-center mb-2">Gobierno Local Taraco</h3>
            <p class="text-center">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             
            </p>
            <div class="text-center mb-0">
              <img class="mb-n4 mt-n4" src="{{asset('theme/img/logo2.png')}}" width="150" alt="">
            </div> 
          </div>
        </div>
        <div class="col-xl-8 col-lg-7 d-flex">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
            
              <div id="box" class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box mt-4 py-2 mt-lg-0  ">
                 <a href=""> <i class="bi bi-file-earmark-check"></i> </a>
                  <h4 class="mb-1"><a href="">Mesa de Partes virtual</a></h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div>
            
              <div id="box" class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box mt-4  py-2 mt-xl-0">
                  <a href=""><i class="bi bi-shop"></i></a>
                  <h4 class="mb-1"><a href="">Tienda Virtual</a></h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div>
              <div id="box" class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box mt-4  py-2 mt-xl-0">
                  <a href="{{route('publicaciones')}}"><i class="bi bi-sticky"></i></a>
                  <h4 class="mb-1"><a href="{{route('publicaciones')}}" >Publicaciones</a></h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section> 
 @endsection
@section('contenido')

    <section>
        <div class="title pb-5 " >

      <h1 class="title-text">
       <span id="lred"></span>
       <i class="bi bi-pin " ></i>
           Documentos
       </h1>
     </div> 

     <div class="row">
     
       <div class="col-12  col-md-6 col-lg-4  mb-4    0">
        <div class="icon-box d-flex justify-content-center   rounded-5 " style="background-color: #E8E800;">
          <i class="bi bi-file-earmark-text-fill"></i>
          <h3 ><a href="{{route('normativa-municipal',$categoria_docs->find(1))}}">{{$categoria_docs->find(1)->nombre}}</a></h3>
        </div>
       </div>
     
       <div class="col-12  col-md-6 col-lg-4 mb-4     0">
        <div class="icon-box d-flex justify-content-center  rounded-5 " style="background-color: #555CB9;">                 <i class="bi bi-file-earmark-text-fill"></i>
          <h3 ><a href="{{route('normativa-municipal',$categoria_docs->find(2))}}">{{$categoria_docs->find(2)->nombre}}</a></h3>
        </div>
       </div>
     
       <div class="col-12  col-md-6 col-lg-4 mb-4     ">
        <div class="icon-box d-flex justify-content-center  rounded-5 " style="background-color: #77A842;">                 <i class="bi bi-file-earmark-text-fill"></i>
          <h3 ><a href="{{route('normativa-municipal',$categoria_docs->find(3))}}">{{$categoria_docs->find(3)->nombre}}</a></h3>
        </div>
       </div>
         
       <div class="col-12 col-md-6 col-lg-4  mb-4    0">
        <div class="icon-box d-flex justify-content-center  rounded-5 " style="background-color: #49B5D8;">                 <i class="bi bi-file-earmark-text-fill"></i>
          <h3 ><a href="{{route('normativa-municipal',$categoria_docs->find(4))}}">{{$categoria_docs->find(4)->nombre}}</a></h3>
        </div>
       </div>
         
       <div class="col-12  col-md-6 col-lg-4 mb-4     ">
        <div class="icon-box d-flex justify-content-center   rounded-5 " style="background-color: #E9971D;">                <i class="bi bi-file-earmark-text-fill"></i>
          <h3 ><a href="{{route('normativa-municipal',$categoria_docs->find(5))}}">{{$categoria_docs->find(5)->nombre}}</a></h3>
        </div>
       </div>
       <div class="col-12 col-md-6 col-lg-4  mb-4    0">
        <div class="icon-box d-flex justify-content-center   rounded-5 " style="background-color: #48BB96;">                <i class="bi bi-file-earmark-text-fill"></i>
          <h3 ><a href="{{route('normativa-municipal',$categoria_docs->find(6))}}">{{$categoria_docs->find(6)->nombre}}</a></h3>
        </div>
       </div>
     
     </div>
    
  </section>
<!-- mini slider -->



 <!-- post -->
 <section class="py-5 card-grid " style="font-family: 'Rajdhani', sans-serif;">
  <div class="container">
    <div class="title pb-4 d-flex"  >
      <h1 class="title-text">
       <span id="lred"></span>
       <i class="bi bi-pin " ></i>
           Publicaciones
       </h1>
       <div class="ms-auto">
       <a href="{{route('publicaciones')}}" class="btn btn-success btn-sm">VER MAS <i class="bi bi-arrow-bar-right fs-6"></i></a>
      </div>
      </div> 
    
    <div class="row mt-4">
    @foreach ($posts as $item)
        <div class=" col-12  col-md-6 @if ($loop->iteration==1 || $loop->iteration==2|| $loop->iteration==6|| $loop->iteration==7   )  col-lg-6 @else  col-lg-4  @endif   mb-4 ">
            <div class="bg-image   rounded-3" style="background-image: @if($item->image) url('{{Storage::url($item->image->url)}}') @else url('http://via.placeholder.com/640x360') @endif;  height: @if ($loop->iteration==1 || $loop->iteration==2  )  40vh  @else  30vh   @endif;    ">

              <div class=" d-flex flex-column p-3  "> 
              
          
                <div class="col mt-auto">
                
                  @foreach ($item->tags as $tag)
                      <a href="{{route('publicaciones.etiqueta',$tag)}}" class="badge bg-{{$tag->color}} mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$tag->nombre}}</a>
 
                  @endforeach
        
                  <h4 class="text-white mb-0 "><a href="{{route('publicaciones.show',$item)}}" id="link" class=" text-reset stretched-link fw-normal">{{$item->titulo}}</a></h4>
                  
                  @if ($loop->iteration==1 || $loop->iteration==2) 
                  <div class="text-white">
                   {!!Str::limit($item->extracto,80)!!}
                  </div>
                     @endif
          
                  <ul class="nav nav-divider align-items-center small">
                    <li class="nav-item">
                      <div class="nav-link ms-n3  position-relative ">
                        <span>Por: <a href="#"   class="stretched-link text-reset ">{{$item->usuario->name}}</a></span>
                      </div>
                    </li>
                    <li class="nav-item">{{$item->fecha}}</li>
                  </ul>
                </div>
              </div>
          
          
            </div>
      </div>
      
 
    @endforeach
      
    
    
    </div>
  </div>
</section>


@endsection

@section('fuera')
<section class="  py-5" style="background-color: #212121;font-family: 'Rajdhani', sans-serif;">
    <div class="container">
      <section class="pt-1   ">
        <div class="container ">
          <div class="title pb-4" >
         
            <h1 class="title-text text-white ">
             <span id="lred2"></span>
             <i class="bi bi-pin " ></i>
                 Videos
             </h1>
           </div> 
           <div class="row ">
           
             <div id="main-video" class="col-12 col-lg-7 ">
             <div id="video" class="ratio ratio-16x9 rounded-5  ">
               
    
              <iframe src="{{$videos->find(1)->url}}" width="560" height="308"></iframe>         
               </div>  
            
       
           </div>
             <div id="video-list" class="col-12 col-lg-5 mb-4 mb-md-0  " style="overflow-y: scroll; height: 400px;">
         
              <div id="vid" class="card py-1 mb-2 active    shadow-0" style="background-color: #212121;">
                <input type="text" id="src" hidden  value="{{$videos->find(1)->url}}"  width="560" height="308" width="560" height="308">
                <div class="row " >
                  <div class="col-4 text-center ">
                    <img class="rounded-3 img-fluid  ps-1 pt-1" src="{{Storage::url($videos->find(1)->imagen)}}" alt="">
                  </div>
                  <div class="col-8 gx-0 text-white ">
                    <a href="#" class="badge bg-{{$videos->find(1)->color}} mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$videos->find(1)->etiqueta}}</a>
                    <h6 id="title-list" class="">{{$videos->find(1)->titulo}}</h6>
                 
                    <ul class="nav nav-divider align-items-center small">
                    
                     <li class="nav-item">{{$videos->find(1)->fecha}}</li>
                   </ul>
                  </div>
                </div>
              </div>

            @foreach ($videos->except([1]) as $item)
                   <div id="vid" class="card py-1 mb-2   shadow-0" style="background-color: #212121;">
                <input type="text" hidden  value="{{$item->url}}" width="560" height="308">
                <div class="row " >
                  <div class="col-4 text-center ">
                    <img class="rounded-3 img-fluid  ps-1 pt-1 " src="{{Storage::url($item->imagen)}}" alt="">
                  </div>
                  <div class="col-8 gx-0 text-white ">
                    <a href="#" class="badge bg-{{$item->color}} mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$item->etiqueta}}</a>
                    <h6 id="title-list" class="">{{$item->titulo}}</h6>
                 
                    <ul class="nav nav-divider align-items-center small">
                    
                     <li class="nav-item">{{$item->fecha}}</li>
                   </ul>
                  </div>
                </div>
              </div>
            @endforeach
           
           
            </div>
           
           </div>
        </div>
    </section>
    </div>
</section>

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients my-5 py-3">
    <div class="container">
        <div class="title pb-4" >
              <h1 class="title-text">
               <span id="lred"></span>
               <i class="bi bi-pin " ></i>
                   Enlaces de interes
               </h1>
             </div> 

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="https://via.placeholder.com/116x50" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://via.placeholder.com/116x50" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://via.placeholder.com/116x50" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://via.placeholder.com/116x50" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://via.placeholder.com/116x50" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://via.placeholder.com/116x50" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://via.placeholder.com/116x50" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://via.placeholder.com/116x50" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Clients Section -->
@endsection