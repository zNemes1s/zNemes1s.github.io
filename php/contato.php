<?php
session_start();
include_once("conexao.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>

      <!--JS-->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
     integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
     crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
     integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
     crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
     integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
     crossorigin="anonymous"></script>

    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

     <!--Biblioteca de Icone-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


     <style>
         p{
             font-size:14px;
         }

         body{
            margin: 0;
            background-image: linear-gradient(#161616,black);
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow-x: hidden;
         }
         h1{
             color:white;
         }
     </style>

</head>
<body>

    <div class="container"><br><br>
        <h1 align="center">Mensagens</h1><br><br>
        <div class="row" align="center">


        <?php

        $msg ="select * from contato where nome<>''";
        $resultado = mysqli_query($conn,$msg);



        while($mensagens=mysqli_fetch_array($resultado)){

            $nome=$mensagens['nome']; 
            $email=$mensagens['email'];
            $mensagem=$mensagens['mensagem'];


       
            echo "<div class='col-lg-3'>";
            echo   "<div class='card bg-light mb-3' style='max-width: 18rem;'>";
            echo        "<div class='card-header'>$nome</div>";
            echo          "<div class='card-body'>";
            echo            "<p class='card-title'>$email</p>";
            echo             "<hr solid 1px>";
            echo            "<p class='card-text'>$mensagem</p>";
            echo        "</div>";
            echo    "</div>";
            echo    "</div>";

                }
            ?>

        </div>
    </div>
    
</body>
</html>