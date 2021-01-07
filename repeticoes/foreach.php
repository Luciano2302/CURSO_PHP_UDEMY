<div class="titulo">Foreach</div>




<?php

$array = [
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sabado',
    'Domingo'];

foreach ($array as $elemento) {
    echo "$elemento <br>";
}

echo "<hr>";

foreach ($array as $indice => $valor) {
    echo "$indice -- $valor <br>";
}

echo "<hr>";
//percorrer uma matriz com foreach
$matriz = [
    ['a','b','c','d','e'],
    ['f','g','h','i']
];

foreach ($matriz as $linhas) {
   foreach ($linhas as $valor) {
        echo"$valor";
    }
    echo "<br>";
}

echo "<hr>";

$numeros = [1, 2, 3, 4, 5];
echo "array inicial antes do for de multiplicar cada elemento por dois <br>";
print_r($numeros);
echo "<br>";
// o & comercial na frente da variavel naõ atribui soment o valor mas o endereço de memoria tambemS
foreach ($numeros as &$dobrar) {
    $dobrar *=2;
    echo "$dobrar <br>";
}

//O array foi alterado com isso conforme a impressão do array abaixo
print_r($numeros);



?>