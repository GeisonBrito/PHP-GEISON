<?php
class Produto {
    private $valor = 10;
    private $nome = 'Pão';

    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function pegarnome(){
        echo 'Nome: '. $this->nome. '<br>';
    }

    public function alterarnome($nomenovo){
        $this->nome = $nomenovo;
    }
    
    public function pegarValor(){
        echo 'Valor: '.  $this->valor. '<br>';
    }

    public function alterarValor($valor){
        $this->valor = $valor;
    }

    public function colocarEmPromocao($percentual){
        $this->valor = $this->valor * (100-$percentual)/100;
    }

}

$beju = new Produto('beju', 6);
$misto = new Produto('Misto', 10);
$beju->pegarnome();
$beju->pegarValor();

$misto->pegarnome();
$misto->pegarValor();