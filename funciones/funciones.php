<?php 
$numeroMagico = 33;


function mayor($num1, $num2, $num3 = ''){
    global $numeroMagico;
    if ($num3 == '') {
      $num3 = $numeroMagico;  
    }
    if ($num1 > $num2 && $num1 > $num3) {
      return $num1;
    }
    if ($num2 > $num1 && $num2 > $num3){
      return $num2;
    }
    if ($num3 > $num1 && $num3 > $num2){
      return $num3;
    }
}

    echo mayor(5, 33, 46);
    echo mayor(9,10);

    function tabla($base, $limite){
        $secuencia = [];
        for ($i = $base; $i <= $limite ; $i++) {
            $secuencia[] = $i;       
        }
        return $secuencia;
    }
     var_dump (tabla(29, 49));
    
 ?>
 