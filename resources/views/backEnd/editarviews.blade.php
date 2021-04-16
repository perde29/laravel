<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">     

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 </head>
 <body class="antialiased">
  <div class="container" >
    <div class="text-center" ><br><h1><b>Editar Clientes</b></h1></div>
    <div class="p-2" >
     <!-- --> <!-- --> <!-- --> 
     <div class="row" >  
      <div class="col-5" >
       <form  action="{{ route('updateviews', $data->id) }}" method="post" >
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="mb-3">
         <label class="form-label">Nombre:</label>
         <input type="text" class="form-control" id="nombre" value="{{ $data->nombre }}" name="nombre" >
        </div>
        <div class="mb-3">
         <label class="form-label">Apellido:</label>
         <input type="text" class="form-control" id="apellido" value="{{ $data->apellido }}" name="apellido" >
        </div>
        <!-- -->
        <div class="mb-3">
         <label class="form-label">E-mail:</label>
         <input type="text" class="form-control" id="email" value="{{ $data->email }}" name="email" >
        </div>
        <!-- -->
        <div class="mb-3">
         <label class="form-label">Usuario:</label>
         <input type="text" class="form-control" id="usuario" value="{{ $data->usuario }}" name="usuario" >
        </div>
        <!-- -->
        <input type="hidden" class="form-control" id="id" value="{{ $data->id }}" name="id" >
        <button type="submit" class="btn btn-primary">Submit</button>
       </form>
      </div> 
     </div>  
     <!-- --> <!-- --> <!-- -->
    </div>    
  </div>
 </body>
</html>
