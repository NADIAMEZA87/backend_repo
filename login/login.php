<?php
$usuario=$_POST ["user"];
$contrasenia=$_POST["pass"];

$logueado="Nadia";
$key= "1234";

if ($usuario==$logueado && $contrasenia==$key) {
  header ("location: https://nadiameza87.github.io/crarproyecto/");
}
else {
  header ("location: loginerror.html");
}
?>
