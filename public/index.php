<?php
// //los require once porque queremos cargar en memoria y este duisponible para todos los controladores y se habra 
require_once '../libs/core.php';
require_once '../config/config.php';
require_once '../libs/controller.php';
require_once '../app/views/layouts/master.php';
$core=new Core();


// spl_autoload_register(function($nombreClase){
//     require_once 'libs/' .$nombreClase. '.php';
// });