<?php
session_start();
$nameimagen=$_FILES['imagen']['name'];
$tmpimagen=$_FILES['imagen']['tmp_name'];
$extimagen=pathinfo($nameimagen);
$ext= array("png","jpg","gif");
$urlnueva="images/".$nameimagen;
//imagenes/jaja.png

if(is_uploaded_file($tmpimagen)){
	if(array_search($extimagen['extension'],$ext)){
		copy($tmpimagen,$urlnueva);
		echo "Guardada";
	}else{
		echo "error";
	}
}else{
	echo "Elija una imagen";
}
?>