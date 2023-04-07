<?php

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

require 'vendor/autoload.php';

use classes\Quadro;

$metodo = $_SERVER['REQUEST_METHOD'];

$rota = $_SERVER['REQUEST_URI'];

if($metodo === 'GET' && $rota === '/quadros'){
  echo Quadro::listarTodos();
}
