<?php
$servername = "172.19.0.4";
$username = "senac";
$password = "aluno";
$dbname = "senac";

$db = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
$resultado = $db->query("SELECT * FROM usuarios");
$usuarios = $resultado->fetchAll();
echo '<h1> Lista de usuario </h1>';
echo '<ul>';

foreach($usuarios as $usuario){
    echo '<li>';
    echo $usuario['nome'] . ' - ' . $usuario['email'];
    echo'</li>';
}


echo '</ul';
?>