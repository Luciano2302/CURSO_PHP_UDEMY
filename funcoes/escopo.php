<div class="titulo">Funções & Escopo</div>



<?php

function imprimirMensagens(){
   echo "Ola ";
   echo "Ate a proxima<br>" ;


}

imprimirMensagens();

$variavel = 1;

echo"<h2>Funcao trocarValor()</h2>";

//para este caso da funcao troca valor a variavel $variavel declarada dentro da funcao não é a mesma que a variavel declarada antes do metodo, isto tem haver com o escopo da 
//**funcao pois esta variavel por mais que tenha o memso nome não é a mesma por isto nas impressões no echo logo abaixo ele ira imprimir na tela os respectivos valores
// 1, 2 e 1 */
function trocarValor(){
    $variavel = 2;
    echo"Durante a funcao o valor da: $variavel <br>";
}

echo"Valor da variavel antes de executa a funcao: $variavel <br>";
trocarValor();
echo"Valor da variavel depois da funcao: $variavel <br>";

echo"<hr>";
echo"<br>";

echo"<h2>Funcao trocaValordeVerdade()</h2>";

//Neste caso como foi declarado a palabra global antes da variavel $variavel o php irá interpretar que o escopo se refere a variavael declarada antes da funcao
//
function trocaValordeVerdade(){
     global $variavel;
     $variavel = 3;
     echo"Durante a funcao o valor da: $variavel <br>";

} 

echo"Valor da variavel antes de executa a funcao: $variavel <br>";
trocaValordeVerdade();
echo"Valor da variavel depois da funcao: $variavel <br>";

?>