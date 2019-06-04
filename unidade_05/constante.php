<?php
    define("MESES",12);
    $nome = "José";
    $nome = "Maria";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Meu nome é ".$nome."<br>";
            echo "Qtd de meses do ano é: ".MESES;
        ?>
        <?php
            define("MESES",13);
        ?>
    </body>
</html>