<form method="post" action="#">
    <label for="numero1">Digite um Número: </label>
    <input type="text" id="numero1" name="numero1">
    <br>
    <label for="numero2">Digite um Número: </label>
    <input type="text" id="numero2" name="numero2">
    <br>
    <br>
    <input type="submit" value="Enviar">
</form>
<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

if($numero1==$numero2){
    echo "Os números são iguais";
}
elseif($numero1>$numero2){
    echo "Maior é $numero1";
}else{
    echo "Maior é $numero2";
}