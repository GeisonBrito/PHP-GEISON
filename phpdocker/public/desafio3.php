<form method="post" action="#">
    <label for="numero1">Digite um número: </label>
    <input type="text" id="numero1" name="numero1">
    <br>
    <br>
    <input type="submit" value="Enviar">
</form>
<?php
$num = $_POST['numero1'];

if($num > 0){
    echo "O número é positivo";
}else{
    echo "O número é negativo";
}
?>
