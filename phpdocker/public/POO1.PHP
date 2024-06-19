
<?php
class Produto {
    public $valor= 10;
    public $nome = 'Pão';
    public function colocarEmPromocao(){
        $this->valor = $this->valor * 0.9;
}
}

$biscoito = new Produto;
$biscoito->nome = 'Biscoito';
$biscoito->valor= 20;



echo $biscoito->nome;
echo '<br>';
echo $biscoito->valor;

