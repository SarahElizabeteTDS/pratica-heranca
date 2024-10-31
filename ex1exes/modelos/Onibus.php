<?php

require_once("CarroPasseio.php");

class Onibus extends CarroPasseio
{
    private $pesoMax;

    public function getDados()
    {
        return "Modelo: " . $this->modelo . "\nVelocidade Máxima: " . $this->velocidadeMax . "\nCor: " . $this->cor . "\nQuantidade de Passageiros: " . $this->qtdPassageiros . "\nPeso Máximo: " . $this->pesoMax;
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