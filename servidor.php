<?php
//iremos fazer a conexão com o banco de dados nas formas:
    //constante
    define('servidor', 'localhost');
    define('usuario', 'root');
    define('senha', '');
    define('banco', 'miniphp');
    define('porta', '3306');

    //procedural
    //função para fazer a conexão ao banco com os parametros 
    $banco = mysqli_connect(servidor, usuario, senha, banco, porta);

    //verificar se há conexão com o servidor caso haja mostra uma mensagem
    // mysqli_connect_erro() - mostra uma mensagem (string) sobre  o motivo de conexão;
    // mysqli_connect_errno() - mostra um código ao invés de string de erro;
  /*  if(!$banco){
        die("Falha na conexão, motivo: " . mysqli_connect_erro());
    }
    else{
        //echo "Conexão feita com sucesso!!! BORA BIILL!!!!!";
    }
*/
    //orientação objeto

    ## criar uma instancia 
    //POO
    $POO = new mysqli(servidor, usuario, senha, banco, porta );

    // verificação se houve um erro de conexão

    if($POO->connect_error){
        die ("Falha" . $POO ->mysqli_connect_errno);
    } //else{
    //    echo "conectou";
    // }
    
    // PDO
?>