@extends('adminlte::page')

@section('title', 'SIC | Gobierno local Taraco')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <button class="btn btn-primary"> hola</button>
@stop

@section('css')
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

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
@stop