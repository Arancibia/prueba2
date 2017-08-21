<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use Hash;
use Auth;

class ReportesController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('auth', ['only' => 'admin']);
    }

    public function sistema_integral_monitoreo(){
        $buscar_tecnico=DB::select("SELECT *from tecnico");
        return view('reportes.sistema_integral_monitoreo', compact('buscar_tecnico',$buscar_tecnico));        
    }
    public function sistema_integral_monitoreo_busqueda($fecha_inicio, $fecha_fin, $id_tecnico){
       // return response($datos);    
    }

    public function hoja_de_verificacion(){
        $buscar_tecnico=DB::select("SELECT *from tecnico");
        return view('reportes.hoja_de_verificacion', compact('buscar_tecnico',$buscar_tecnico));        
    }
    public function hoja_de_verificacion_busqueda($fecha_inicio, $fecha_fin, $id_tecnico){
       // return response($datos);    
    }

    public function maquina_twin_shot(){
        $buscar_tecnico=DB::select("SELECT *from tecnico");
        return view('reportes.maquina_twin_shot', compact('buscar_tecnico',$buscar_tecnico));        
    }
    public function maquina_twin_shot_busqueda($fecha_inicio, $fecha_fin, $id_tecnico){
       // return response($datos);    
    }

    public function maquina_spravac(){
        $buscar_tecnico=DB::select("SELECT *from tecnico");
        return view('reportes.maquina_spravac', compact('buscar_tecnico',$buscar_tecnico));        
    }
    public function maquina_spravac_busqueda($fecha_inicio, $fecha_fin, $id_tecnico){
       // return response($datos);    
    }    

    public function maquina_zootec(){
        $buscar_tecnico=DB::select("SELECT *from tecnico");
        return view('reportes.maquina_zootec', compact('buscar_tecnico',$buscar_tecnico));        
    }
    public function maquina_zootec_busqueda($fecha_inicio, $fecha_fin, $id_tecnico){
       // return response($datos);    
    }  
}
