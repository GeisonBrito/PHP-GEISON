<?php
class Pessoa{
    public function __construct($nome, $idade, $altura){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
    }
    public function altura(){
        echo 'Altura: ' . $this->altura . '<br>';
    }
    public function idade(){
        echo 'Idade: ' . $this->idade . '<br>';
    }   
    public function envelhecer($qtAnos){
        echo 'Envelheceu ' . $qtAnos . ' anos <br>' ;
        for($i=0;$i<$qtAnos;$i++){
            $this->crescer();
            $this->idade++;

        }
    }
    public function crescer(){
        if($this->idade < 21){
            $this->altura = $this->altura + 0.05;
        }
    }
}   

$pessoa1 = new Pessoa('João', 19, 173.0);
$pessoa1->idade();
$pessoa1->altura();
$pessoa1->envelhecer(2);
$pessoa1->idade();
$pessoa1->altura();