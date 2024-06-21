<?php

class BombaCombustivel {
    private $tipoCombustivel;
    private $valorLitro;
    private $quantidadeCombustivel;

    public function __construct($tipoCombustivel, $valorLitro, $quantidadeCombustivel) {
        $this->tipoCombustivel = $tipoCombustivel;
        $this->valorLitro = round($valorLitro, 2);
        $this->quantidadeCombustivel = round($quantidadeCombustivel, 2);
    }

    public function abastecerPorValor($valor) {
        $litrosAbastecidos = round($valor / $this->valorLitro, 2);
        if ($litrosAbastecidos > $this->quantidadeCombustivel) {
            echo "Não há combustível suficiente na bomba para abastecer esse valor.<br>";
            echo "Quantidade disponível: " . round($this->quantidadeCombustivel, 2) . " litros<br>";
            return;
        }

        $this->quantidadeCombustivel -= $litrosAbastecidos;
        $this->quantidadeCombustivel = round($this->quantidadeCombustivel, 2);
        echo "Abastecido: $litrosAbastecidos litros<br>";
        echo "Combustível restante na bomba: {$this->quantidadeCombustivel} litros<br>";
    }

    public function abastecerPorLitro($litros) {
        $litros = round($litros, 2);
        if ($litros > $this->quantidadeCombustivel) {
            echo "Não há combustível suficiente na bomba para abastecer essa quantidade de litros.<br>";
            echo "Quantidade disponível: " . round($this->quantidadeCombustivel, 2) . " litros<br>";
            return;
        }

        $valorAPagar = round($litros * $this->valorLitro, 2);
        $this->quantidadeCombustivel -= $litros;
        $this->quantidadeCombustivel = round($this->quantidadeCombustivel, 2);
        echo "Valor a ser pago: R$ $valorAPagar<br>";
        echo "Combustível restante na bomba: {$this->quantidadeCombustivel} litros<br>";
    }

    public function alterarValor($novoValor) {
        $this->valorLitro = round($novoValor, 2);
        echo "O valor do litro foi alterado para: R$ {$this->valorLitro}<br>";
    }

    public function alterarCombustivel($novoTipoCombustivel) {
        $this->tipoCombustivel = $novoTipoCombustivel;
        echo "O tipo de combustível foi alterado para: {$this->tipoCombustivel}<br>";
    }

    public function alterarQuantidadeCombustivel($novaQuantidade) {
        $this->quantidadeCombustivel = round($novaQuantidade, 2);
        echo "A quantidade de combustível foi alterada para: {$this->quantidadeCombustivel} litros<br>";
    }

    public function mostrarDetalhes() {
        echo "Tipo de Combustível: {$this->tipoCombustivel}<br>";
        echo "Valor por Litro: R$ {$this->valorLitro}<br>";
        echo "Quantidade de Combustível: {$this->quantidadeCombustivel} litros<br>";
    }
}

// Exemplo de uso
$bomba = new BombaCombustivel("Gasolina", 5.49, 1000);
echo "<b>Detalhes iniciais da bomba:</b><br>";
$bomba->mostrarDetalhes();
echo "<br>";

echo "<b>Abastecendo por valor (R$ 50):</b><br>";
$bomba->abastecerPorValor(50);
echo "<br>";

echo "<b>Detalhes da bomba após abastecimento por valor:</b><br>";
$bomba->mostrarDetalhes();
echo "<br>";

echo "<b>Abastecendo por litros (20 litros):</b><br>";
$bomba->abastecerPorLitro(20);
echo "<br>";

echo "<b>Detalhes da bomba após abastecimento por litros:</b><br>";
$bomba->mostrarDetalhes();
echo "<br>";

echo "<b>Alterando valor do litro para R$ 6.00:</b><br>";
$bomba->alterarValor(6.00);
echo "<br>";

echo "<b>Detalhes da bomba após alteração do valor do litro:</b><br>";
$bomba->mostrarDetalhes();
echo "<br>";

echo "<b>Alterando tipo de combustível para Diesel:</b><br>";
$bomba->alterarCombustivel("Diesel");
echo "<br>";

echo "<b>Detalhes da bomba após alteração do tipo de combustível:</b><br>";
$bomba->mostrarDetalhes();
echo "<br>";

echo "<b>Alterando quantidade de combustível para 500 litros:</b><br>";
$bomba->alterarQuantidadeCombustivel(500);
echo "<br>";

echo "<b>Detalhes da bomba após alteração da quantidade de combustível:</b><br>";
$bomba->mostrarDetalhes();
echo "<br>";

