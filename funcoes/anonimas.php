<div class="titulo">Funções anonimas</div>

<?php

//exemplo de uma variavel recebendo uma função como valor
$soma = function ($a, $b){
    return $a + $b;
};

//a variavel é chamada como funcao como excecução
echo $soma(1,2) .'<br>';

echo $multip(1,2) .'<br>';


$multiplicacao = function ($d, $c) {
    $valor = $d * $c;
    return $valor;
};

function executar($a, $b, $op, $funcao){
      $resultado = $funcao($a, $b);
      echo "$a $op $b = $resultado <br>";
};

//no caso abaixo uma função esta sendo passada como parametro no caso a funcão que foi atribuida a variavel $soma
executar(2, 3, '+',$soma);

echo $soma(1,2) .'<br>';


//neste caso abaixo é invocado o metodo executar passando uma outra variavel cujo seu conteudo foi atribuido a uma função no caso a de multiplicação
executar(10, 10,'*', $multiplicacao);


?>