<?php

require_once("Veiculo.php");
require_once("CarroPasseio.php");
require_once("Onibus.php");
require_once("Caminhao.php");

$caminhao1 = new Caminhao("ModeloX", "300km/h", "Preto", "20T", "4,4m");
print $caminhao1->getDados();

$carropasseio1 = new CarroPasseio("ModeloY", "200km/h", "Azul", "20");
print $carropasseio1->getDados();

$onibus1 = new Onibus("ModeloZ", "250km/h", "Branco", "50", "5T");
print $onibus1->getDados();