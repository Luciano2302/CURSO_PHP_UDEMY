<div class="titulo">Closure Callable</div>


<?php

$soma1  = function ($a, $b){
    return $a + $b;
};

echo $soma1(2,2)."<br>";

//esta funcao is_callable serve para verificar se o conteudo da variavel pode ser chamado como função, conform o exemplo abaixo no if ternario ira imprimir como Sim
echo (is_callable($soma1) ? "Sim" : "Nao")."<br>";


$soma1 = 1;
//Abaixo o conteudo da variavel $soma1 foi alterado atribuindo como um valor inteiro sendo ele 1, para este caso quando chamada a funcao is_callable irá imprimir
//no if ternario como não pois não é uma função
echo (is_callable($soma1) ? "Sim" : "Nao")."<br>";



?>