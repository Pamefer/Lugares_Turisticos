<?php
	extract($_POST);
	include("conect.php");
	$idlugar=$_POST['cod'];
	$name=utf8_decode($_POST['lugarname']);
	$codCiudadantes=$_POST['ciudad'];
	$codCiudad=$_POST['select2'];
	$formll=utf8_decode($_POST['comollegar']);
	$desc=utf8_decode($_POST['desc']);
	

	if($codCiudad=="--"){
            $codCiudad=$codCiudadantes;
            
    } 

    if($activ1!="--"){
    	$activtext1=utf8_decode($_POST['activtext1']);
        $sql_insertarh3=mysql_query("insert into lugaractividad values('$idlugar','$activ1','$activtext1')");
    }
     if($activ2!="--"){
    	$activtext2=utf8_decode($_POST['activtext2']);
        $sql_insertarh3=mysql_query("insert into lugaractividad values('$idlugar','$activ2','$activtext2')");
    }
     if($activ3!="--"){
    	$activtext2=utf8_decode($_POST['activtext2']);
        $sql_insertarh3=mysql_query("insert into lugaractividad values('$idlugar','$activ3','$activtext3')");
    }

	$sql_insertar1="update lugarturistico set codLugar='$idlugar', nombreLugar='$name', latitud='$latitud', longitud='$longitud', codCiudad='$codCiudad',formaLlegar='$formll',descripcion='$desc' where codlugar='$idlugar'";
	//$sql_insertar2="update lugaractividad set nombreActividad='$activ' where codlugar='$cod'";
	$res_sql1=mysql_query($sql_insertar1,$link);
	//$res_sql2=mysql_query($sql_insertar2,$link);
	if(!$res_sql1){
		
		echo '<script>alert("Error de actualizacion...")</script>';
		echo "<script>location.href='listarlugar.php'</script>";
	}else{
		echo '<script>alert("Se actualizo correctamente...")</script>';
		echo "<script>location.href='listarlugar.php'</script>";

	}
	
?>
	
		