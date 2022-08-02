<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php 
       echo "3IPIIEM";
?>
</title>
</head>
<body>
    <?php
        //estarei colocando um tag html dentro do comando php
        echo "<h1> Introdução ao linguagem PHP </h1>";

        /*
        Estarei colocando variavel para ser interpolado com texto.
        */

            $nome = "Isac";

            print("<p style='color:red; font-size:30px'>Olá $nome, seja bem vindo!!!</p>")
            

    ?>
        <p style="color:red; font-size:30px"> <?php echo ("sou um php sendo colocado dentro de uma tag html, YES BABY, THANK YOU!!"); ?> </php>

    <?php 
        $nome01 = "Isac";
        $nome02 = "Claudin do grau";
        $nome03 = 'João';
        $nome04 ="Matheus Portes";
        $nome05 ="Bombeiro da Eliana";
        echo "<ul>";
                echo  "<li>" .$nome01. "</li>";
                echo  "<li>" .$nome02. "</li>";
                echo  "<li>" .$nome03. "</li>";
                echo  "<li>" .$nome04. "</li>";
                echo  "<li>" .$nome05. "</li>";
        echo "</ul>";

        echo '<p> esta pegando fogo na caixa de agua!!!, chama o ' . $nome05 .'</p>';
        ?>
</body>
</html>
