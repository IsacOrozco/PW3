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
            // 1) Faça um script que peça dois números e imprima a soma.
            $numero = 22;
            $numero2 = 98;
            $resultado;
            $resultado = $numero + $numero2;
            echo "O resultado da adição de $numero + $numero2 = $resultado";
            echo "<br>";

            // 2) Faça um script que peça 3 notas de um aluno e mostra sua média.
            $A = 10;
            $B = 8;
            $C = 6;
            $resultado = $A + $B + $C;
            $resultado /= 3;
            echo "A média do aluno é = $resultado";
            echo "<br>";

            /* 3) Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. 
            Calcule e mostre o total do seu salário no referido mês. */
            $A = 16.00;
            $B = 192;
            $C = $A * $B;
            echo "O salário é = $C";
            echo "<br>";

            /* 4) Tendo como dados de entrada a altura de uma pessoa, construa um script que calcule seu peso ideal, 
            usando a seguinte fórmula: (72.7*altura) – 58 */
            $A = 1.80;
            $B = $A * 72.7;
            $C = $B - 58;
            echo "O peso ideal da pessoa é = $C";
            echo "<br>";

            // 5) Leia um número e exiba seu sucessor.
            $A = 22;
            $B = 1;
            $resultado= $A + $B;
            echo "O sucessor de $A é = $resultado";
            echo "<br>";
            echo "<br>";

            echo "Criado por João Vitor A. Rangel Conti & Claudio Minoru Noguti Jr.";
        ?>
    </body>
    </html>
