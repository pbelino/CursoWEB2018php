<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $salada = array("Maça","Abacate","Laranja");
            
            echo "Existe o elemento (1=yes)? ".in_array("Laranja",$salada)."<br>";
            echo "Posição do elemento? ".array_search("Laranja",$salada);
        ?>
    </body>
</html>