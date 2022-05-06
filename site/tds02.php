<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Cadastro de Usuários</h1>

<table border=1>

<?php

$dados[] = "Maria";
$dados[] = "Marcia";
$dados[] = "Mariana";
$dados[] = "Marinalva";
$dados[] = "Maristela";
$dados[] = "Joao";
$dados[] = "Jose";
$dados[] = "Diego";
$dados[] = "Leo";
$dados[] = "Gabriel";


for ( $i=0; $i < count($dados); $i++) {
        echo "<tr><td>" . $dados[$i] . "</td></tr>";
}

?>

</table>
    
</body>
</html>