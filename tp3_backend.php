<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP numero 3</title>
  </head>
  <body>

    <h3>1. Mostrar los números del 1 al 100</h3>
    <?php
    $i=1;
    while ($i < 100) {
      print "<p>$i</p>\n";
      $i++;
    }
     ?>
    <h3>2. Mostrar los números del 100 al 1</h3>
    <?php
    $i=100;
    while ($i >1) {
      print "<p>$i</p>\n";
      $i--;
    }
     ?>
     <h3>3. Mostrar los números pares del 1 al 100</h3>
     <?php
     $i=2;
     while ($i <=100) {
       print "<p>$i</p>\n";
       $i++;$i++;
     }
      ?>

     <h3>4. Mostrar los números impares del 1 al 100</h3>
     <?php
     $i=1;
     while ($i <=100) {
       print "<p>$i</p>\n";
       $i++;$i++;
     }
      ?>
    <h3>5. Mostrar la suma de los números de 1 a 20.</h3>
     <?php
$suma=0;
for ($i=1; $i <=20 ; $i++) {
  $suma +=$i;
}
print "La suma de los numeros del 1 al 20 es $suma \n";
      ?>
     <h3>6. Mostrar la suma de números pares de 1 a 20</h3>
     <?php
     $a=0;
     for ($i=2; $i <=20 ; $i=$i+2) {
       $a=$i+$a;
       echo "$a<br>";
     }


      ?>

</html>
