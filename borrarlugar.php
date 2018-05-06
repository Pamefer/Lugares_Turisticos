<?php
	extract($_GET);
	include("conect.php");
	//cadena de conexion al mysql
	$sql_insertar1="delete from lugaractividad where codlugar=$id";
	$sql_insertar2="delete from comentarios where codlugar=$id";
	$sql_insertar3="delete from fotos where codlugar=$id";
	$sql_insertar4="delete from lugartipo where codlugar=$id";
	$sql_insertar5="delete from lugartrans where codlugar=$id";
	$sql_insertar6="delete from lugarturistico where codlugar=$id";
	$res_sql1=mysql_query($sql_insertar1,$link);
	$res_sql2=mysql_query($sql_insertar4,$link);
	$res_sql3=mysql_query($sql_insertar2,$link);
	$res_sql4=mysql_query($sql_insertar3,$link);
	$res_sql5=mysql_query($sql_insertar5,$link);
	$res_sql6=mysql_query($sql_insertar6,$link);
	if(!$res_sql1 and !$res_sql2 and !$res_sql3 and !$res_sql4 and !$res_sql5 and !$res_sql6){
		
		echo '<script>alert("Error de eliminacion...")</script>';
		//echo "<script>location.href='listarlugar.php'</script>";
	}else{
		echo '<script>alert("Se elimino correctamente...")</script>';
		echo "<script>location.href='listarlugar.php'</script>";

	}
	
	
?>