<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Trimestre: ".$salario * $meses ."</br>";
            echo "Quinzena: ".$salario / 2 ."</br>";
            // Exponencial
            echo "Exponencial: ".pow(8,2) ."</br>";
            // Raiz Quadrada
            echo "Raiz Quadrada: ".sqrt(36) ."</br>";
            // Randômico Generica
            echo "Randomico: ".rand() ."</br>";
            // Randômico entre um intervalo
            echo "Randomico: ".rand(1,10) ."</br>";
            // Valor absoluto
            echo "Absoluto: ".abs(-210);
            
        ?>
    </body>
</html>