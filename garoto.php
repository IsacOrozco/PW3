<?php

include("pessoa.php");

// Instancia / objeto

$Jorge = new pessoa("Claudio",
                    "17",
                    "moreno",
                    "preto",
                    "azul",
                    "masculino",
                    "1.70 cm",
                    "70kg",
                    "Japônesa");

/*$Jorge->nome = "Jorge";
$Jorge->idade = "17";
$Jorge->etnia = "branco";
$Jorge->cor_cabe = "loiro";
$Jorge->olhos = "castanhos";
$Jorge->sexo = "Masculino";
$Jorge->altura = "1,80 cm";
$Jorge->peso =" 80Kg ";
$Jorge->nacionalidade = "Brasileira";
*/
echo $Jorge->nome ;
echo"<br><br>";
echo $Jorge->idade ;
echo"<br><br>";
echo $Jorge->etnia ;
echo"<br><br>";
echo $Jorge->cor_cabe ;
echo"<br><br>";
echo $Jorge->olhos ;
echo"<br><br>";
echo $Jorge->sexo ;
echo"<br><br>";
echo $Jorge->altura ;
echo"<br><br>";
echo $Jorge->nacionalidade ;
//echo $jorge->peso;


?>