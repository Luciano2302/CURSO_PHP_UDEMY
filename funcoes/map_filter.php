<div class="titulo">Map e Filter</div>




<?php

$notas = [2.5, 4.6, 10, 5.78];

$notasFinais1 =[];

foreach ($notas as $nota) {
   $notasFinais1[] = round($nota); 
}

print_r($notasFinais1);

echo "<br>";

$notasFinais2 =  array_map(round, $notas);

echo "Notas finais arredondadas utilizando o metodo array_map() <br>";
print_r($notasFinais2);


function validaMedia($nota){
    return ($nota >= 7); 
}

//agora exemplo utilizando o metodo filter par criar um novo array com base nas notas filtrando aqueles que foram aprovados no caso com nota acima ou igual de 7
function listaAprovados($nota){
    return $aprovados = array_filter($nota, validaMedia);
}

echo"<br>";
echo"Metodo que valida a lista de notas pelo funcao array filter onde é passado o array e posteriormente o metodo de validação <br>";
print_r(listaAprovados($notas));


//conclusão
//o metodo array_map cria um novo array com uma determinada logiva imbutida como é o caso no array de notas que é arredondado, ele cria um novo array com a mesma
//quantidade de elementos porem com eles arredondados
//Já o metodo array_filter traz uma novo array porem não com a mesma quantidade dependendo do metodo validador que deve ter uma saida true ou false como é o caso do 
//metod que cria uma novo array de notas aprovadas ou seja nota >= 7

?>