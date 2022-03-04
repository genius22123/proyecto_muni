<div>
    <section id="header2">
        <div class="container">
            <div class="row ">
            
              <div class="col-4  d-flex align-items-center    ">
                  <div class=" d-flex align-items-center ">
                     
                    <a class="" href="">
                        <img class="" src="{{asset('theme/img/logo2.png')}}" alt=""  height="120">
                       
                    </a>
             
                    <div class="d-none d-lg-block">
                        <h3 class="mb-0" style="font-family: 'Caveat', cursive; font-size: 40px;">Gobierno Local</h3>
                        <h3  class="mt-n2" style="font-family: 'Caveat', cursive; font-size: 40px;">Taraco</h3>
                    </div>
                </div>
              </div>
            
              <div class="col-8  ">
                    <div class="row   ">
                    
                  
                     <div class="col-12  d-flex    justify-content-end  "  >
    
                        <div class="pt-2 pe-4 d-inline-flex align-items-center      " style="background: rgb(24,165,209);
                        background: linear-gradient(270deg, rgba(24,165,209,1) 47%, rgba(255,255,255,1) 100%);"   >
                          <h6 class="" style="font-family: 'Roboto Mono', monospace; font-size: 15px;">Sabado, 30 de octubre 2021</h6>
                          <h6 class="d-none">|</h6>
                          <h6 class=" d-none d-xl-flex" style="font-family:'Roboto Mono', monospace; font-size: 15px;">JR:lorem  #123-Taraco</h6>
                        </div>
                        <div class="p-2 ps-3 d-none d-md-flex " style="background-color: #18a5d1;" >
                            <a
                            class="btn btn-primary btn-sm btn-floating "
                            style="background-color: #3b5998;"
                            href="#!"
                            role="button"
                            ><i class="fab fa-facebook-f "></i
                            ></a>
                        </div>
                      
                        <div class="p-2 d-none d-lg-flex "  style="background-color: #18a5d1;"  >
                            <a
                            class="btn btn-primary btn-sm  btn-floating"
                            style="background-color: #ed302f;"
                            href="#!"
                            role="button"
                            ><i class="fab fa-youtube"></i
    
                            ></a>
                        </div>
                        <div class="p-2 pe-3 d-none d-md-flex"   style="background-color: #18a5d1;" >
                            <a
                            class="btn btn-primary btn-sm  btn-floating"
                            style="background-color: #25d366;"
                            href="#!"
                            role="button"
                            ><i class="fab fa-whatsapp"></i
                            ></a>
                        </div>
                        <div class="p-2 pe-3 d-none d-md-flex"   style="background-color: #18a5d1;" >
                        <a href="">
                          <img src="public/img/logo-portal-transparencia-ch.png" alt="" width="70">
                        </a>
                      </div>
                  </div>
                      <div class="col-12  d-flex   justify-content-end   ">
                        <div class="  align-self-center m-auto    ">
                                  <p class=" mb-0  text-center d-none d-md-block  fw-bold fst-italic">" Año del Bicentenario del Perú: 200 años de Independencia"</p>
                                  <p class=" text-center mb-0  d-md-none   fst-italic" style="font-family: 'Montserrat', sans-serif;">Muni Taraco</p>
                        </div>
                        <div class=" my-2 p-2  rounded-3 text-center text-light fw-bold   d-block justify-content-end   " style="background-color: #0d8440;">
                            <p class="lh-1 mb-1  "  style="font-size: 12px; font-family: 'Rajdhani', sans-serif; font-size: 15px;">
                               <span class="" style="font-size: 13px;">Alcalde</span>
                               <br>
                                Ing. MARLON CALLA PEREZ  
                            </p>
                            <hr class=" m-0 bg-light " style="height: 2px;opacity: 1;">
                            <p class="mb-0" style="font-size: 12px; font-family: 'Rajdhani', sans-serif; font-size: 14px;"  >Gestion 2019-2022</p>
                            
    
                        </div>
                      </div>
                     
                    </div>
              </div>
            
            </div>
        </div>
    </section>
    
    
    <header id="header" class="  d-flex align-items-center shadow-3-strong     ">
      <div class="container d-flex align-items-center justify-content-center">
    
        <nav id="navbar" class="navbar shadow-0 ">
          <ul class="">
            <li><a class="nav-link scrollto {{request()->routeIs('inicio')? 'active' : ''}}" href="{{route('inicio')}}">INICIO</a></li>
            <li class="dropdown {{request()->routeIs('taraco*')? 'active' : ''}}"><a href="#"><span>taraco</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
              
            
                <li><a href="{{route('taraco.historia')}}">Historia de Taraco</a></li>
            
                <li><a href="{{route('taraco.himno')}}">himno a taraco</a></li>
                <li><a href="{{route('taraco.geografia')}}">Ubicacion Geografica</a></li>
              </ul>
            </li>
            <li class="dropdown {{request()->routeIs('municipalidad*')? 'active' : ''}}"><a href="#"><span>municipalidad</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{route('municipalidad.consejo-municipal')}}">Consejo Municipal</a></li>
            
                <li><a href="{{route('municipalidad.mision-vision')}}">Mision y vision</a></li>
                <li><a href="{{route('municipalidad.organigrama')}}">Organigrama municipal</a></li>
    
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Gestion municipal</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
          
       {{--    @foreach ($gestion_docs as $gestion_doc)
                  <li><a href="#">{{$gestion_doc->titulo}}</a></li>
              @endforeach  --}}
              
              
              </ul>
            </li>
          
            <li class="dropdown"><a href="#"><span>Transparencia</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
            
                   @foreach ($category_docs as $item)
                        <li><a href="#">{{$item->nombre}}</a></li>
                  @endforeach
              
        
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="#contact">Publicaciones</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    
      </div>
    </header>
</div>  