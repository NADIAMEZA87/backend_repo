<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h2>EJERCICIO NUMERO 1</h2>
  <?php
$numerospares= ["0", "2","4","6","8", "10"];
foreach ($numerospares as $valor) {
  print "$valor";
  echo "<br>";
}
  ?>

  <h2>EJERCICIO NUMERO 2</h2>
  <?php
$matriz= ["Pedro", "Ana", "34","1" ];
print_r ($matriz);
   ?>


  <?php
$asociativa=['nombre'=>"Pedro", 'apellido'=>"Torres",'direccion'=>"Av. Mayor 3703",'telefono'=>"1122334455"];
  ?>

  <h2>EJERCICIO NUMERO 4</h2>
  <?php
$ciudades1=["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago"];
print "La ciudad con el indice 0 tiene el nombre $ciudades1[0].";
echo "<br>";
print "La ciudad con el indice 1 tiene el nombre $ciudades1[1].";
echo "<br>";
print "La ciudad con el indice 2 tiene el nombre $ciudades1[2].";
echo "<br>";
print "La ciudad con el indice 3 tiene el nombre $ciudades1[3].";
echo "<br>";
print "La ciudad con el indice 4 tiene el nombre $ciudades1[4].";
echo "<br>";
print "La ciudad con el indice 5 tiene el nombre $ciudades1[5].";
echo "<br>";
  ?>

<h2>EJERCICIO NUMERO 5</h2>
<?php
$ciudades2=['MD'=> "Madrid", 'BCL'=> "Barcelona", 'LD'=> "Londres", 'NY'=> "New York", 'LA'=> "Los Angeles", 'CCG'=> "Chicago",];
print "El indice de $ciudades2[MD] es MD.";
echo "<br>";
print "El indice de $ciudades2[BCL] es BCL.";
echo "<br>";
print "El indice de $ciudades2[LD] es LD.";
echo "<br>";
print "El indice de $ciudades2[NY] es NY.";
echo "<br>";
print "El indice de $ciudades2[LA] es LA.";
echo "<br>";
print "El indice de $ciudades2[CCG] es CCG.";
echo "<br>";
?>

</body>
</html>
