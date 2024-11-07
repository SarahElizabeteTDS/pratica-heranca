<?php

require_once("modelos/Pessoa.php");
require_once("modelos/PessoaJuridica.php");
require_once("modelos/PessoaFisica.php");

$opcao = 0;
$pessoa = array();

do 
{
    print "\n-----------MENU-----------\n";
    print "1- Cadastrar pessoa física\n";
    print "2- Cadastrar pessoa jurídica\n";
    print "3- Listar\n";
    print "4- Excluir\n";
    print "0- SAIR";
    print "\n--------------------------\n";
    $opcao = readline("Selecione a opção (pelo índice): ");
    switch($opcao) 
    {
        case 0:
            print "\nVocê escolheu sair...\n";
            system("clear");
        break;

        case 1:
            $pessoaFisica = new PessoaFisica(readline("Insira seu nome: "), readline("Insira sua idade: "), readline("Insira seu CPF: "));
            array_push($pessoa, $pessoaFisica);
        break;

        case 2:
            $pessoaJuridica = new PessoaJuridica(readline("Insira seu nome: "), readline("Insira o nome fantasioso: "), readline("Insira seu CNPJ: "));
            array_push($pessoa, $pessoaJuridica);
        break;

        case 3:
            $inx = 1;
            foreach ($pessoa as $p) 
            {
                if ($p instanceof PessoaFisica) 
                {
                    print $inx . "- Física:\n" . $p;
                }else{
                    print $inx ."- Jurídica:\n" . $p;
                }
                $inx++;
            }
        break;

        case 4:
            $exclui = readline("Qual elemento você deseja exluir?");
            $exclui--;
            array_splice($pessoa, $exclui, 1);
        break;

        default:
            print "\nOpção inválida\n";
            system("clear");
    }
}while($opcao != 0);
