<?php

require_once("CarroPasseio.php");

class Onibus extends CarroPasseio
{
    private $pesoMax;

    public function __construct($m, $v, $c, $qtd, $pm)
    {
        $this->modelo = $m;
        $this->velocidadeMax = $v;
        $this->cor = $c;
        $this->qtdPassageiros = $qtd;
        $this->pesoMax = $pm;
    }

    public function getDados()
    {
        return "ÔNIBUS\nModelo: " . $this->modelo . "\nVelocidade Máxima: " . $this->velocidadeMax . "\nCor: " . $this->cor . "\nQuantidade de Passageiros: " . $this->qtdPassageiros . "\nPeso Máximo: " . $this->pesoMax;
    }

    public function getPesoMax()
    {
        return $this->pesoMax;
    }

    public function setPesoMax($pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }
}