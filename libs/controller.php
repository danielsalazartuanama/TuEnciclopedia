<?php

class Controller
{
    public function renderView(string $view, $data = null){

        // require_once '../app/views/test/index.php';
        if (file_exists('../app/views/' .$view . '.php')) {

            require_once '../app/views/' .$view . '.php';

        }else{
            echo("LA VISTA NO EXISTE");
        }

    }
}