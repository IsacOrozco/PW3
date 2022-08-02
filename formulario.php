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
     let email = document.getElementById("email");
     let frm = document.getElementsByTagName("form")[0]

     bt.onclick=()=>{
    
         if(nome.value.length <= 5 ){
            alert("campo nome obrigatorio");
            nome.focus();
         } 

         if(email.value.length <= 10 ){

            email.style.borderColor = "red";
            email.focus();
         }

         frm.submit();
           
       }

     }

   </script>


</head>
<body>
    <!-- POST - 
         GET - 
         -->
    <form action="processa.php" method="post" enctype="multipart/form-data">
        <div>
         <label> nome: </label>
         <input type="text" name="nome" id="nome">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "nome"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
        <div>
        <div>
         <label> e-mail: </label>
         <input type="email" name="email" id="email" 
          value=""        >
         
         
         <?php  if( isset( $_REQUEST["erro"])  &&  $_REQUEST["erro"] == "email"){

             echo "<span style='color:red'>*</span>";
     } ?>


        </div> 
        <div>
         <label> sexo: </label>
         <input type="radio" name="sexo" id="sexo" value="M" checked> Masculino
         <input type="radio" name="sexo" id="sexo" value="F"> Feminino
        </div> 
         



        <div>

             <input type="button" id="bt_"  value="enviar" />
        </div>
     </form>

  <a href="processa.php?id=001&valor=10.00&produto=coca-cola">
   comprar 
 </a>     


</body>
</html>