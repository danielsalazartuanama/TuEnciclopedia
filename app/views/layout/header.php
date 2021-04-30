<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../public/css/area/area.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/home/home.css">

    <title><?= NOMBRESITIO ?></title>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar navbar-light bg-danger">
  <a class="navbar-brand text-white" href="http://localhost/TuEnciclopedia/public">Examen Parcial</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="http://localhost/TuEnciclopedia/public/area/index">Area de Desarrollo de Sistemas</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Area de Apuestas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://localhost/TuEnciclopedia/public/apuestas/esperanzaMatematica">Esperanza Matemática</a>
          <a class="dropdown-item" href="http://localhost/TuEnciclopedia/public/apuestas/pca">Probabilidad de la casa de apuesta</a>
          <a class="dropdown-item" href="http://localhost/TuEnciclopedia/public/apuestas/ganancianeta">Ganancia Neta</a>
          <a class="dropdown-item" href="http://localhost/TuEnciclopedia/public/apuestas/roi">ROI</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
