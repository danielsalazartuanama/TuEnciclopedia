<?php
//HERENCIA AL CONTROLADOR
class ApuestasController extends Controller
{
    public function index()
    {
        $this->renderView('area/index');
    }


    public function esperanzaMatematica($param=null)
    {
        $cuota = isset($_POST['cuota']) ? $_POST['cuota'] : 0;
        $probabilidad = isset($_POST['probabilidad']) ? $_POST['probabilidad'] : 0;

        $esperanza = $cuota * $probabilidad;

        if($esperanza < 1 ){
            $rpta = "desfavorable";
        }else{
            $rpta = "favorable";
        }

        require_once '../app/views/apuestas/esperanzaMatematica.php';

    }

    public function pca($param=null)
    {
        
        $cuota = isset($_POST['cuota']) ? $_POST['cuota'] : 0;

        if($cuota>0){
            $rpta = ceil(100 * (1/$cuota));
        }else{
            $rpta="0";
        }
        
        
        require_once '../app/views/apuestas/pca.php';
       
    }
    public function gananciaNeta($param=null)
    {
        $apuesta = isset($_POST['apuesta']) ? $_POST['apuesta'] : 0;
        $cuota = isset($_POST['cuota']) ? $_POST['cuota'] : 0;
        
        $rpta = $apuesta * ($cuota-1);
        
        require_once '../app/views/apuestas/ganancianeta.php';
       
    }

    public function roi($param=null)
    {
        $ganancianeta = isset($_POST['ganancianeta']) ? $_POST['ganancianeta'] : 0;
        $invertotal = isset($_POST['invertotal']) ? $_POST['invertotal'] : 0;
        
        if($invertotal>0){
            $rpta = ($ganancianeta / $invertotal)*100;
        }else{
            $rpta="0";
        }
                
        require_once '../app/views/apuestas/roi.php';
       
    }
}