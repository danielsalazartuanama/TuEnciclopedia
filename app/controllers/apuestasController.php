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
        // $this->renderView('Area/saludo',$data);
        // $this->renderView('apuestas/esperanzaMatematica');
        require_once '../app/views/apuestas/esperanzaMatematica.php';

    }

    public function suma($param=null)
    {
        $num1 = isset($_POST[0]) ? $_POST[0] : 0;
        $num2 = isset($_POST[1]) ? $_POST[1] : 0;
        $rpta = $num1 + $num2;
        // require_once '../app/views/area/suma.php';

        // echo "LA SUMA DE: {$num1} + {$num2} = {$rpta}";
       
    }
    public function multi($param=null)
    {

       
            $num1 = isset($_POST[0]) ? $_POST[0] : 0;
     
            $num2 = isset($_POST[1]) ? $_POST[1] : 0;
        
            $rpta = $num1  * $num2;
            require_once '../app/views/area/multi.php';
        //    echo "LA MULTI DE: {$num1} * {$num2} = {$rpta}";
       
    }
}