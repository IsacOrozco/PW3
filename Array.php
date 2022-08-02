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
        // Array, matriz, lista, vetor
        //Variavel que tem uma localização na maioria que possibilita armazenar diversos valores em que são localizados através de INDICE/VALOR (COLUNA/VALOR)

        //1ª forma
        $nome = array();
    
        $nome [0] = "Isac ";
        $nome [1] = "Claudio";
        $nome [2] = "Matheus P";
        $nome [3] = "Erick";
        $nome [10] = "Jéssica";
        
        //exibir na tela
        //echo $nome [0];
        echo "<br>";
        print_r($nome);
        echo "<br><br>";
        echo $nome[10];
        echo "<br><br>";
        var_dump($nome);

        echo "<br><br>";

        for($i = 0; $i <= 10; $i++){
            if(isset($nome[1])){
            echo @"<p> $nome[$i]</p>";
    }
}
    echo "<hr>";
    //while
    // do {} while
    echo "<BR><BR>";
    foreach ($nome as $key => $value) {
      echo "<p> $key = $value </p>";
    }
    echo "<hr>";
    echo "<BR><BR>";
    foreach ( $nome as $value) {
        echo "<p> $value </p>";
    }
    echo "<hr>";
    // tabuada do 8
    echo "<BR><BR>";
    for($i=1 ; $i <= 10; $i++){
        echo "<p> $i x 8 = " . ($i * 8)."</p>";
    }
    echo "<hr>";
    // Tabuada 1 a 10
    echo "<br><br>";
    for($i=1 ; $i <= 10; $i++){
        for($y= 1; $y <= 10; $y++){
            echo "<p> $i x $y =" . ($i * $y). "</p>";
        }
        echo "<BR>";
    }
?>
</body>
</html>