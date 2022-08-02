<?php
// servidores variaveis super globais GET, POST
 
 //GET
    /*    $nome = $_GET["nome"];
        $email = $_GET["email"];
        $sexo = $_GET["sexo"];

        echo "nome: " . $nome;
        echo "<br>";
        echo "E-mail: " . $email;
        echo "<br>";
        echo "Sexo: " . $sexo;
        echo "<br>";
        print_r($_GET);
    */
 //POST
 /*   $nome = $_POST["nome"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];

    echo "nome: " . $nome;
    echo "<br>";
    echo "E-mail: " . $email;
    echo "<br>";
    echo "Sexo: " . $sexo;
    echo "<br>";
    print_r($_POST);

    //request

/* print_r($_REQUEST);

    $nome = $_REQUEST["Nome"];
    $email = $_REQUEST["Email"];
    $sexo = $_REQUEST["Sexo"];

    echo $nome . "," . $email . "," . $sexo;

    echo "<br><br>";

    echo "Id :" . $_REQUEST["id"];
    echo "<br> Produto :" . $_REQUEST["produto"];
    echo "<br> Valor :" . number_format($_REQUEST["valor"], 2, ",",".");
    */


//validação por back-end
$nome = $_REQUEST["Nome"];
echo "<br><br>";
$email = $_REQUEST["Email"];
echo "<br><br>";
$sexo = $_REQUEST["Sexo"];

/*if ( strlen($nome) <=5){
  echo "CAMPO NOME OBRIGATÓRIO!!";
}*/    

if( empty($nome)){
    echo "Campo NOME OBRIGATÓRIO!!";
    header ("Location: formulario.php?erro=nome");
}else{
    $dados[0]= $nome;
}


?>