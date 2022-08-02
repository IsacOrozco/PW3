<?php
    /*1) Escreva um algoritmo que armazene o valor 10 em uma variável A e o valor 20 em uma variável B. 
    A seguir (utilizando apenas atribuições entre variáveis) troque os seus conteúdos fazendo com que o
    valor que está em A passe para B e vice-versa. Ao final, escrever os valores que ficaram armazenados
    nas variáveis.*/
        echo "1) ";
        $a = 10;
        $b = 20;

        $c = $a; //$a = 10

        $a = $b; //$b = 20
        $b = $c; //10

        echo "A = " . $a . " , B =" .$b; // A=20, B=10
    echo "<br>";
    echo "<br>";

    // 2) Analise os algoritmos abaixo e diga o que será impresso na tela ao serem executados:
    /* a)
    A 10
    B 20
    Escrever B
    B 5
    Escrever A, B */
        echo "2 - a) ";
        $a = 10;
        $b = 20;
        echo "B = " . $b;
    echo "<br>";
        $a = 10;
        $b = 5;
        echo "A =  $a, B = $b";         
    echo "<br>";
    echo "<br>";

    /* b)
    A 30
    B 20
    C A + B
    Escrever C
    B 10
    Escrever B, C
    C A + B
    Escrever A, B, C */ 
        echo "2 - b) ";
        $a = 30;
        $b = 20;
        $c = $a + $b;
        echo "C = " . $c; 
    echo "<br>";
        $a = 30;
        $b = 10;
        echo "B =" . $b . ", C =" . $c;
    echo "<br>";
        $c = $a + $b;
        echo "A = " . $a . ", B = " . $b . ", C =" . $c;       
    echo "<br>";
    echo "<br>";

    /* c)
    A 10 
    B 20
    C A 
    B C 
    A B
    Escrever A, B, C */
        echo "2 - c) ";
        $a = 10;
        $b = 20;
        $c = $a;
        $b = $c;
        $a = $b;
        echo "A = " . $a . ", B = " . $b . ", C = " . $c; 
    echo "<br>";
    echo "<br>";
  
    /* d)
    A 10
    B A + 1
    A B + 1
    B A + 1
    Escrever A
    A B + 1
    Escrever A, B */
        echo "2 - d) ";
        $a = 10;
        $b = $a + 1;
        $a = $b + 1;
        $b = $a + 1;
        echo "A = " . $a;
    echo "<br>";
        $a = $b +1;
        echo  "A = " . $a . ", B = " . $b; 
    echo "<br>";
    echo "<br>";

    /* e)
    A 10
    B 5 
    C A + B 
    B 20 
    A 10
    Escrever A, B, C */
        $a = 10;
        $b = 5;
        $c = $a + $b;
        $b = 20;
        $a = 10;
        echo "A = " . $a . ", B = " . $b . ", C = " . $c;
    echo "<br>";
    echo "<br>";

    /*f)
    X 1
    Y 2
    Z Y – X
    Escrever Z
    X 5
    Y X + Z
    Escrever X, Y, Z */
        $x = 1;
        $y = 2;
        $z = $x + $y;
        echo "Z = " . $z;
        
    echo "<br>";
        $x = 5;
        $y = $x + $z;
        echo " X = " . $x . ", Y = " . $y . ", Z = " . $z; 
    echo "<br>";
    echo "<br>";
?>