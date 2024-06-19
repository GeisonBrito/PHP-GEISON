<?php

// Conectar ao banco de dados
$host = 'localhost';
$db   = 'user_database';
$usuário = 'Geison';
$senha = '123456';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $usuário, $senha, $opt);

// Obter entrada do usuário para nome do usuário e senha
$nome_do_usuário = $_POST['nome_do_usuário'];
$senha = $_POST['senha'];

// Verificar se o nome do usuário e senha existem no banco de dados
$stmt = $pdo->prepare('SELECT * FROM usuarios WHERE nome_do_usuário = :nome_do_usuário');
$stmt->bindParam(':nome_do_usuário', $nome_do_usuário);
$stmt->execute();
$usuário = $stmt->fetch();

if ($usuário && password_verify($senha, $usuário['senha'])) {
    echo "Login realizado com sucesso!";
} else {
    echo "Nome do usuário ou senha inválidos. Por favor, tente novamente.";
}

?>