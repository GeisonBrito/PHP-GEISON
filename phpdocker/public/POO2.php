
<?php
class Produto {
    public $valor= 10;
    public $nome = 'Pão';
    public function colocarEmPromocao($percentual){
        $this->valor = $this->valor * (100-$percentual)/100;
    }
}

$carne = new Produto;
$carne->nome = 'Carne';
$carne->valor= 6;
echo "Preço: $carne->valor";
$carne->colocarEmPromocao(10);
echo '<br>';
echo "Promoção: $carne->valor";



