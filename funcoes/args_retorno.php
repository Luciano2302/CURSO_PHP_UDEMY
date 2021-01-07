<div class="titulo">Argumentos e retorno de funções</div>

<?php

function obterMensagem(){
    return "Seja bem vindo!";
}

$retorno = obterMensagem();
echo "$retorno<br>"; 

function obeterMensagemComNome($nome){
    return "Ben vindo, {$nome}!<br>";
}

$retorno2 = obeterMensagemComNome("Josias");
echo $retorno2; 

function soma($numero1, $numero2){
   $soma = $numero1 + $numero2;
    return    $soma;
}

$soma =  soma(70, 30);
echo "Valor soma $soma <br>";


$variavel = 1;

// Conforme abaixo no arqgumento &$a é passado o caracter & para poder pegar não somente o valor mas o endereço da variavel o que vai alterar o valor da variaval $variaval
function trocarValor(&$a, $novoValor){
    $a = $novoValor;
}

echo "Valor antes de chamar a funcao trocaValor $variavel <br>";
trocarValor($variavel, 20);
echo "Valor depois de chamar a funcao trocaValor $variavel <br>";

?>