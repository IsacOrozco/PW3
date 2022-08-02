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
        // trabalha com condicional 1º simples,
        // 2º composto, 3º complexo

        // 1º simples
        echo "<hr>";
        // if (booleano)
        $anoNasc = 1983;
        $anoAtual = 2022;
        //formula
        $idade = $anoAtual - $anoNasc;


        if( $idade >= 16 && $idade <= 60){
            echo "<p> permitido votar!! </p>";
        }

        if( $idade >= 16 || $idade <= 60){
            echo "<p>Não é permitido votar!! </p>";
        }
        echo "<br>";
        echo "<h1> NOTA DO ALUNO </h1>";
        // 2) Faça um script que peça 3 notas de um aluno e mostra sua média.
        
        $nota1 = 1;
        
        $nota2 = 1.9;
        
        $nota3 = 4.89;
        
        // calcular a media do aluno
        echo "<hr>";
        echo $media = ( $nota1 + $nota2 + $nota3) /3;
        
        if( $media < 3 ){
                echo "<p> Nota Insuficiente</p>";
                echo "<p> Se fosse por mais um pouco você seria burro";
            }

        if ( $media >= 3 && $media < 6){
                echo "<p> Nota Regular</p>";
        }
        
        if ( $media >= 6 && $media < 8){
            echo "<p> Nota Bom</p>";
        }
        if($media >=8 && $media <= 10){
                echo "<p> Nota Muito Boa!!";
        }
        echo "<br>";

            // 2º composto
            echo "<hr>";
            echo "<h1> Composto </h1>"; 
            $anoNasc = 2018;
            $anoAtual = 2022;
            $idade = $anoAtual - $anoNasc;
              if($idade >= 16 && $idade <= 60){
                  echo "<p> Permitido voltar</p>";
              }else{
                  echo "<p> Não é permitido votar</p>";
              }

        echo "<br>";
            
            // 3º composto
            echo "<hr>";
           echo "<h1> Complexo </h1>";
            $anoNasc = 2015;
            $anoAtual = 2022;
            $idade = $anoAtual - $anoNasc;

              if($idade >= 16 && $idade <= 60){
                  echo "<p> Permitido votar</p>";
              
                }else if($idade <16 ){
                  echo "<p> Não é permitido votar, 
                        devido ser menor de 16</p>";
              
                } else {
                  echo "<p> Não é permitido votar,
                  devido ter mais de 60 Anos";
              }
              echo "<br><br>";

//escolha
echo "<hr>";
echo "<h1> Escolha </h1>";
$numero1 = 2015;    
$numero2 = 2022;
$op = "x";

switch($op ){
    case "+" :
     $resultado = $numero1 + $numero2;
    break ;
    
    case "-" :
     $resultado = $numero1 - $numero2;
    break;
              
    case "/" :
     $resultado = $numero1 / $numero2;
    break;
    
    case "*" :
     $resultado = $numero1 * $numero2;
    break;
     default :        
     $resultado ="Não temos esta operação!!";
    break;
    }

    echo $resultado;



?>
</body>
</html>