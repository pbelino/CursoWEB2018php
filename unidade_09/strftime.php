<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            //determinar timezone
            date_default_timezone_set('America/Sao_Paulo');
            setlocale(LC_TIME, "pt_br");
        
        
            $agora = getdate();
        
            //criar elementos
            $ano =  strftime('%G'); 
            $mes =  strftime('%B');
            $dia =  strftime('%d');
            $dia_semana = strftime('%A');
            
            $hora = strftime('%H');
            $minuto = strftime('%M');
            $segundo = strftime('%S');
        
            echo $dia_semana.", ".$dia." de ".$mes." de ".$ano." - ".$hora.":".$minuto.":".$segundo;
        ?>
    </body>
</html>