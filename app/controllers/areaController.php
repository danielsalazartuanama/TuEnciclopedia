<?php
//HERENCIA AL CONTROLADOR
class AreaController extends Controller
{
    public function index()
    {
        $this->renderView('area/index');
    }

}