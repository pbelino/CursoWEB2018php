<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $a=5;
            $b=3;
        if ($a > $b){
            echo "A é maior que B"."<br>";
            echo "Va para clientes."."<br><br>";
        } else if ($a < $b) {
            echo "B é maior que A"."<br>";
            echo "Va para funcionario."."<br><br>";
        } else {
            echo "B é igual A"."<br>";
            echo "Vá para manager","<br><br>";
        }
        
        $fumante = true;
        
        if($fumante){
            echo "Não pode entrar.";
        } else {
            echo "Pode entrar.";
        }
        ?>
    </body>
</html>