<?php 

require_once("Pessoa.php");

class PessoaJuridica extends Pessoa
{
    private string $nomeFantasia;
    private string $cnpj;

    public function __toString()
    {
        return $this->nome . " - Nome Fantasia: " . $this->nomeFantasia . " - CNPJ: " . $this->cnpj . "\n";
    }

    public function __construct($n,$nf,$cn)
    {
        $this->nome = $n;
        $this->nomeFantasia = $nf;
        $this->cnpj = $cn;
    }

    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}