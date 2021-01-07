<div class="titulo">Usando tipos</div>


<?php

function soma($a , $b){
    echo "<span> Valor da soma $a + $b = </span>";
    return $a + $b;
}

echo soma(1 ,2);


function soma2(int $a, int $b){
    echo "<span> Valor da soma $a + $b = </span>";
    return $a + $b;
}

echo "<br>";
//para este caso o resultado sera 3
echo soma2(1 ,2);
echo "<br>";
//para este caso o resultado será 3 pois os dois parametros definicos na funcao são int então ele pegara o valor inteiro 1 e 2 sem considerar o valor flutuante no 
//caso 1.7 e 2.5
echo soma2(1.7 ,2.5);
echo "<br>";

//para este caso o resultado sera 5 pois como o segundo parametro é ma string ele apenas considerar o primeiro valor numerico no caso 4
echo soma2(1 ,'4dois');
echo "<br>";


//para este caso foi truncado somente o valor final para int os parametros entram como float mas o resultado retornado é inteiro
function soma3($a, $b) : int{
    echo "<span> Valor da soma $a + $b = </span>";
    return $a + $b;
}

//para este caso o valor retornado sera 4.2 conforma a invocação da funcão logo abaixo já que não existe definição de tipo dos parametros e o retorno foi truncado para float
function soma4($a, $b) : float{
    echo "<span> Valor da soma $a + $b = </span>";
    return $a + $b;
}

echo soma3(1.7 ,2.5);
echo "<br>";
echo soma4(1.7 ,2.5);


?>