<div class="col-12 col-sm-7 col-lg-12 order-2 order-sm-1 order-lg-3">
    <div class="fw-bold mb-2" style="background-color: #18a5d1;  font-family: 'Rajdhani', sans-serif;">
      <h1 class="text-white ms-4 py-1" >Comunicados</h1>
     </div>
       
     <div id="slider-comunicados" class="swiper mb-3">
      <div class="swiper-wrapper">

        @foreach ($comunicados as $item)
        <div class="swiper-slide">
            <a href="{{route('publicaciones.show',$item)}}">
            <img src="{{Storage::url($item->image->url)}}" class="img-fluid" alt="">
        </a>
        </div>

        @endforeach
  
      
       
       
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div> -

    

    </div> 