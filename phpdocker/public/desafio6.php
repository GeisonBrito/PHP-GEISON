<form method='post'>
    <label for='username'>Digite um número: </label>
    <input type='text' name='numero'>
    <button type="submit">Enviar</button>
</form>
<?php
$numero = $_POST['numero'];
function imprimirSequencia($raimundo) {
    for ($i = 1; $i <= $raimundo; $i++) {
        for ($j = 1; $j <=$i; $j++) {
            echo $j ;
        }
        echo "<br>";
    }
}
imprimirSequencia($numero); 