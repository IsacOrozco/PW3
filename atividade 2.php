<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#cccccc;">
    <?php
    echo "<h1><p style=\"margin:10; text-align:center\">Questão 1</H1></p>";
     // 1º escreva do numero 1 até 10.
        for($i = 1; $i < 11; $i++){
            echo "<p style=\"margin:10; text-align:center\"> $i </p> ";
        }

        echo "<hr>";
        echo "<h1><p style=\"margin:10; text-align:center\">Questão 2</H1></p>";
        // 2º escreva dom numero 1 até o 10 em ordem decrescente.
        for($i = 10; $i > 0; $i--){
            echo "<p style=\"margin:10; text-align:center\"> $i </p> ";
        }
        echo "<hr>";
        echo "<h1><p style=\"margin:10; text-align:center\">Questão 3</H1></p>";
        /* 3º Escreva um algoritmo que permita a leitura das notas de uma turma de 20 alunos.
           Calcular a média da turma e contar quantos alunos obtiveram nota acima desta média calculada.
        */
        $nota = array ();
        $nota [0] = 10;
        $nota [1] = 4;
        $nota [2] = 0.5;
        $nota [3] = 1;
        $nota [4] = 2.5;
        $nota [5] = 9.5;
        $nota [6] = 5.5;
        $nota [7] = 5;
        $nota [8] = 10;
        $nota [9] = 6;
        $nota [10] = 2;
        $nota [11] = 1;
        $nota [12] = 8;
        $nota [13] = 8;
        $nota [14] = 7;
        $nota [15] = 9;
        $nota [16] = 1;
        $nota [17] = 3;
        $nota [18] = 6;
        $nota [19] = 7;
    
        $soma = 0;
    foreach ( $nota as $value){
    $soma += $value;
    
   
    }
    $media = $soma/20;
    
    echo "A média da turma é = $media <br>";
    echo "<br>";

    // Filtra os valores maiores que 5.3
$nota = array_filter($nota, function ($val) {return $val > 5.3;} );
echo "Notas acima da média: " . PHP_EOL;
print_r($nota);

    ?>
</body>
</html>