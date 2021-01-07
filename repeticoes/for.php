<div class="titulo">Laço for</div>



<?php


//imprime os elementos e 0 a 5
for ($i=0; $i <= 5 ; $i++) { 
    
     echo "$i <br/>";
}

echo "<hr/>";


//como a variavel i não foi setada para zero conforme o for abaixo ele vai imprimir os numeros de 6 a 9, a variavel i esta neste mommento setada no valor 6 
for ( ;$i < 10 ; $i++) { 
    echo "$i <br/>";
}

echo "<hr/>";

//para este caso a conficao irá verificar se o i é menor que 15 para entrar dentro do for caso o contador não recebese o incremento dentro do for (i++) ele iria imprimir 
//infinitamente
for ( ; $i <= 15 ; ) { 
    echo "$i <br/>";
    $i++;
}

$array = ['Segunda', 'Terça','Quarta','Quinta','Sexta','Sabado','Domingo'];
echo "<hr/>";

for ($i=0; $i < count($array) ; $i++) { 
    echo "{$array[$i]} <br>";

}

echo "<hr/>";

//percorrer uma matriz
$matriz = [
    ['a','b','c','d','e'],
    ['f','g','h','i']
];

for ($i=0; $i < count($matriz) ; $i++) { 
    for ($j=0; $j < count($matriz[$i]) ; $j++) { 
        echo "{$matriz[$i][$j]}";
    }
    echo "<br>";
}



?>