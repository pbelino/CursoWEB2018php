<?php
    $nome = null;
    $endereco = "Brasil";
    $telefone = "";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "se a variavel está configurada?".isset($null)."<br>";
            echo "se a variavel está configurada?".isset($endereco)."<br>";
            echo "se a variavel está configurada?".isset($telefone)."<br>";
            echo "se a variavel está configurada?".isset($cep)."<br>";
        ?>
    </body>
</html>