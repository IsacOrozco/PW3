<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
        //Operadores Logicos
        // && (e) and
        // || (ou) or
        // ! (NOT) xor

        // Operador &&
        
        $numero1 = 30;
        $numero2 = 50;

        $logico = ($numero1 >= $numero2) && ($numero1 == 30);
        echo "<strong> " .  (int)$logico . "</strong>";
        echo"<br>";

        $logico = ($numero1 != $numero2) && ($numero1 == 30);
        echo "<strong> " .  (int)$logico . "</strong>";
        echo"<br>";

        // Operador AND

        $logico = ($numero1 != $numero2) and ($numero1 == 30);
        echo "<strong> " .  (int)$logico . "</strong>";
        echo"<br>";

        // Operador || "PIPER"

        $logico = ($numero1 != $numero2) || ($numero1 == 10);
        echo "<strong> " .  (int)$logico . "</strong>";
        echo"<br>";

        // Operador NOT "XOR"

        $logico = ($numero1 != $numero2) || !($numero1 == 10);
        echo "<strong> " .  (int)$logico . "</strong>";
        echo"<br>";

        $logico = !(($numero1 != $numero2) || !($numero1 == 10));
        echo "<strong> " .  (int)$logico . "</strong>";
        echo"<br>";

        $logico = ($numero1 != $numero2) || ($numero1 == 10) && !(50 > 10);
        echo "<strong> " .  (int)$logico . "</strong>";
        echo"<br>";

        if($numero1 >= 10 && 10 != 50){

        }

        ?>
    </body>
</html>