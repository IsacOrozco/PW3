<?php
// servidores variaveis super globais GET, POST
 /*
 //GET
    $nome = $_GET["nome"];
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
    $nome = $_POST["nome"];
    $nume = $_POST["nume"];
    $comp = $_POST ["comp"];
    $name = $_FILES["arq"]["name"];
    $tipo = $_FILES["arq"]["type"];
    $tamanho = $_FILES["arq"]["size"];
    $error = $_FILES["arq"]["error"];
    $diretorio = $_FILES["arq"]["tmp_name"];
    if (!empty($_POST['cep'])) {

        $cep = $_POST['cep'];

        $address = (get_address($cep));

    }
    function get_address($cep) {


        $cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws/$cep/xml/";

        $xml = simplexml_load_file($url);
        return $xml;
    }
    $sexo = $_POST["sexo"];
    echo "nome: " . $nome;
    echo "<BR>";
    echo "Sexo: " . $sexo;
    echo "<br>";
    echo "<br>";
    echo "Cep: " . $cep;
    echo "<br>";
    echo "Rua: $address->logradouro<br>";
    echo "Bairro: $address->bairro<br>";
    echo "Estado: $address->uf<br>";
    echo "Cidade: $address->localidade<br>";
    echo "Número: " . $nume;
    echo "<br>";
    echo "Complemento:" . $comp;
    echo "<br>";
    echo "<br>";
    echo "nome :" . $name;
    echo "<br>";
    echo "tipo :" . $tipo;  
    echo "<br>";
    echo "tamanho :" . $tamanho;
    echo "<br>";
    echo "error :" . $error; //0 até 8(exceto 5);
    echo "<br>";
    echo "diretorio temporario :" . $diretorio;
    echo "<br>";
    
    //arquivo temporario diretorio 
    $tmp = $_FILES["arq"]["tmp_name"] ;
    // destino do arquivo no site a ser definitivo
    $arq = "Imagens/" . $_FILES["arq"]["name"] ;

    if (move_uploaded_file( $tmp, $arq )){
        echo "<br><br>";
        echo "arquivo enviado com sucesso para o servidor!!";
    }

    // tipo de arquivo, organizar a pasta, tamanho do arquivo;
    //print_r($_POST);

 /*   //request

 print_r($_REQUEST);

    $nome = $_REQUEST["Nome"];
    $email = $_REQUEST["Email"];
    $sexo = $_REQUEST["Sexo"];

    echo $nome . "," . $email . "," . $sexo;

    echo "<br><br>";

    echo "Id :" . $_REQUEST["id"];
    echo "<br> Produto :" . $_REQUEST["produto"];
    echo "<br> Valor :" . number_format($_REQUEST["valor"], 2, ",",".");
*/

/*
//validação por back-end
$nome = $_REQUEST["Nome"];
echo "<br><br>";
$email = $_REQUEST["Email"];
echo "<br><br>";
$sexo = $_REQUEST["Sexo"];

if ( strlen($nome) <=5){
  echo "CAMPO NOME OBRIGATÓRIO!!";
}    

if( empty($nome)){
    echo "Campo NOME OBRIGATÓRIO!!";
    header ("Location: Prova.php?erro=nome");
}else{
    $dados[0]= $nome;
}
if(strlen($email)<=8){
    header("location:Provas.php?erro=email");
}
*/
?>