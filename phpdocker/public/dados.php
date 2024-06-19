<?php
$servername = "172.19.0.2";
$username = "senac";
$password = "aluno";
$dbname = "senac";

$db = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);

$linhasAfetadas = $db->exec(
    "INSERT INTO usuarios (email, nome, senha)
    VALUES ('vovozinha@gmail.com', 'Vovozinha', '123456')"
);

if($linhasAfetadas>0){
    echo $linhasAfetadas . ' linhas afetadas ';
    }else{
        echo 'Nenhuma linha foi afetada';
}

$linhasAfetadas = $db->exec(
    "UPDATE usuarios SET email='vovozinha.com' WHERE id=3"
);
    if($linhasAfetadas> 0){
        echo $linhasAfetadas . "linhas afetadas";
    }else{
        echo "Nenhuma linha foi afetada";
    }

$linhasAfetadas = $db->exec(
    "DELETE FROM usuarios WHERE id=3"

);
if ($linhasAfetadas > 0) {
    echo $linhasAfetadas . "linhas afetadas";
}else{
    echo "Nenhuma linha foi afetada";
}   