<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <script type="text/javascript">
     window.onload=()=>{

     //var,let, const 
     const nome = document.getElementById("nome");
     let bt =  document.getElementById("bt_");
     let email =  document.getElementById("email");
     let frm =  document.getElementsByTagName("form")[0]
     
     bt.onclick=()=>{
    
          if(nome.value.length <= 5 ){   
          alert("campo nome obrigatorio");
            nome.style.borderColor = "red";
            nome.focus();
          }
          
          if (email.value.length <= 10 ){   
               email.style.borderColor = "red";
              email.focus();
          }

          frm.submit();
          
     }
}

/*
          if(nome.value.length <= 5 ){
            alert("campo nome obrigatorio");
            nome.style.borderColor = "red";
            nome.focus();
         } 
        
         if (email.value.length <= 10 ){
           
              email.style.borderColor = "red";
              email.focus();
         }
       }
     }
*/
   </script>


</head>
<body>
    <!-- POST - 
         GET - 
         -->
    <form action="ProcessaProva.php" method="post" enctype="multipart/form-data">
        <div>
         <label> nome: </label>
         <input type="text" name="nome" id="nome">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "nome"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
          <br>
        <div>
        <div>
        <label>CEP: </label>
    <input type="text" name="cep" id="cep"> 
         <?php  if( isset( $_REQUEST["erro"])  &&  $_REQUEST["erro"] == "cep"){

             echo "<span style='color:red'>*</span>";
     } ?>
     

    <?php
    if (!empty($_POST['cep'])) {

        $cep = $_POST['cep'];

        $address = (get_address($cep));

        echo "<br><br>CEP Informado: $cep<br>";
        echo "Rua: $address->logradouro<br>";
        echo "Bairro: $address->bairro<br>";
        echo "Estado: $address->uf<br>";
        echo "Cidade: $address->cidade<br>";
    }
    ?>
    <br><br>
    <label> Número: </label>
    <input type="number" name="nume" id="nume"> 
    <br><br>
         <label>Complemento: </label>
    <input type="text" name="comp" id="comp"> 
        </div> 
        <div>
             <br><br>
         <label> sexo: </label>
         <input type="radio" name="sexo" id="sexo" value="M" checked> Masculino
         <input type="radio" name="sexo" id="sexo" value="F"> Feminino
        </div>
        <br><br> 
        <label>imagem</label>
            <input type="file" name="arq" id=""/>
    </div>




        <div>

             <input type="submit" id="bt_"  value="enviar" />
        </div>
     </form>

  <a href="ProcessaProva.php?id=001&valor=10.00&produto=coca-cola">
   comprar 
 </a>     


</body>
</html>