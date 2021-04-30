<?php
//HERENCIA AL CONTROLADOR
class AreaController extends Controller
{
    public function index()
    {
        $this->renderView('area/index');
    }


    public function saludo($param=null)
    {
        // if ($param==null) {
        //     $nombre= isset($_POST['nombre'])?$_POST['nombre']:'';
        // }else{
        //     $nombre= isset($param[0])? $param[0]:'';
        // }
        // //array asociativo
        // $data=[
        //     'nombre'=>$nombre,
        //     'dato 2'=>'Juaneco',
        //     'dato 3'=>56
        // ];
        // $this->renderView('Area/saludo',$data);
        $this->renderView('Area/saludo');

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