<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fuelType = $_POST['fuelType'];
    $quantity = $_POST['quantity'];

    // Preços dos combustíveis por litro
    $prices = [
        "gasolina" => 5.50,
        "alcool" => 4.00,
        "diesel" => 3.80
    ];

    // Calcula o custo total
    $totalCost = $quantity * $prices[$fuelType];

    echo "<h1>Resumo do Abastecimento</h1>";
    echo "Tipo de Combustível: " . ucfirst($fuelType) . "<br>";
    echo "Quantidade: " . $quantity . " litros<br>";
    echo "Custo Total: R$ " . number_format($totalCost, 2, ',', '.') . "<br>";
    echo "<a href='index.php'>Voltar</a>";
}
