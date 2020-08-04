<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="calculadora.css">
</head>
<body>
   <form class="lol" method="post" action="calculadora.php">
       <h1>Calculadora</h1>
       <input type="text" name="n1" placeholder ="Ingrese un numero">
       <input type="text" name="n2" placeholder ="Ingrese un numero">
       <select name="opciones" class="opciones">
           <option value="0">Sumar</option>
           <option value="1">Resta</option>
           <option value="2">Multiplicacion</option>
           <option value="3">Division</option>
       </select>
       <input type="submit" value="Calcular" name="Calcular">
       <output type ="number" name="">
   </form>
</body>
</html>

<?php
if(isset($_REQUEST['Calcular']))
{
    $n1= $_REQUEST['n1'];
    $n2= $_REQUEST['n2'];
    $opciones= $_REQUEST['opciones'];
}
switch($opciones){
    case 0:echo $n1 + $n2;break;
    case 1:echo $n1 - $n2; break;  
    case 2:echo $n1 * $n2; break;     
    case 3:echo $n1 / $n2; break;         
}

?>