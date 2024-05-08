
<?php
$nomes = array("Cassio",  "Wesley",  "Thiago",  "Vinicios",  "Delfino");

     ?>



<?php
    $nomes = ["Cassio",  "Wesley",  "Thiago",  "Vinicios",  "Delfino"];
    $nomes[]= "Valor Grande";
     echo $nomes[5];

     
?>

<?php

$nomes = ["Cassio", "Wesley", "Thiago", "Vinicios", "Delfino"];

for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i]. "\n";
}
?>

<ul>
    <?php for($i=0;$i<5;$i++) {
    echo "<li> $nomes[$i]</li>";
    }?>


</ul>

<ul>
    <?php foreach($nomes as $nome) {
        echo "<li>$nome</li>";
       

    }
    ?>
    
</ul>

<?php 
session_start();
$ultimo_login = $_SESSION["ultimo_login"];

if(!$ultimo_login){
    $_SESSION['$ultimo_login'] = date('Y-m-d H:i:s');
}
?>
<h1>
    Sessão iniciado em <?php echo $_SESSION['$ultimo_login']; ?>
</h1>



<?php

session_start();
if (!isset($_SESSION['requests'])) {
    $_SESSION['requests'] = 0;
}


$_SESSION['requests']++;


if ($_SESSION['requests'] == 29 ) {
    echo "Você ganhou um prêmio!";
} else {
    echo "Você fez ".$_SESSION['requests']." requisições.";
}

?>

<?php
setcookie('nome','Geison');
?>
  <h1><?php echo $_COOKIE['nome']?></h1>