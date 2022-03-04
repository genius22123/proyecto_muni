@include('layouts.theme.styles')

@livewire('navigation')

<main style="font-family: 'Rajdhani', sans-serif;">
<section class="pt-4">
	<div class="container">
		<div class="row">
      <div class="col-12">
				<div class="border p-4 text-center rounded-3">
					<h1>{{$post->titulo}}</h1>
					<nav class="d-flex justify-content-center" aria-label="breadcrumb">
						<ol class="breadcrumb breadcrumb-dots m-0">
							<li class="breadcrumb-item"><a href="{{route('inicio')}}"><i class="bi bi-house me-1"></i> Inicio</a></li>
							<li class="breadcrumb-item active">Todas las publicaciones</li>
						</ol>
					</nav>
				</div>
      </div>
    </div>
	</div>
</section>
<section  class="py-5">
    <div class="container-xl">

        <div class="row g-3">
            <div class="col-lg-9 mx-auto ">
                @foreach ($post->tags as $tag)
                                    <a href="{{route('publicaciones.etiqueta',$tag)}}" class="badge bg-{{$tag->color}} mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{$tag->nombre}}</a>

                @endforeach
                        <h1 class="display-4">{{$post->titulo}}</h1>
                <p class="lead">{!!$post->extracto!!} </p>
                <!-- Info -->
                <ul class="nav nav-divider align-items-center">
                  <li class="nav-item">
                    <div class="nav-link">
                      by <a href="#" class="text-reset ">{{$post->usuario->name}}</a>
                    </div>
                  </li>
                  <li class="nav-item">{{$post->fecha}}</li>
         {{--          <li class="nav-item">5 min read</li> --}}
                </ul>
                <img class="rounded img-fluid w-100 mt-6" src="@if($post->image) {{Storage::url($post->image->url)}} @else http://via.placeholder.com/640x360 @endif" alt="Image">
                <p class="mt-5 ">{!!$post->cuerpo!!}</p>
                <hr>
            </div>
        
       
          <div class="col-lg-3 mt-5 mt-lg-0 bg-white">
        
          
                <div>
                    <h4 class="mb-3">Categorias:</h4>
                    <!-- Category item -->
                    @foreach ($categories as $item)
                         <div class="text-center mb-3 position-relative overflow-hidden border border-{{$item->color}} rounded" >
                        <div class="p-3">
                            <a href="{{route('publicaciones.categoria',$item)}}" id="link" class="stretched-link  fw-bold text-dark h5">{{$item->nombre}}</a>
                        </div>
                    </div>
                    @endforeach
                   
                   
                 
                </div>

                <div class="mt-5">
                    <h4 class="mb-3">#Etiquetas</h4>
                    <ul class="list-inline">
                        @foreach ($etiquetas as $item)
                        <li class="list-inline-item"><a href="{{route('publicaciones.etiqueta',$item)}}" class="btn  btn-{{$item->color}}">{{$item->nombre}}</a></li>
                       @endforeach

                    </ul>
                </div>
             

                <div class="row">
            
                    <div class="col-12 col-sm-6 col-lg-12">
                        <h4 class="mt-4 mb-3">Te puede interesar</h4>
               

                        @foreach ($similar as $key)
                            <div class="card mb-3 shadow-0">
                            <div class="row g-3">
                                <div class="col-4">
                                    <img class="rounded img-fluid" src="@if($key->image) {{Storage::url($key->image->url)}} @else http://via.placeholder.com/640x360 @endif" alt="">
                                </div>
                                <div class="col-8">
                                    <h6><a href="{{route('publicaciones.show',$key)}}" id="link" class=" stretched-link text-reset fw-bold">{{$key->titulo}}</a></h6>
                                    <div class="small mt-1">{{$key->fecha}}</div>
                                </div>
                            </div>
                             </div>
                        
                        @endforeach
                        
                     
                  
                     
                    </div>
                    <!-- Recent post widget END -->
                    

                </div> 
            
        </div>

        </div>
    </div>
  </section>

</main>
@include('layouts.theme.footer')
 
 @include('layouts.theme.scripts')