<?php
	extract($_POST);
	include("conect.php");
	//cadena de conexion al mysql

	$rs = mysql_query("SELECT MAX(codRestaurante) AS id FROM restaurantes");
	if ($row = mysql_fetch_row($rs)) {
		$id = trim($row[0])+1;
	}
	$restauname=utf8_decode($_POST['restauname']);
	$direccion=utf8_decode($_POST['direccion']);
	$sql_insertar=mysql_query("insert into restaurantes values('$id','$restauname','$direccion','$select2')");
	

	  if (isset($_POST['chk2'])) {  
                $arreglo=$_POST['chk2'];
                $count = count($arreglo);
                   for ($j = 0; $j < $count; $j++) {
                        $arreglo[$j];
                         $valor=$arreglo[$j];

                        $sql_insertar2=mysql_query("insert into restaurantetipoc values('$id','$valor')");
                    }
              }

	$res_sql1=mysql_query($sql_insertar,$link);

	if(!$sql_insertar ){
		
		echo '<script>alert("Error de insersion...")</script>';
		echo "<script>location.href='user-formulario.php'</script>";

	}else{
		echo '<script>alert("Se inserto correctamente...")</script>';
		echo "<script>location.href='user-formulario.php'</script>";


	}
	
?>