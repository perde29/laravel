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
    <div class="text-center" ><br><h1><b>Lista Clientes</b></h1></div>
    <div class="p-2" >
     <div><a href="{{ url('/createviews/') }}" class="btn btn-dark">Nuevo</a></div>  
     <!-- --> <!-- --> <!-- -->   
     <table class="table">
      <thead>
       <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">E-mail</th>
        <th scope="col">Usuario</th>
        <th scope="col">Evento</th>
       </tr>
      </thead>
      <tbody>
        @foreach($registro as $p)
          <tr>
           <th scope="row">{{$p->id}}</th>
           <td>{{$p->nombre}}</td>
           <td>{{$p->apellido}}</td>
           <td>{{$p->email}}</td>
           <td>{{$p->usuario}}</td>
           <td>
            <form action="{{ route('deleteusuario', $p->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-outline-danger">Eliminar</button>
            </form>
            <a href="{{ url('createviews', $p->id) }}" class="btn btn-dark">Editar</a> 
           </td>
          </tr>
        @endforeach
      </tbody>
     </table>   
     <!-- --> <!-- --> <!-- -->
    </div>    
  </div>
 </body>
</html>
