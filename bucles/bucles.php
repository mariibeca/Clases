<?php
 for ($i=1; $i <= 100; $i++) {
   echo "numero $i <br>";
}
$aleatorio = rand(1, 100);

 for ($i=0; $i < $aleatorio; $i++) {
   echo "numero $aleatorio <br>";
 }

 $i = 100;

while ($i >= 85) {
  echo "numero $i <br>";
  $i--;
}

$cont = 0;

while ($cont < 5) {
  $moneda = rand(0, 1);
if ($moneda == 0){
  $cont ++;
}
} echo $cont;

$ceu = [
  "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
  "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Paulo"]
];

  $capitales = [];

  foreach ($ceu as $pais => $ciudades) {
    echo "el pais es: $pais <br>";

  }


?>
<!DOCTYPE html>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
