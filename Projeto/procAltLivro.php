<?php
// iniciar session;
session_start();

// incluir o servidor
    include_once("../servidor.php");

   

// desafio

    // receber todos os campos
        $SQL = " UPDATE tb_livro SET cod_ed = '" .$_POST["ed"]."' ,  cod_liv =  '".$_POST["cod_liv"]."' , 
        titulo_liv= '".$_POST["titulo"]."' , desc_liv ='".$_POST["desc"]."
        ',  valor_liv= '".$_POST["valor"]."'  WHERE cod_liv = " . $_POST["cod_liv"];


    // fazer sql (update) com id Livro

    $resp = $POO->query($SQL);

    // executar
    
       // $campo = mysqli_fetch_array($resp); 

// pegar os valores e alterar no banco
?>