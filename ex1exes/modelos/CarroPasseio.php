<?php

require_once("Veiculo.php");

class CarroPasseio extends Veiculo
{
    protected $qtdPassageiros;

    public function __construct($m, $v, $c, $qtd)
    {
        $this->modelo = $m;
        $this->velocidadeMax = $v;
        $this->cor = $c;
        $this->qtdPassageiros = $qtd;
    }

    public function getDados()
    {
        return "Modelo: " . $this->modelo . "\nVelocidade Máxima: " . $this->velocidadeMax . "\nCor: " . $this->cor . "\nQuantidade de Passageiros: " . $this->qtdPassageiros . "\n";
    }

    public function getQtdPassageiros()
    {
        return $this->qtdPassageiros;
    }

    public function setQtdPassageiros($qtdPassageiros): self
    {
        $this->qtdPassageiros = $qtdPassageiros;

        return $this;
    }
}