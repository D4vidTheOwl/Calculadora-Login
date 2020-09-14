<?php
$numero1 = $_POST["n1"];
$numero2 = $_POST["n2"];
$opciones = $_POST["opciones"];
$resultado = 0;
if ($opciones == "+"){
  $resultado = $numero1 + $numero2;
}

else if ($opciones == "-"){
  $resultado = $numero1 - $numero2;
}

else if ($opciones == "*"){
  $resultado = $numero1 * $numero2;
}

else
{
  $resultado = $numero1 / $numero2;
}
echo "EL RESULTADO ES: " . $resultado;

?>