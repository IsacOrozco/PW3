<?php
session_start();
//deletar ou excluir uma sessão
    unset($_SESSION["login"]);

// Direcionar para arquivo index
    header("location:index.php");

?>
