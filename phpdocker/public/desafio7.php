<form method='post'>
    <label>Digite um Número: </label>
    <input type="text" name="numero">
    <button type="submit">Enviar</button>
</form>    
<?php
$numero = $_POST['numero']; //2
function imprimirSequecia($raimundo) {
    for ($i = 1; $i <= $raimundo; $i++) {
        for ($j = 1; $j <= $i; $j++){
            echo $i . " ";
        }
        echo "<br>";
    }    
}
imprimirSequecia($numero);
