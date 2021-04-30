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

        $data = [            
            'cuota' => $cuota,
            'probabilidad' => $probabilidad,
            'rpta' => $rpta
        ];

        $this->renderView('apuestas/esperanzaMatematica',$data);

    }

    public function pca($param=null)
    {
        
        $cuota = isset($_POST['cuota']) ? $_POST['cuota'] : 0;

        if($cuota>0){
            $rpta = 100 * (1/$cuota);
        }else{
            $rpta = 0;
        }
            
        $data = [
            'cuota' => $cuota,
            'rpta' => $rpta
        ];

        $this->renderView('apuestas/pca',$data);
       
    }
    public function gananciaNeta($param=null)
    {
        $apuesta = isset($_POST['apuesta']) ? $_POST['apuesta'] : 0;
        $cuota = isset($_POST['cuota']) ? $_POST['cuota'] : 0;
        
        $rpta = $apuesta * ($cuota-1);
        
        $data = [
            'apuesta' => $apuesta,
            'cuota' => $cuota,
            'rpta' => $rpta
        ];

        $this->renderView('apuestas/gananciaNeta',$data);  
    }

    public function roi($param=null)
    {
        $ganancianeta = isset($_POST['ganancianeta']) ? $_POST['ganancianeta'] : 0;
        $invertotal = isset($_POST['invertotal']) ? $_POST['invertotal'] : 0;
        
        if($invertotal>0){
            $rpta = ($ganancianeta / $invertotal)*100;
        }else{
            $rpta=0;
        }
                
        $data = [
            'ganancianeta' => $ganancianeta,
            'invertotal' => $invertotal,
            'rpta' => $rpta
        ];

        $this->renderView('apuestas/roi',$data);      
    }
}