<?php
// sessão
session_start();

include("../servidor.php");

// variveis do formulário

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
# $cod_us = $_POST["us"];

// inserindo valor no banco

$sql = " INSERT into tb_usuario( nome_us, login_us, senha_us) ";
$sql .= " values( '$nome', '$email', '$senha') ";


// executar

   ## P O O
   $resp = $POO->query($sql);

   // preciso saber se foi insirida no banco 


  if( $POO->affected_rows){
     echo "<script type='text/javascript'> 
             alert('cadastro feito!!!');
           </script>";
    
           
      ## P O O pegar id automatico
         $cod_us = $POO->insert_id ; 

           // inserir na tabela usuarios

           $sql = " INSERT INTO TB_USUARIO 
              VALUES(".$_SESSION['login']['id'] .", " . $cod_us." )";

             //executar
             $POO->query($sql);
             //mysqli_query($banco , $sql);
            
             ## P O O
             $resp = $POO->query($sql);

             // DIRECIONAR PARA O MENU
            header('location:menu.php');
    

  }



?>