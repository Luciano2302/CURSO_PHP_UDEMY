<div class="titulo">Primeira Classe</div>

<?php

class Cliente {

//o public precisa ser definido para acesso ao atributo, se não tiver o public  precisa ser criado os getters e setters para acessar os atributos da classe
public $nome = 'Anônimo';
public $idade = 18;

public function apresentarCliente(){
   echo "Nome do cliente: {$this->nome}<br>";
   echo "Idade do Cliente: {$this->idade} <br>";
}

}

$cliente = new Cliente();

$cliente->apresentarCliente();

$cliente->nome = "José Almeida";
$cliente->idade = 27;

$cliente->apresentarCliente();

//neste caso pode chamar a classe cliente sem os () por que não existe um construtor definido na classe então ao ser invocado ele chama o padrão
$cliente2 = new Cliente;
$cliente2->nome =  "Juriscreudi";
$cliente2->idade = 50;
$cliente2->apresentarCliente();

?>


