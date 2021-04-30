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
        $this->renderView('Area/saludo');
    }

}