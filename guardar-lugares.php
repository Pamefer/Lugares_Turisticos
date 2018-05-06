<?php
    extract($_POST);
    include("conect.php");
    //cadena de conexion al mysql

$ruta="images/imgbase";
$archivo=$_FILES['imagen']['tmp_name'];
$nombreArchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
 $ruta=$ruta."/".$nombreArchivo;
$lugarname=utf8_decode($_POST['lugarname']);
$comollegar=utf8_decode($_POST['comollegar']);
$descripcion=utf8_decode($_POST['descripcion']);
    $rs = mysql_query("SELECT MAX(codLugar) AS id FROM lugarturistico");
    if ($row = mysql_fetch_row($rs)) {
        $id = trim($row[0])+1;
    }
     $rsf = mysql_query("SELECT MAX(codFoto) AS idf FROM fotos");
    if ($row = mysql_fetch_row($rsf)) {
        $idf = trim($row[0])+1;
    }
    $sql_insertar=mysql_query("insert into lugarturistico values('$id','$lugarname','$latitud','$longitud','$select2','$comollegar','$descripcion')");
    
    if($selectC1!="--"){
        $sql_insertart=mysql_query("insert into lugartipo values('$id','$selectC1')");
    }
    if($selectC2!="--"){
        $sql_insertart=mysql_query("insert into lugartipo values('$id','$selectC2')");
    }
    if($trans1!="--"){
        $sql_insertart1=mysql_query("insert into lugartrans values('$id','$trans1','$transtext1')");
    }
    if($trans2!="--"){
        $sql_insertarht2=mysql_query("insert into lugartrans values('$id','$trans2','$transtext2')");
    }
    if($activ1!="--"){
        $activtext1=utf8_decode($activtext1);
        $sql_insertarh3=mysql_query("insert into lugaractividad values('$id','$activ1','$activtext1')");
    }
     if($activ2!="--"){
        $activtext2=utf8_decode($activtext2);
        $sql_insertarh3=mysql_query("insert into lugaractividad values('$id','$activ2','$activtext2')");
    }
     if($activ3!="--"){
        $activtext3=utf8_decode($activtext3);
        $sql_insertarh3=mysql_query("insert into lugaractividad values('$id','$activ3','$activtext3')");
    }
     if($activ4!="--"){
        $activtext4=utf8_decode($activtext4);
        $sql_insertarh3=mysql_query("insert into lugaractividad values('$id','$activ4','$activtext4')");
    }
   
        $insertar=mysql_query("INSERT INTO fotos VALUES('idf','$ruta','5','$id','1')");
    
    $res_sql1=mysql_query($sql_insertar,$link);

    if(!$sql_insertar ){
        
        echo '<script>alert("Error de insersion...")</script>';
        echo "<script>location.href='user-formulario.php'</script>";

    }else{
        echo '<script>alert("Se inserto correctamente...")</script>';
        echo "<script>location.href='user-formulario.php'</script>";


    }
    
?>