<?php

$array3 = array("nome" => "Maria", "idade" => "40");

var_dump($array3);
echo "<br>";

echo $array3['nome'];

//Utilizando a sintaxe curta

$array4 = [
    "nome" => "José",
    "idade" => "50",
];

$array4[0] = "Pedro";

print_r($array4);

echo "<br>";
echo "<br>";

$a1 [][] = array();
$a1 [0][0] = "Pedro";
$a1 [0][1] = "pedro@senac.com.br";
$a1 [0][2] = 21;
$a1 [1][0] = "Maria";
$a1 [1][1] = "Maria@senac.com.br";
$a1 [1][2] = 36;

echo "<pre>";
print_r($a1);
echo "</pre>";

$a2[0]["nome"] = "Maria";
$a2[0]["sobrenome"] = "Silva";
$a2[0]["email"] = "Maria@senac.com";
$a2[1]["nome"] = "Pedro";
$a2[1]["sobrenome"] = "Souza";
$a2[1]["email"] = "Pedro@senac.com";
$a2[2]["nome"] = "Carol";
$a2[2]["sobrenome"] = "Silva";
$a2[2]["email"] = "carol@senac.com";

for ($i=0; $i < count($a2); $i++) {
    echo "Nome: " . $a2[$i]["nome"] . ' ' .  $a2[$i]["sobrenome"] . ' E-mail:  ' .  $a2[$i]["email"];
    echo '<br>';
}

?>