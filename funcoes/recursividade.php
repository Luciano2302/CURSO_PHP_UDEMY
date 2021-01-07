<div class="titulo">Recursividade</div>

<?php

//versao com for 
function somaUmAte($numero){
    $soma = 0;
    for (; $numero >= 1;$numero --) { 
        $soma += $numero;
    }

    return $soma;
}

echo  "O valor da soma e ".somaUmAte(5)."<br>";


//versao soma com metodo recursivo
function somaRecursivaUmAte($numero){
    //Esta é a condicao de parada da soma recursiva 
    if($numero == 1){
          return 1;
     }

     return $numero + somaRecursivaUmAte($numero -1);
}


echo 'O valor da soma recursiva é '.somaRecursivaUmAte(10).'<br>';

//soma recursiva com o if ternario
function somaRecusivaEconomica($numero){
     return $numero === 1 ? 1 : $numero + somaRecusivaEconomica($numero -1); 
}

echo "Soma recursiva com if ternario ".somaRecusivaEconomica(10).'<br>';

?>