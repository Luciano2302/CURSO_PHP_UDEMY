<div class="titulo">Argumentos Variaveis</div>





<?php


//neste caso da função abaixo o parametos $numeros precedido de ... torna o mesmo em argumentos variaveis ou seja pode ser colocado mais de uma argumento quando a função for 
//chamada que os mesmso serão lançados em um array conforme o exemplo abaixo mostra 
function argumentosVariaveis(...$numeros){
    print_r($numeros);
}

//invocação da função onde é impresso na tela a seguinte informação indice [0] valor1 indice[1] valor2 e indice[2] valor Teste
argumentosVariaveis(1,2,"Teste");

echo"<br>";

//no exemplo abaixo é criado uma função de soma passando apenas um argumento variaveis onde seguira a mesma logica so exemplo acima
function soma(...$numeros){
     $soma = 0;

    foreach ($numeros as $valor) {
        $soma += $valor;
    }
    return $soma;
}

$soma = soma(5,10,5);
echo "valor da soma é $soma";

//os argumentos variaveis podem ser passados dentro de uma função com outros tipos de argumentos contanto que ele seja declarado por ultimo na ordem de argumentos da funcao
//conforme abaixo
function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";

    foreach ($dependentes as $dependente) {
        echo "Dependente: $dependente<br>";
    }
}
echo "<hr>";
echo "<br>";
membros('João', 'Grabiel', 'Ana','Felipe');


?>