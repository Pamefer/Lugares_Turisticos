<?php
	extract($_GET);
	include("conect.php");
	//cadena de conexion al mysql
	$sql_insertar1="delete from restaurantetipoc where codRestaurante=$id";
	$sql_insertar2="delete from restaurante where codRestaurante=$id";
    var_dump($sql_insertar);
	$res_sql1=mysql_query($sql_insertar1,$link);
	$res_sql2=mysql_query($sql_insertar2,$link);
	if(!$res_sql1 and !$res_sql2){
		
		echo '<script>alert("Error de eliminacion...")</script>';
		//echo "<script>location.href='listarlugar.php'</script>";
	}else{
		echo '<script>alert("Se elimino correctamente...")</script>';
		echo "<script>location.href='listarhoteles.php'</script>";

	}
	
	
?>