<?php
	extract($_GET);
	include("conect.php");
	//cadena de conexion al mysql
	
	$sql_insertar="select  l.codlugar ,l.nombrelugar, l.latitud, l.longitud, t.nombreTl, l.formaLlegar, l.descripcion
                 from lugarturistico l, ciudad c, tipoatractivo t, lugartipo lt, lugaractividad la, actividades a
                 where l.codlugar='$id' AND l.codCiudad=c.codCiudad  AND (lt.codlugar=l.codlugar AND lt.codtipo=t.codtipo) AND (la.codlugar=l.codlugar AND la.codactividad=a.codactividad)";
     
   
	$res_sql=mysql_query($sql_insertar,$link);
	while ($row=mysql_fetch_array($res_sql)){
		$cod=$row['codlugar'];
		$nombre=$row['nombrelugar'];
		$lat=$row['latitud'];
		$long=$row['longitud'];
		$nomtl=$row['nombreTl'];
		$formll=$row['formaLlegar'];
		$desc=(utf8_encode($row['descripcion']));	
			
	}
?>
<!DOCTYPE html>
<html lang = "es">
<head>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<script type="text/javascript">
	<!--
	function mostrarDescrip(){
	//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
	if (document.lugar.selecta1[0].checked == true ) {
	//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
	document.getElementById('act2').style.display='block';
	//por el contrario, si no esta seleccionada
	} 

	

	}
	-->
	</script>
		
</head>
<body>
	<header>
		<section id="logo">
				<img src="images/e.jpg">
		</section>
		<nav id="banners">
				<ul>
					<li><a href="index.html">Inicio</a></li>
					<li><a href="registro.php">Registro</a></li>
					<li><a href="listar-usuarios.php">Listar Base</a></li>
					<li><a href="borrar-usuarios.php">Borrar</a></li>
					<li><a href="actualizar-usuarios.php">Actualizar</a></li>
				</ul>	
				
		</nav>
	</header>
	<section id ="contenidos">
	</section>
	<section id="contenidos2">
		<h2>Formuario De Registro</h2>
		<form name="lugar"action="updatelugares.php" method="post">
			<input type="hidden" name="cod"  value="<?php echo $cod;?>" ><br>
			Nombre:<input type="text" name="nombre" placeholder="Nombres" required value="<?php echo $nombre;?>"><br>
			Latitud:<input type="text" name="lat" placeholder="Apellidos" required value="<?php echo $lat;?>"><br>
			Longitud:<input type="text" name="long" placeholder="Cedula" required value="<?php echo $long;?>"><br>
      <div id="medio" class="form-group" style="display:inline-block; margin-top:10px">
                            <label for="contact-email" class="col-sm-2 control-label" style="float:left;" >Tipo Lugar:</label>
                            <div  style="float:right;">
                                <?php
                                    extract($_POST);
                                    include("conect.php");
                                    //cadena de conexion al mysql
                                    $sql_listar="select * from tipoatractivo";
                                    $res_sql=mysql_query($sql_listar,$link);
                                    echo "<select class='form-control' name='selectC' style='font-size:12px; float:right'>";
                                    echo "<option>--</option>";
                                    while ($row=mysql_fetch_array($res_sql)){
                                      echo "<option value=".$row['codTipo']." >".(utf8_encode($row['nombreTl']))."</option>";
                                    }
                                     echo "</select>";   
                                ?>
                        </div >
                     </div><br><br>

			Forma Llegar:<br/><textarea rows="5" name="formll" cols="50" value="desc"><?php echo $formll; ?></textarea><br/>
			Descripción<br/><textarea rows="5" name="descr" cols="50" value="desc"><?php echo $desc; ?></textarea><br/>
			<div id="medio" class="form-group" style="display:inline-block; margin-top:10px">
                            <label for="contact-email" class="col-sm-2 control-label" style="float:left;" >Ciudad</label>
                            <div  style="float:right;">
                                <?php
                                    extract($_POST);
                                    include("conect.php");
                                    //cadena de conexion al mysql
                                    $sql_listar="select * from ciudad";
                                    $res_sql=mysql_query($sql_listar,$link);
                                    echo "<select class='form-control' name='selectC' style='font-size:12px; float:right'>";
                                    echo "<option>--</option>";
                                    while ($row=mysql_fetch_array($res_sql)){
                                    	echo "<option value=".$row['codCiudad'].">".(utf8_encode($row['nombreCiudad']))."</option>";
                                    }
                                     echo "</select>";   
                                ?>
                        </div >
                     </div><br><br>

            <div id="tres" style="margin-top: 21px">
                         <div id="tres" style="margin-top:15px">
                         <div id="izq" class="form-group">
                            <label style="float:left;" >Actividad 1</label>
                        </div>
                        <div  id="medio" class="form-group">

                                <?php
                                    extract($_POST);
                                    include("conect.php");
                                    //cadena de conexion al mysql
                                    $sql_listar="select * from actividades  ";
                                    $res_sql=mysql_query($sql_listar,$link);
        
                                    echo "<select class='form-control' name='select2' style='font-size:12px; float:left'>";
                                    echo "<option>--</option>";

                                    while ($row=mysql_fetch_array($res_sql)){
                                    echo "<option>".(utf8_encode($row['nombreActividad']))."</option><br/>";
                                    }
                                     echo "</select>";   
                                    $sql_listar1="select * from lugaractividad where codlugar='$cod' and codactividad=1 ";
                                    $res_sql1=mysql_query($sql_listar1,$link);
                                    while ($row=mysql_fetch_array($res_sql1)){
                                    	$descri=$row['descripcionLa'];
                           				echo "<textarea class='form-control' rows='2' style='width:300px; float:center;'>$descri;</textarea><br/>";

                                    
                                    }
                                ?>
                               
                        </div >
                        </div>

                        <div id="tres" style="margin-top:15px">
                         <div id="izq" class="form-group">
                            <label style="float:left;" >Actividad 2</label>
                        </div>
                        <div  id="medio" class="form-group">

                                <?php
                                    extract($_POST);
                                    include("conect.php");
                                    //cadena de conexion al mysql
                                    $sql_listar="select * from actividades  ";
                                    $res_sql=mysql_query($sql_listar,$link);
        
                                    echo "<select class='form-control' name='select2' style='font-size:12px; float:left'>";
                                    echo "<option>--</option>";
                                    while ($row=mysql_fetch_array($res_sql)){
                                    echo "<option>".(utf8_encode($row['nombreActividad']))."</option><br/>";
                                    }
                                     echo "</select>";   
                                ?>
                        </div >
                        <div id="dere" class="form-group">
                            <textarea class="form-control" rows="2" style="width:300px; float:center;"></textarea><br/>
                        </div >
                        </div>

                        <div id="tres" style="margin-top:15px">
                         <div id="izq" class="form-group">
                            <label style="float:left;" >Actividad 3</label>
                        </div>
                        <div  id="medio" class="form-group">

                                <?php
                                    extract($_POST);
                                    include("conect.php");
                                    //cadena de conexion al mysql
                                    $sql_listar="select * from actividades  ";
                                    $res_sql=mysql_query($sql_listar,$link);
        
                                    echo "<select class='form-control' name='select2' style='font-size:12px; float:left'>";
                                    echo "<option>--</option>";

                                    while ($row=mysql_fetch_array($res_sql)){
                                    echo "<option>".(utf8_encode($row['nombreActividad']))."</option><br/>";
                                    }
                                     echo "</select>";   
                                ?>
                        </div >
                        <div id="dere" class="form-group">
                            <textarea class="form-control" rows="2" style="width:300px; float:center;"></textarea><br/>
                        </div >
                        </div>

                        <div id="tres" style="margin-top:15px">
                         <div id="izq" class="form-group">
                            <label style="float:left;" >Actividad 4</label>
                        </div>
                        <div  id="medio" class="form-group">

                                <?php
                                    extract($_POST);
                                    include("conect.php");
                                    //cadena de conexion al mysql
                                    $sql_listar="select * from actividades  ";
                                    $res_sql=mysql_query($sql_listar,$link);
        
                                    echo "<select class='form-control' name='select2' style='font-size:12px; float:left'>";
                                    echo "<option>--</option>";

                                    while ($row=mysql_fetch_array($res_sql)){
                                    echo "<option>".(utf8_encode($row['nombreActividad']))."</option><br/>";
                                    }
                                     echo "</select>";   
                                ?>
                        </div >
                        <div id="dere" class="form-group">
                            <textarea class="form-control" rows="2" style="width:300px; float:center;"></textarea><br/>
                        </div >
                        </div>
                    



            
              <div id="medio" class="form-group" style="display:inline-block; margin-top:10px">
                            <label for="contact-email" class="col-sm-2 control-label" style="float:left;" >Medios Transporte</label><br/>
                            <div  style="float:right;">
                         <?php
               extract($_POST);
                include("conect.php");
                                        //cadena de conexion al mysql
                $cont=1;
                
                  $sql_listar="select  m.transporte, lt.descripcion
                              from lugarturistico l, mediostransporte m, lugartrans lt
                             where lt.codLugar='$cod' AND (lt.codTrans=m.codTrans AND lt.codLugar=l.codLugar)";
                  $res_sql=mysql_query($sql_listar,$link);
                 while ($row=mysql_fetch_array($res_sql)){
                 	$trans=(utf8_encode($row['transporte']));
                 	$desc=(utf8_encode($row['descripcion']));
                 	echo "<input type='text' name='desc' placeholder='M/F' required value='$trans'><br>";
                 	echo "<textarea type='text' name='desc' placeholder='$desc' rows='4' cols='40'></textarea><br>";
                  
                   }
                 ?>
            </div >
             </div><br><br>
			<input name="actualizar" value="Actualizar" type="submit" >
		</form>
	</section>	
</body>
<footer>
Derechos Reservados de Pamela Guamán
</footer>
</html>
