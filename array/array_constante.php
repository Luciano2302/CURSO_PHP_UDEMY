<div class="titulo">Arrays Constantes</div>



<?php
const Frutas = ['laranja', 'abacaxi'];


//nao conforme abaixo atribuir novos valores a um arrya constante
//Frutas[0] = 'banana';
//Frutas[] =  'banana';

echo Frutas[0];

//outra forma de definir uma array constante
define('CIDADES',array("Florianopolis","Sao Jose"));

//conforme o exemplo abaixo não ira permitir atribuir novo valor ao array constante
//CIDADES[] = "Rio de Janeiro";

echo'<br>' .CIDADES[1];




?>