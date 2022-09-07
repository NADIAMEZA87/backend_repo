<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Primer TP</title>
  </head>
  <body>
    <h3>EJERCICIO 1</h3>
    <?php
echo "Hola mundo";
     ?>
<br>
<hr>
    <h3>EJERCICIO 2</h3>
    <?php
$mensaje= "Hola mundo";
echo "$mensaje";
    ?>
<br>
<hr>
    <h3>EJERCICIO 3</h3>
     <?php
$numx= 5;
$numy= 5;
?>
     <?php
$resultadosuma= $numx + $numy;
echo "$resultadosuma";
?>
<br>
    <?php
$resultadomenos= $numx - $numy;
echo "$resultadomenos";
    ?>
<br>
   <?php
$resultadomult= $numx * $numy;
echo "$resultadomult";
   ?>
<br>
   <?php
$resultadodiv= $numx / $numy;
echo "$resultadodiv";
  ?>
<br>
    <?php
$resultadoresto= $numx % $numy;
echo "$resultadoresto";
    ?>
<br>
<hr>
<h3>EJERCICIO 4</h3>
    <?php
$grados=20;
echo $grados*(9/5)+32;
    ?>
  </body>
<br>
<hr>
<h3>EJERCICIO 5 A</h3>
    <?php
$base=18;
$altura=12;
$perimetro= (2*$base)+(2*$altura);
echo $perimetro;
    ?>
<br>
<hr>
<h3>EJERCICIO 5 B</h3>
   <?php
$radio=30;
$Pi=3.1416;
$perimetrocirc=2*$Pi*$radio;
echo $perimetrocirc;
?>

<br>
<?php
$areacirc=$Pi**$radio;
echo $areacirc;
   ?>
</html>
