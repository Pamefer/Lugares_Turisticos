
<?php
	require("conect.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];
	$idlugar=$_POST['idlugar'];
	$comen=$_POST['message'];
	$pag=$_POST['pag'];
	

	$sql=mysql_query("SELECT * FROM usuario WHERE nombreUser='$username' AND contrasenia='$pass'");
	if($f=mysql_fetch_array($sql)){
		$iduser=$f['codUsuario'];
		
		 $sql="INSERT INTO comentarios  VALUES ('','$comen','$iduser','$idlugar')";

		 $ressql=mysql_query($sql);
		if($pag==2){
		echo "<script>location.href='lugar2.php?codlugar=$idlugar&user=$username'</script>";	
		}
	}else{
		
		echo '<script>alert("DATOS INCORRECTOS")</script> ';
		
		echo "<script>location.href='lugar.php?codlugar=$idlugar'</script>";	

	}


		


?>