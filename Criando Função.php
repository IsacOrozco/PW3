<?php
/*

    1- Para que serve Função?
    2- forma de declarar Função?
    3- Temos funções pré-definidas, funções de usuário
*/

// Exemplo 1° função nomeada sem argumento

MensagemUsuario();

function MensagemUsuario (){
    echo "Será que estou entendendo?";
}
echo "<br><br>";
    // chama um função que se encontra na memoria 
    MensagemUsuario();
    echo "<hr>";

//exemplo 2° função com argumento

    function Saudacao ($arg){
        echo "Seja bem vindo, $arg";
    }

//
    $nome_x = "Isac";
    Saudacao($nome_x);
    echo "<br><br>"; 

    $x = "Erick";
    Saudacao($x);
    echo "<br><br>";

    $i = "Sorocabanos";
    Saudacao($i);
    echo "<hr>";

// Passando com mais de um argumento
function Adicao($arg1 , $arg2){
    $n1 = $arg1;
    $n2 = $arg2;
    $resultado = $n1 - $n2;
    echo "valor : " .$resultado;
}
//passando os valores atraves de variavel
    $n1 = "30";
    $n2 = "50";
   
Adicao($n1 , $n2);

$numeros = [10, 4, 50, 10, 5];

function CallArray($array){
    $soma = 0;
    foreach($array as $values ){
        $soma += $values;
    }
    echo $soma;
}
echo "<BR>";
CallArray($numeros); 
$n = [10, 4, 50, 10, 5, 30, 50, 60];

echo "<br>";
CallArray($n);
?>