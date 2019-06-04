<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $dia = "sabado";
        
            if ($dia == "sabado" && $dia == "domingo"){
                echo "Descanso<br><br>";
            } else {
                echo "Trabalho<br><br>";
            }
        
            if ($dia == "sabado" || $dia == "domingo"){
                echo "Descanso";
            } else {
                echo "Trabalho";
            }
        
        
        ?>
    </body>
</html>