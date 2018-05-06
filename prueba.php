<?php
$arreglo[0]=2;
    $arreglo[1]=3;
    $arreglo[2]=4;
    $arreglo[3]=2;
     $count = count($arreglo);
    for ($j = 0; $j < $count; $j++) {
        //print($arreglo[$j].'<br><br>');     //variable servicios checkbox
        $a=($arreglo[$j]);
        if($j==0){
         $sqltablas.=', hotelesservicios hs, servicios s';
        }
        $servicios.='s.codServicios='.$arreglo[$j] ;
            $sql.='and s.codServicios='.$a.' and hs.codServicios=s.codServicios 
        and hs.codHotel=h.codHotel';
      }
      echo $servicios;
?>