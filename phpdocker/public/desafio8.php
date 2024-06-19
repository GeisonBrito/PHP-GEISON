<form method='post'>
    <label>Digite um Número: </label>
    <input type='text' name='numero1'>
    <br>
    <label>Digite um Número: </label>
    <input type='text' name='numero2'>
    <br>
    <label>Digite um Número: </label>
    <input type='text' name='numero3'>
    <br>
    <br>
    <button type="submit">Enviar</button>
</form>

<?php

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$num3 = $_POST['numero3'];

function somaNumeros($num1, $num2, $num3){
    $resultado =$num1+$num2+$num3;
    echo $resultado;
}

somaNumeros($num1, $num2, $num3);
