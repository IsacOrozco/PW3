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

    //funções
    function Adicao($arg1 , $arg2){
        $res = $arg1 + $arg2;
        return $res;
    }
    function Subtracao($arg1 , $arg2){
        $res = $arg1 - $arg2;
        return $res;
    }
    function divisao($arg1 , $arg2){
        $res = $arg1 / $arg2;
        return $res;
    }
    function Multiplicacao($arg1 , $arg2){
        $res = $arg1 * $arg2;
        return $res;
    }
    
    $valor = adicao(100 , 200);
    echo $valor;
    echo "<br>";
    echo "<hr>";
    $valor = subtracao(100 , 200);
    echo $valor;
    echo "<br>";
    echo "<hr>";
    $valor = divisao(100 , 200);
    echo $valor;
    echo "<br>";
    echo "<hr>";
    $valor = Multiplicacao(100 , 200);
    echo $valor;
    echo "<br>";
    ?>
</body>
</html>