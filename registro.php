<?php

	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("conect.php");
	$checkemail=mysql_query("SELECT * FROM usuario WHERE correo='$mail'");
	$check_mail=mysql_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO usuario VALUES('','$realname','$pass','$mail','')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='index2.php?user=$realname'</script>";	

				mysql_close($link);
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>