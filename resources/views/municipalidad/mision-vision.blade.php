@extends('layouts.theme.app')
@section('title')
Mision y Vision| Municipalidad distrital de Taraco
@endsection

@section('baner')
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="  background: linear-gradient(rgba(12, 13, 14, 0.8), rgba(12, 13, 14, 0.8)), url('http://wpthemesgrid.com/themes/mediplus/img/bread-bg.jpg') fixed center center;
          background-size: cover;
          padding: 50px 0;
          
        font-family: 'Rajdhani', sans-serif;">
        <div class="container">
         <div class="text-center text-white">
             <h1>MISION Y VISION</h1>
         </div>
                <div class="text-center  d-flex justify-content-center">
               
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item "><a href="#">Inicio</a></li>

                              <li class="breadcrumb-item active text-white" aria-current="page">Mision y Vision</li>
                            </ol>
                          </nav>
                </div>
          
        </div>
      </section><!-- End Cta Section -->

@endsection
@section('contenido')


  <div class="container py-5 " style="font-family: 'Rajdhani', sans-serif;">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-12 mb-5 pb-5  position-relative">
        <div class="card " style="border-radius: 15px; background-color: #fffdea; border: 1px solid #ffd6aa; ">
          <div class="card-body p-4 text-black">
            <div class="mt-4">
    
              <div class="d-flex align-items-center justify-content-between mb-3">
                <p class="fs-5 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates commodi recusandae, optio veritatis aliquid repudiandae. Vero eos quidem impedit illo, facere voluptatibus voluptates temporibus quisquam voluptas iure velit. Odio, aliquid.</p>
        
              </div>
            </div>
           
          </div>
        </div>
        <div class=" text-center position-absolute top-0 start-50 translate-middle " style=" background-color: #f7c602; ">
          <h1 class="mx-5 mt-1" style="color: black">Mision</h1>
        </div>
      </div>
      <div class="col-12 mt-5  position-relative">
        <div class="card " style="border-radius: 15px; background-color: #fffdea; border: 1px solid #ffd6aa; ">
          <div class="card-body p-4 text-black">
            <div class="mt-4">
    
              <div class="d-flex align-items-center justify-content-between mb-3">
                <p class="fs-5 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates commodi recusandae, optio veritatis aliquid repudiandae. Vero eos quidem impedit illo, facere voluptatibus voluptates temporibus quisquam voluptas iure velit. Odio, aliquid.</p>
        
              </div>
            </div>
           
          </div>
        </div>
        <div class=" text-center position-absolute top-0 start-50 translate-middle " style=" background-color: #f7c602; ">
          <h1 class="mx-5 mt-1" style="color: black">Vision</h1>
        </div>
      </div>
    </div>
  </div>

 

@endsection