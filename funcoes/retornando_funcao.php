<div class="titulo">Retornando funcao</div>


<?php
function soma($a){
    //conforme na funcao de retorno abaixo para que a mesma consiga usar o parametro $a para soma deve ser feito a declaracao use ($a) com o devido parametro a ser utilizado
    return function($b) use ($a) {
        return $a + $b;
    };
}

//neste caso como soma é uma função cujo o seu retorno é uma outra função ao passar o primeiro parametro 3 ele ira entender que corresponde ao parametro $a
//para poder passar o parametro $b que não esta declarado na funcao soma mas sim na funcao interna de retorno é necessário declarar mais um parenteses
//passando o outro parametro que sera usado na funcao interna de soma conforme a escrita da funcao soma acima e sua invocação abaixo deste comentario
echo soma(3)(4);


//neste caso o que est sendo feito é chamar a funcao soma()  e já passar o parametro $a e salvar esta funcao dentro de uma variavel
$doisMais = soma(2);

//Ao fazer isto conforme o techo de codigo acima quando for chamada a funcao novamente doisMais que é a variavel que já contem o parametro $a declarado com o valor 2
//chamando ela novamete e passando um novo paramtro o mesmo sera interpretado como sendo o parametro $b e ira realizar a soma dos dois parametros
echo "<br>", $doisMais(10);
echo "<br>", $doisMais(18);


?>