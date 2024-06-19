<form method="post">
    <label for="sexo">Digite uma letra (F ou M):</label>
    <input type="text" id="sexo" name="sexo" required>
    <br><br>
    <input type="submit" value="Enviar">
</form>

<?php
    $sexo = $_POST['sexo'];

    if (strtolower($sexo) == 'f') {
        echo "<p>Feminino.</p>";
    } elseif (strtolower($sexo) == 'm'){
        echo "<p>Masculino</p>";
    } else {
        echo "<p>Opção inválida.</p>";
    }
?>