<?php

require_once("modelos/Veiculo.php");
require_once("modelos/CarroPasseio.php");
require_once("modelos/Onibus.php");
require_once("modelos/Caminhao.php");

$caminhao1 = new Caminhao("ModeloX", "300km/h", "Preto", "20T", "4,4m");
print $caminhao1->getDados() . "\n";

$carropasseio1 = new CarroPasseio("ModeloY", "200km/h", "Azul", "20");
print $carropasseio1->getDados() . "\n";

$onibus1 = new Onibus("ModeloZ", "250km/h", "Branco", "50", "5T");
print $onibus1->getDados() . "\n";