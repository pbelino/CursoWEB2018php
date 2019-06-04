<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $dia = "quinta";
            switch($dia){
                case "segunda":
                    echo "Segunda<br>";
                    break;

                case "quarta":
                    echo "Quarta<br>";
                    break;

                case "sexta":
                    echo "Sexta<br>";
                    break;
                    
                default:
                    echo "Nenhum";
            }
        ?>
    </body>
</html>