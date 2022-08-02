<?php
//array numerico e associativo
$exemplo_01 = array();
$exemplo_01 = "Isac";

$exemplo_02 = array("Isac","Luiza","Erick","Amanda");

//ver estrutura da array

var_dump($exemplo_02);

echo "<p>$exemplo_02[3]</p>";
$exemplo_02[4] = 560;
echo "<p>$exemplo_02[4]</p>";

//saber dinamicamente a quantidade de elementos no array usando a função count();

echo '$exemplo_02 tem total de elementos ' . count($exemplo_02);

//array associativo

echo "<hr>";

$meses = array(
"A" => "Janeiro",
"B" => "Fevereiro",
"C" => "Março",
"D" => "Abril",
"E" => "Maio",
"F" => "Junho",
"G" => "Julho",
"H" => "Agosto",
"I" => "Setembro",
"J" => "Outubro",
"K" => "Novembro",
"L" => "Dezembro"
);

print_r($meses);

?>