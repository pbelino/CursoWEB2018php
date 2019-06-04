<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            // strlen - Retorna primeira ocorrencia
            echo strlen($_nome)."</br>";
            
            // stripos  - Retorna primeira ocorrência 
            echo stripos($_nome,"u")."</br>";
            echo stripos($_nome,"p")."</br>";

            // strripos - Retorna última ocorrência
            echo strripos($_nome,"u")."</br>";
            echo strripos($_nome,"p")."</br>";
            
            // strtolower - converte para letras min.
            echo strtolower($_nome)."</br>";

            // strtoupper - converte para letras min.
            echo strtoupper($_nome)."</br>";

            // SUBSTR_COUNT - Conta quantas ocorreram
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            echo substr_count($_nome,"p")."</br>";
            echo substr_count($_nome,"P")."</br>";
            echo substr_count($_nome,"Curso");
        ?>
        
        
    </body>
</html>