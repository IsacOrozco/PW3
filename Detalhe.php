<?php
include_once("servidor.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
<?php
//trazer as informações do produto

   
$sql = "SELECT * FROM `tb_livro` WHERE cod_liv ="
      .$_GET["cod_liv"];

    //Executar

      $resposta = mysqli_query( $banco , $sql );

      // transformar em um array
      $tabela = mysqli_fetch_array( $resposta);

    echo "
        
        <img src= 'adm/".$tabela["img_liv"]."'>
        <h3>".$tabela["titulo_liv"] ."</h3>
        <p>".$tabela["desc_liv"]  ."</p>
        <p>".number_format( $tabela["valor_liv"], 2, ",", ".")."</p>
          <img src='adm/img/comprar.png'>
        ";
?>

</div>

<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</body>
</html>
<?php
 mysqli_close($banco);
?>