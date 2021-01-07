<div class="titulo">Array Post</div>

<form action="#" method="post">
 <input type="text" name="nome">
 <input type="text" name="sobrenome">
  <select name="estado">
    <option value="AC">Acre</option>
    <option value="BA">BAHIA</option>
  </select>   
<button>Enviar</button>
</form>


<style>
 form -> *{
   font-size: 1.8rem;

 }
</style>


<?php

print_r($_GET);
echo'<br>';
echo $_POST;
print_r($_POST);


?>