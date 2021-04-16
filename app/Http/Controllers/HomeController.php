<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
   // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index(Request $request){

      $registro = DB::table('usuario')->get(); // ->first();	
      // $this->toJson();
      return view('backEnd.lisregistro', compact('registro'));
    }


    public function createviews(Request $request){

      $datos = $request->all();

      try {

      	if(!empty($datos['nombre'])){

      	  
	      $inset = DB::table('usuario')->insert(
			        array(
			         'nombre'   => $datos['nombre'],
			         'apellido' => $datos['apellido'],
			         'email'    => $datos['email'],
			         'usuario'  => $datos['usuario']
			        )
			       );

	      return redirect('usuario');

      	}
      	 
      }catch(\Exception $e) {
        $data=[];
        return $data;
      }	

      return view('backEnd.create');	
    }


    public function editviews($id){

      try {
      
     
        $data = DB::table('usuario')->find($id);

        return view('backEnd.editarviews', compact('data'));
      } catch (\Exception $e) {
        Toastr::error('Operation Failed', 'Failed');
        return redirect()->back();
      }	
    }


    public function updateviews(Request $request,$id){

      $datos = $request->all();

      try {

      	if(!empty($datos['nombre'])){

      	  
	      $inset = DB::table('usuario')->where('id', $datos['id'])->update(
			        array(
			         'nombre'   => $datos['nombre'],
			         'apellido' => $datos['apellido'],
			         'email'    => $datos['email'],
			         'usuario'  => $datos['usuario']
			        )
			       );

	      return redirect('usuario');

      	}
      	 
      }catch(\Exception $e) {
        $data=[];
        return $data;
      }		

    }


    public function deleteviews($id){

      //echo $id;
      DB::table('usuario')->delete($id);      
      return redirect('/usuario');

    }





}
