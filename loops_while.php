<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php

        $num = 0;
        echo '-- Início do loop --<br>';
        while($num <= 10) {
            
            $num += 1; //critério de parada
            
            if ($num == 2 || $num == 6) {
                continue;
            }

            echo "$num <br>";


            /*
            if ($num > 100) {
                contin
            }
            */
        }
        echo '-- Fim do loop --';
    ?>

</body>
</html>