<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
    </head>
    <body>
        <h2>Operadores Comparação</h2>
        <ul>
            <li>maior &gt;</li>
            <li>menor &lt;</li>
            <li>maior e igual &gt; = </li>
            <li>menor e igual &lt; = </li>
            <li>igual == </li>
            <li>difernte != </li>
            <li>negação !()</li>
        </ul>
            <?php
                $anoAtual = 2022;
                $anoNasc = 2004;
                $idade = $anoAtual - $anoNasc;

                // maior
                $resultado = $idade < 18; //false
                
                echo " <p> Tipo de Booleano 'maior' " . (int)$resultado ."</p>";

                $resultado = $idade >= 18; //false

                echo " <p> Tipo de Booleano 'maior e igual' " . (int)$resultado ."</p>";

                // AULA 2
               
                // menor que <
                $A = 10;
                $B = 10;

                $C = $A < $B;
                echo " \$C = " . (int) $C;
                echo "<br>";

                //menor e igual que
                $C = $A <= $B;
                echo "\$C = " . (int) $C;
                echo "<br>";

                // igual ==
                $C = $A == $B;
                echo "\$C = " . (int) $C;
                echo "<br>";

                // diferente
                $A = 30;
                $B = 40;
                $C = $A != $B; // 1 = TRUE  0 = FALSE
                echo "\$C = " . (int) $C; // 1
                echo "<br>";

                // negação !()
                $C = !($A == $B) ; // 1 = TRUE  0 = FALSE
                echo "\$C = " . (int) $C; // 
                echo "<br>";
                
                $C = !(false) ; // 1 = TRUE  0 = FALSE
                echo "\$C = " . (int) $C; // 
                echo "<br>";

                // mengão malvadão
                // VASCO DA GAMA
                

            ?>
    </body>
</html>