<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h3>1. Crear una variable n y validar que sea un número positivo</h3>
    <?php
    $n= 6;
 if ( $n > 0 ) {
  echo "$n es un numero positivo";
}
     ?>

  <h3>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h3>
  <?php
  $n=3;
  if ($n > 1) {
    echo "$n es mayor a 1";
  }
  elseif ($n < 10) {
    echo "$n es menor a 10";
  }
     ?>

  <h3>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</h3>
  <?php
  $n=1;
  if ($n > 10) {
      echo "$n es mayor a 10";
  }
  elseif ($n < 2) {
    echo "$n es menor a 2";
  }
     ?>

  <h3>4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h3>
  <?php
$numero1=10;
$numero2=10;

if ($numero1 > $numero2) {
  echo "$numero1 + $numero2, $numero1 - $numero2";
}
elseif ($numero2 > $numero1) {
  echo "$numero2*$numero1, $numero2/$numero1, $numero2%$numero1";
}
else {
  echo "Los numeros ingresados son iguales";
}

    ?>
  </body>
</html>
