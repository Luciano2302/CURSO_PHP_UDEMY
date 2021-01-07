<div class="titulo">Argumentos Padrão</div>



<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = "Cliente"){
     echo "Bem vindo, $nome $sobrenome <br>";
}

//neste caso como não foi passado nenhum argumento ele irá utilizar para a impressão no metodo os valores padrões
saudacao();

//neste caso como foi passado somente um argumento ele irá considerar o valor NUll para o primeiro parametro e considerara para o segundo paramatro o valor padrão (Cliente)
saudacao(NULL);

//para este caso ele só irá imprimir a a parte Bem vindo considerando que os dois argumentos passados são null
saudacao(NULL, NULL);

//para este caso será impresso a frase Bem vindo, Luciano Lima Gonçalves pois existem dois parametros string sendo passados 
saudacao('Luciano', 'Lima Gonçalves');
echo "<br>";

//para este caso é obrigatorio informar o primeiro parametro já o segundo não existe obrigatorioedade devido a existir um argumento padrão
function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Peixe');
echo "<br>";
anotarPedido('Carne','Coca-Cola');

//interessante sempre declarar o parameto padrão por ultimo na função 


?>