<?php

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $telefone = $_POST["telefone"];

    echo "Seu nome é: " .$nome. "<br>";
    echo "Sua idade é: " .$idade. "<br>";
    echo "Seu telefone é: " .$telefone. "<br>";    

    print_r($_POST["interesses"]);
    //print_r($_FILES["fotoUpload"]);
    

?>