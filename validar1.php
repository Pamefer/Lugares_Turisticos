
<?php
	require("conect.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];
	
	
	$sql2=mysql_query("SELECT * FROM usuario WHERE nombreUser='$username' AND passadmin='$pass'");
	if($f2=mysql_fetch_array($sql2)){
		if($pass==$f2['passadmin']){
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
		
			echo "<script>location.href='user-formulario.php'</script>";
		
		}
	}

	$sql=mysql_query("SELECT * FROM usuario WHERE nombreUser='$username' AND contrasenia='$pass'");
	if($f=mysql_fetch_array($sql)){
		if($pass==$f['contrasenia']){
		echo "<script>location.href='index2.php?user=$username'</script>";	
			//header("Location: index2.php?coduser='$codU'");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		    echo "<script>location.href='login.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		//echo "<script>location.href='login.php'</script>";	

	}


	


		


?>