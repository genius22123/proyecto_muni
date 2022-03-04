<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 @include('layouts.theme.styles')

    <title>@yield('title')</title>
</head>
<body >


  @livewire('navigation')



    @yield('baner')

   

    <!-- End Why Us Section --> 
    <main id="main" >
  <!-- ======= DOcuemntos Section ======= -->
  <section id="documentos" class="documentos py-5">
    <div class="container-xl">

        <div class="row g-3">
        
          <div class="col-12 col-lg-9  ">
               
            @yield('contenido')
        
        </div>
        
          <div class="col-12 col-lg-3  bg-white shadow-3">
            <div class="row">
            
              <div class="col-12 col-sm-5  col-lg-12 order-1 order-sm-2 order-lg-1">
                <div class="fw-bold " style="background-color: #18a5d1;  font-family: 'Rajdhani', sans-serif;">
                  <h1 class="text-white ms-4 py-1" >Accesos</h1>
                 </div>

             
                  <img class="img-fluid w-100 mb-3"  src="https://via.placeholder.com/310x80" alt="">
      
          
                  <img class="img-fluid w-100 mb-3 " src="https://via.placeholder.com/310x80" alt="">
          
                  <img class="img-fluid w-100 mb-3" src="https://via.placeholder.com/310x80" alt="">
             
            
            
                  <div class="fw-bold mb-2" style="background-color: #18a5d1;  font-family: 'Rajdhani', sans-serif;">
                    <h1 class="text-white ms-4 " >En vivo <div class="spinner-grow text-danger" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div></h1>
                   </div>
                   <div class="mb-3" >
                    <img class="img-fluid w-100" src="https://via.placeholder.com/310x80" alt="">
                  </div>
              </div>
            
              <div class="col-12 col-sm-12 col-lg-12 mb-3  order-3 order-sm-3 order-lg-2 ">
                <div class="fw-bold " style="background-color: #18a5d1;  font-family: 'Rajdhani', sans-serif;">
                  <h1 class="text-white ms-4 py-1" >Facebook</h1>
                 </div>
                 <div class="fb-page d-flex justify-content-center" data-href="https://www.facebook.com/narchulls/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/narchulls/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/narchulls/">Samans easy</a></blockquote></div>
              </div>

              
                  @livewire('comunicados')


            </div>

           

            
         
          
          </div>

        </div>
    </div>
  </section>

@yield('fuera')









 </main>
   
 @include('layouts.theme.footer')
 
 @include('layouts.theme.scripts')

</body>


</html>