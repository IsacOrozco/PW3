<?php   

    // variável super global

    //post, get, request, file

/*
    array de informações
    name;
    type;
    size;
    error;
    tmp_name;
    full_path
    */

    //var_dump( $_FILES["arq"]);

    echo "nome :" . $_FILES["arq"]["name"] ."<br>";
    echo "tipo :" . $_FILES["arq"]["type"] ."<br>";  
    echo "tamanho :" . $_FILES["arq"]["size"] ."<br>";
    echo "error :" . $_FILES["arq"]["error"] ."<br>"; //0 até 8(exceto 5);
    echo "diretorio temporario :" . $_FILES["arq"]["tmp_name"] ."<br>";
    
    //arquivo temporario diretorio 
    $tmp = $_FILES["arq"]["tmp_name"] ;
    // destino do arquivo no site a ser definitivo
    $arq = "./" . $_FILES["arq"]["name"] ;

    if (move_uploaded_file( $tmp, $arq )){
        echo "<br><br>";
        echo "arquivo enviado com sucesso para o servidor!!";
    }

    // tipo de arquivo, organizar a pasta, tamanho do arquivo;
?>

