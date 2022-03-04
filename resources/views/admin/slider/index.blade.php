@extends('adminlte::page')

@section('title', 'SIC | Gobierno local Taraco')

@section('content')
<section class="pt-3 " style="font-family: 'Nunito Sans', sans-serif;">
<div class="card p-4   ">
    <div class="card-body">
      <h3 >Slider Principal | Listado  </h3>
      <hr>
      @can('Crear slider')
                <a href="{{route('admin.slider.create')}}" class="btn btn-success  mt-2 mb-4 " >Añadir +</a>

      @endcan
          <div class="table-responsive">
                <table id="example" class="table  table-hover text-center  ">
                    <thead class="" style="background-color: #e3e9f7;color:black">
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            @can('Editar slider','Eliminar slider')
                                <th colspan="2" >Opciones</th> 
                            @endcan
                           
                        
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($sliders as $item)
                            <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nombre}}</td>
                      
                    
                          <td>
                                <a href="{{Storage::url($item->url)}}" target="_blank"><i class="fas fa-file-download fs-3"></i></a>
                            </td>
                 
                            
                      @can('Editar slider')
                          <td width="10px"   class="pe-1"  >
                            
                                    
                                 <a class="btn  btn-sm" href="{{route('admin.slider.edit',$item)}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                  
                               
                            </td>
                            @endcan
                      @can('Eliminar slider')
                            <td width="10px"   class="ps-1" >
                                <form class="formulario-eliminar" action="{{route('admin.slider.destroy',$item)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                   <button type="submit" class="btn  btn-sm" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
                                   </form>
                            </td>
                        </tr>  
                        @endcan

                        @endforeach
                        
                
                    
                
                    
                    </tbody>
                </table>
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
   

.table > thead > tr > th {

    color: #4361ee;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 1px;
    text-transform: uppercase;
}

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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
      ></script>

      @if (session('nice'))
          <script>
        
                Swal.fire(
                    
        'Exelente!',
        '{{session('nice')}}',
        'success',
       
        )
            </script>
      @endif

                @if (session('delete'))
                    <script>
                        Swal.fire(
                        'Eliminado!',
                        '{{session('delete')}}',
                        'success'
                        )
                    </script>
                @endif

      <script>

          $('.formulario-eliminar').submit(function(e){
                e.preventDefault();
                Swal.fire({
                title: '¿Estas Seguro?',
                text: "Este registro no podra recuperarse",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar'
                }).then((result) => {
                if (result.isConfirmed) {
                   this.submit();
                   
                }
                })

          });
       
      </script> 



      
@stop