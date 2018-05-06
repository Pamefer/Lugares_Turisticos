<?php
	extract($_POST);
	include("conect.php");
	$idrestau=$_POST['cod'];
	$codCiudad=$_POST['select2'];
  $codCiudadantes=$_POST['ciudad'];
	$nombre=utf8_decode($_POST['nombre']);

	 if($codCiudad=="--"){
             $codCiudad=$codCiudadantes;
    }
	
	
	$sql_insertar="update restaurantes set nombreRestau='$nombre' ,direccion='$dir' ,codCiudad='$codCiudad' where codRestaurante='$idrestau'";
	$res_sql=mysql_query($sql_insertar,$link);

		  if (isset($_POST['chk2'])) {  

	 $arreglo2=$_POST['chk2'];
                $count2 = count($arreglo2);
                   for ($j = 0; $j < $count2; $j++) {
                    echo "<br>";
                        $arreglo2[$j];
                        $valor=$arreglo2[$j];

                    }
                   
              }
          $sql_check2="delete from restaurantetipoc where codRestaurante='$idrestau'";
          $sql=mysql_query($sql_check2,$link);
          /*$res_sql=mysql_query($sql_check2,$link);
          $arreglo3[]=array();
          $c=0;

          	while ($row=mysql_fetch_array($res_sql)){
          			echo $arreglo3=$row['codServicios'];
          			$c=$c+1;
          		}
          if($c>$count2){
          	$total=$c;
          }else{
          	$total=$count2;
          }*/
        for ($j = 0; $j < $count2; $j++) {
                 	$a=$arreglo2[$j];
                 	$sql_check2="insert into restaurantetipoc values ('$idrestau', '$a')";
                     $res_sql=mysql_query($sql_check2,$link);
                 

                    }

		  
	if(!$res_sql){
		
		echo '<script>alert("Error de actualización...")</script>';
    echo "<script>location.href='listarrestaurantes.php'</script>"; 
  
	}else{
		echo '<script>alert("Se actualizó correctamente...")</script>';
		echo "<script>location.href='listarrestaurantes.php'</script>";	


	}
	
	
?>