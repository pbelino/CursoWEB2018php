<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $data1 = new DateTime('2019-05-03');
            $data2 = new DateTime('2019-06-09');
            $intervalo = $data1->diff($data2);
        
        ?>
        
        <pre>
            <?php print_r($intervalo);?>
        </pre>
        
        <pre>
            <?php print_r($intervalo->format('%R%a'));?>
            <?php print_r($intervalo->format('%d'));?>
        </pre>
    </body>
</html>