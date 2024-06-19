
<?php
class Produto {
    public $valor= 10;
    public $nome = 'Pão';
}

$pao = new Produto;
$leite = new Produto;
$leite->nome = 'Leite';
$leite->valor= 10;

echo $leite->nome;
echo '<br>';
echo $pao->nome;
echo '<br>';
echo $leite->valor;