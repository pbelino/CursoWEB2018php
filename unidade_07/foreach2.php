<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $agenda = array(
                "nome"=>"Pedro",
                "sobrenome"=>"Belino",
                "salario"=>100,
                "aniversario"=>"05/08/1997",
            );
        
            foreach($agenda as $atributo=>$valor){
                echo $atributo.": ".$valor."<br>";
            }
        
        ?>
    </body>
</html>