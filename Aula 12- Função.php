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
function Adicao($Arg1 , $Arg2){
    $n1 = $Arg1;
    $n2 = $Arg2;
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

echo "<hr>";
    function soma($arg, $arg2){
     return $resultado  = $arg + $arg2;
   // echo $resultado; //saida de um valor (variavel/array)
}
    $valor =  soma (100, 200);
    echo soma (20, 100);
echo "<br><br>";
    echo $valor;

/* usar a função apenas para somar e valor, retornado o script global para fazer o calculo e o numero e par/impar */
echo "<br><br>";
    function MsgNumero($arg){
       
        if($arg != 0){
            echo "Impar";
        }else{
            echo "Par";
        }

    }

   $valores = soma(300, 45);// retorno 345
    $V = $valores % 2;
        MsgNumero($V);
    
?>