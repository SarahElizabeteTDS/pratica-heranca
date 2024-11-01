<?php

require_once("Veiculo.php");

class Caminhao extends Veiculo
{
    private $qtdCarga;
    private $altura;

    public function __construct($m, $v, $c, $car, $al)
    {
        $this->modelo = $m;
        $this->velocidadeMax = $v;
        $this->cor = $c;
        $this->qtdCarga = $car;
        $this->altura = $al;
    }

    public function getDados()
    {
        return "Modelo: " . $this->modelo . "\nVelocidade Máxima: " . $this->velocidadeMax . "\nCor: " . $this->cor . "\nQuantidade de Carga: " . $this->qtdCarga . "\n" . "\nAltura: " . $this->altura . "\n";
    }

    public function getQtdCarga()
    {
        return $this->qtdCarga;
    }

    public function setQtdCarga($qtdCarga): self
    {
        $this->qtdCarga = $qtdCarga;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}