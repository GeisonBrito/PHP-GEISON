<p> Olá Mundo, hoje é   <?php  echo date("d/F/y H:i:s") ?><p>
    <p> A minha idade é <?php echo 2024-1993?><p>
    /* <?php
   
        require 'inicio.php';
            
            $idade = 31;
            $ano_atual = 2024;
            $idade_daqui_cinco_anos = $idade + 5; 
            $ano_nascemento = $ano_atual - $idade;

            echo $idade_daqui_cinco_anos;
            
            echo "<br>";
        

            echo $ano_nascemento; 


            echo "<br>";

            $nome = "Geison Brito";
            $mensagem = "Seja bem-vindo";  
            $mensagem_final = "$mensagem ,$nome";
            echo $mensagem_final;

            echo "<br>";

            if($idade > 17){
                echo 'pode ser preso';    
                echo "<br>";
            }
            echo "<br>";
            if($idade >= 18){
                echo 'Você é maior de idade';
            echo "<br>";    
            } else if($idade = 16){
                echo'Você é menor de idade, mas pode voltar';
                
            } else {
                echo 'Você é menor de idade e não pode voltar';
            }
            
      

         


        require 'fim.php';
        echo "<br>";
     ?>





<?php
$status = 3;
if($status == 0){
    echo 'Aguardando confirmação';
} else if ($status == 1){
    echo 'Sendo preparado';
} else if ($status == 2){
    echo 'Acaminho';
} else if ($status == 3){
    echo 'Entregue';
} else {
    echo 'Desconhecido';
}
echo "<br>";
?>

<?php

switch ($status) {
    case 0:
        echo 'Aguarando confirmação';
        break;
    case 1:
        echo 'Sendo Preparado';
        break;
    case 2:
        echo 'Acaminho';
        break;
    case 3:
        echo 'Entregue';
        break;
    default:
        echo 'Desconhecido';
        break;
}
?>


<?php
$ano = 1989;
while($ano <= 2024){
    $idade = $ano - 1989;
    echo "Sua idade era $idade em $ano <br>";
    $ano++;   
}
?>
<br>



<?php
    for ($ano = 1993; $ano < 2024; $ano++){
        $idade = $ano - 1993;
        echo "Sua idade era $idade em $ano <br>";
    }
?>



<?php require 'inicio.php' ?>
<h1>Meu Formulario</h1>
<form>
    <label for="nome"> Digite seu nome </label>
    <input name="nome" id="nome" type="text">
    <button type="submit">Enviar</button>
</form>
<?php require 'fim.php' ?>


com GET

<?php require 'inicio.php' ?>
    <h1> Meu Formulário</h1>
    <form>
        <label for="campo_de_nome"> Digite seu nome </label>
        <input name="nome_usuario" id="campo_de_nome" type="text">

        <button type="submit">Enviar</button>
    </form>
<?php require 'fim.php'?>

<?php
     if (isset($_GET['nome_usuario'])){
        $nome = $_GET['nome_usuario'];
        echo "<h2>Olá, $nome.<h2>";
     }
     ?>

com POST


<?php require 'post.php' ?>
