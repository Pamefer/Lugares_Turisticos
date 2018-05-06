<?php

include "conect.php";

$user=$_POST['user'];
$idlugar=$_POST['idlugar'];
$ruta="images/usuarios";
$archivo=$_FILES['imagen']['tmp_name'];
$nombreArchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
$ruta=$ruta."/".$nombreArchivo;



$sql=mysql_query("SELECT * FROM usuario WHERE nombreUser='$user'");
	if($f=mysql_fetch_array($sql)){
		$coduser=$f['codUsuario'];
		$insertar=mysql_query("INSERT INTO fotos VALUES('','$ruta','$coduser','$idlugar','0')");
		if($insertar){       
			$ressql=mysql_query($insertar);
		
		echo "<script>location.href='lugar2.php?codlugar=$idlugar&user=$user'</script>";	

		
	}else{
		
		echo '<script>alert("DATOS INCORRECTOS")</script> ';
		
		echo "<script>location.href='lugar.php?codlugar=$idlugar'</script>";	

	}

}
?>
