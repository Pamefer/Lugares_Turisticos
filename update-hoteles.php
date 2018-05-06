<?php
	extract($_POST);
	include("conect.php");
	$idhotel=$_POST['cod'];
	$codCiudad=$_POST['select2'];
	$codCiudadantes=$_POST['ciudad'];
	$categoria=$_POST['select3'];
	$codCategoantes=$_POST['categoria'];
	$hotelname=utf8_decode($_POST['hotelname']);
	$direccionh=utf8_decode($_POST['direccionh']);
	$op1='1';
	$op2='2';
	$op3='3';

	if($otro1!=null){
			$sql_insertarh1=mysql_query("update hoteleshabitaciones set tarifa='$otro1' where codHotel='$idhotel' and codHabitacion='$op1' ");
	}
	if($otro2!=null){
		$sql_insertarh2=mysql_query("update hoteleshabitaciones set tarifa='$otro2' where codHotel='$idhotel' and codHabitacion='$op2' ");
	}
	if($otro3!=null){
		$sql_insertarh3=mysql_query("update hoteleshabitaciones set tarifa='$otro3' where codHotel='$idhotel' and codHabitacion='$op3' ");
	}




	//cadena de conexion al mysql
	 if($codCiudad=="--"){
             $codCiudad=$codCiudadantes;
    } 
     if($categoria=="--"){
             $categoria=$codCategoantes;
            	
    }
	$sql_insertar="update hoteles set nombreHotel='$hotelname',direccion='$direccionh', telefono='$telefono', codCiudad='$codCiudad' , calificacion='$categoria' where codHotel='$idhotel'";
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
          $sql_check2="delete from hotelesservicios where codHotel='$idhotel'";
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
                 	$sql_check2="insert into hotelesservicios values ('$idhotel', '$a')";
                     $res_sql=mysql_query($sql_check2,$link);
                 

                    }

		  
	if(!$res_sql){
		
		echo '<script>alert("Error de actualización...")</script>';
		echo "<script>location.href='listarHoteles.php'</script>";	
		
	}else{
		echo '<script>alert("Se actualizó correctamente...")</script>';
		echo "<script>location.href='listarHoteles.php'</script>";	


	}
	
	
?>