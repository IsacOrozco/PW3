<?php
//arquivo puro de PHP

    //operadores aritméticos

    /*
    + Soma
    - Subtração
    / Divisão
    * Multiplicação
    % Módulo (divide e pega o resto)
    */

    //Adição (= atribuir, receber, armazenar)
    $numero = 20;
    $numero02 = 10;
    $resultado ;

    $resultado = $numero + $numero02 ; //30
    echo "O resultado da adição de $numero + $numero02 = $resultado";

    echo"<BR>";

    $resultado = $numero + 100;
    echo "O resultado de $numero + 100 = $resultado";

    $resultado = $numero02 + "1000";
    
    echo "<BR>";

    echo "O resultado é " . $resultado;
    
    //Subtração
    $numero = 1000;
    $numero02 = 99;
    $resultado = $numero - $numero02;
    print("<BR>");
    print "<blockquote> O resultado da Subtração é " . $resultado . "</blockquote>";
    print ("<BR>");

    //Multiplicação
    $numero = 10.17;
    $numero02 = 10;
    $resultado = $numero * $numero02;
    echo "<BR> O resultado da multiplicação é $resultado";
?>