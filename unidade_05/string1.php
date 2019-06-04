<?php
    $_nome = "Pedro";
    $_sobrenome = "Belino";
    $_nomecompleto = $_nome . " " . $_sobrenome;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <p>
            <?php
            //echo $_nome . " " . $_sobrenome
            echo $_nomecompleto
            ?>
        </p>
    </body>
</html>