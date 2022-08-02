<?php

$nome = "Isac";
$Letras = "casI";
//contar quantos caracteres tem o nome
//função de string
    echo strlen($nome);
    echo "<br><br>";
    if (strlen($nome) <=4 ){
        echo " seu nome tem caracteres menor igual a 4";
    }

echo "<hr>";

echo substr($nome , 1 , 2);

echo "<hr>";

echo substr($Letras, -4, 4);

?>