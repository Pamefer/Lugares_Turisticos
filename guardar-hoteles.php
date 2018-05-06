<?php
	extract($_POST);
	include("conect.php");
	//cadena de conexion al mysql

	$rs = mysql_query("SELECT MAX(codHotel) AS id FROM hoteles");
	if ($row = mysql_fetch_row($rs)) {
		$id = trim($row[0])+1;
	}
	$hotelname=utf8_decode($_POST['hotelname']);
	$direccionh=utf8_decode($_POST['direccionh']);
	$sql_insertar=mysql_query("insert into hoteles values('$id','$hotelname','$direccionh','$categoria','$telefono','$select2')");
	if($otro1!=null){
			$sql_insertarh1=mysql_query("insert into hoteleshabitaciones values('$id','1','$otro1')");
	}
	if($otro2!=null){
		$sql_insertarh2=mysql_query("insert into hoteleshabitaciones values('$id','2','$otro2')");
	}
	if($otro3!=null){
		$sql_insertarh3=mysql_query("insert into hoteleshabitaciones values('$id','3','$otro3')");
	}
	

	  if (isset($_POST['chk'])) {  
                $arreglo=$_POST['chk'];
                $count = count($arreglo);
                   for ($j = 0; $j < $count; $j++) {
                   	echo "<br>";
                   		$arreglo[$j];
                        $valor=$arreglo[$j];
                        $sql_insertar2=mysql_query("insert into hotelesservicios values('$id','$valor')");
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