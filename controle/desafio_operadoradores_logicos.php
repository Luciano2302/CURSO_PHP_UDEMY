<div class="titulo">
   Teste desafio operadores logicos
</div>


<form action="#" method="post">

  <div>
    <label for="t1"> Trabalho 1 (Terça): </label>
    <select name="t1" id="t1"> 
     <option value="1">Executado</option>
     <option value="0">Não executado</option>
    
    </select>
  </div>

  <div>
    <label for="t2"> Trabalho 2 (Quinta): </label>
    <select name="t2" id="t2"> 
     <option value="1">Executado</option>
     <option value="0">Não executado</option>
    
    </select>
  </div>

  <button>Executar</button>

</form>


<style>
  button, select {
     font-size: 1.8rem; 
  }
</style>



<?php

echo $_POST['t1'];
echo $_POST['t1'];


?>

