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
        //para, repita, enquanto

            // para (for)
            // (variavel ; condição; contador)
        /* fazer um loop de 1 a 1000 e mostra os valores de somente pares
        */
        for ( $i = 1  ;  $i <= 1000 ;  $i++){
            if ($i % 2 == 0){
                echo "<p style=\"background-color:#ab0001; margin:10;text-align:center\"> $i</p> ";
                echo "<p> $i é par </p>";

            }
        }
        
        // enquanto
    $count = 1;
        while( $count <= 10){
            echo "<p> $count</p>";
            //contador
            $count++;
            //$count = $count + 1; 
        }

        $nome = "Isac";
            while( $nome != "fim"){
                echo "<p> $nome</p>";
                //contador
               $nome = "fim";
            }

    // repita
    $i = 0;
    do{
    echo "<p>$i</>";
    $i++;
    }while( $i <= 5);


?>
</body>
</html>