<?php
// iniciar session;
session_start();
// incluir o servidor
include_once("../servidor.php");
if(isset($_SESSION['login'])){

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <title>Document</title>
</head>

    <body>
    <!-- formulario para o 
        cadastro de funcionario para ter acesso ao site-->
<div class="container">
        <div class="row">
            <section class="col-md-2">

               
            </section>
            <section class="col-md-8">
                <h3 class="mt-5">Cadastro de Usuario</h2>

                    <form action="addlogin.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="t">Nome : </label>
                            <input type="nome" class="form-control" id="us" name="nome" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="desc">email : </label>
                            <textarea name="email" class="form-control" id="email"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="desc">Senha : </label>
                            <textarea name="senha" class="form-control" id="senha"></textarea>
                        </div>
 
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
            </section>

            <section class="col-md-2"></section>
        </div>
    </div>

</body>
<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>

<?php

}
else{
header("location:index.php");
}
// fechar o banco 
mysqli_close($banco);

?>
