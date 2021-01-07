<div class="titulo">Desadio Palindromo</div>

<?php

$palavra = 'AXA';
$palavra2 = 'TESTE';

//valida se é um palindromo utilizando-se de um loop de for
function validaPalindromoComFor($palavra){
     
    //neste trecho ele pega o tamanho da string e diminui em 1 par pegar o indice correto ex se a palavra for axa a o tamanho daria 3 porem o ultimo indice seria 2 
    // indice 0 - letra a, indice 1 - letra x e indice 2 letra, por isto se diminui em 1 para pegar o indice correto
     $ultimoIndice = strlen($palavra) - 1; 

     for ($i=0; $i <= $ultimoIndice; $i++) { 
         if($palavra[$i] !== $palavra[$ultimoIndice -$i]){
             return "Não";
         }
     }
     return "Sim";

}

//valida a palabra se é um palindromo utilizando-se da função string strrev
function validaPalindromo($palavra){
    $palavraInvertida = strrev($palavra);
    if($palavra === $palavraInvertida){
        echo "A palavra $palavra é um palindromo!";
    }else{
        echo "A palavra $palavra não é um palindrimo!";
    }
}

validaPalindromo($palavra);
echo"<br>";
validaPalindromo($palavra2);

echo "<hr>";
echo "<h2>Validação com a logica do professor<h2>";
$validacao = validaPalindromoComFor('cotovelo');
echo "$validacao";
?>