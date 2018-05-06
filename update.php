<?php
	extract($_GET);
	include("conect.php");
	//cadena de conexion al mysql
	
	$sql_insertar="select codlugar
                  from lugarturistico 
                  where codlugar='$id'";
     
   
	$res_sql=mysql_query($sql_insertar,$link);
	while ($row=mysql_fetch_array($res_sql)){
		$idlugar=$row['codlugar'];
	}
?>

<div id="about-slider">
                           <div style="text-align:center;">
                                <?php
                                    extract($_POST);
                                    include("conect.php");
                                    $sql_artista="SELECT foto
                                                FROM fotos
                                                WHERE codlugar='$idlugar'";
                                    $res_sql=mysql_query($sql_artista,$link);
                                    while ($row=mysql_fetch_array($res_sql)){
                                            echo '<img src="'.$row['foto'].'"width="550" heigth="350""/>';
                                            break;
                                        }
                                ?>
 </div>
</div>
<h2>Formuario De Registro</h2>
		<form name="usuarios"action="updatelugares.php" method="post">
			<input type="hidden" name="co	d"  value="<?php echo $cod;?>" ><br>
			Nombre:<input type="text" name="nombre" placeholder="Nombres" required value="<?php echo $nombre;?>"><br>
			Latitud:<input type="text" name="lat" placeholder="Apellidos" required value="<?php echo $lat;?>"><br>
			Longitud:<input type="text" name="long" placeholder="Cedula" required value="<?php echo $long;?>"><br>
			Tipo Lugar:<input type="text" name="nomtl" placeholder="Correo" required value="<?php echo $nomtl;?>"><br>
			Forma Llegar:<input type="text" name="formll" placeholder="Edad" required value="<?php echo $formll;?>"><br>
			Descripción<input type="text" name="desc" placeholder="M/F" required value="<?php echo $desc;?>"><br>
<div class="row">  
    <div class="col-xs-12 col-sm-12 blog-content" style='text-align: justify;'>
                                    
         <?php
               extract($_POST);
                include("conect.php");
                                        //cadena de conexion al mysql
                $cont=1;
                $sql_listar="select  l.formaLlegar, l.descripcion
                             from lugarturistico l
                             where l.codlugar='$idlugar'";
                 $actividad="select a.nombreActividad, la.descripcionLa
                              from lugarturistico l, lugaractividad la, actividades a
                              where l.codlugar='$idlugar' AND (la.codlugar=l.codlugar AND la.codactividad=a.codactividad)";
                  $res_sql=mysql_query($sql_listar,$link);
                 $res_ac=mysql_query($actividad,$link);
                  while ($row=mysql_fetch_array($res_sql)){
                  echo "<tr>";
                  echo "<form name='usuarios'action="updatelugares.php" method="post">";
                   echo "<p align='justify'><h5>DESCRIPCIÓN:</h5>".(utf8_encode($row['descripcion']))."</p><br>";
                   echo "<h5>¿CÓMO LLEGAR?:</h5>".(utf8_encode($row['formaLlegar']))."<br>";
                  echo "<br><h5>ACTIVIDADES:</h5>";
                  while ($row=mysql_fetch_array($res_ac)){
                   echo "<h5></h5>".(utf8_encode($row['nombreActividad']))."";
                  echo "<h5></h5>".(utf8_encode($row['descripcionLa']))."";
                   }
                }
                                                    
          ?>

        </div>
</div>

<div class="widget categories">
                        <div class="row">
                            <div class="col-sm-12">
                      <?php
                        extract($_POST);
                        include("conect.php");
                        //cadena de conexion al mysql
                        $sql_listar="select  l.codlugar ,l.nombrelugar, l.latitud, l.longitud, c.altura, c.clima, c.superficie, c.nombreciudad, t.nombreTl
                                    from lugarturistico l, ciudad c, tipoatractivo t, lugartipo lt
                                    where l.codlugar='$idlugar' AND l.codCiudad=c.codCiudad  AND (lt.codlugar=l.codlugar AND lt.codtipo=t.codtipo)";
                        $res_sql=mysql_query($sql_listar,$link);
                        
                        while ($row=mysql_fetch_array($res_sql)){
                            echo "<tr>";
                                echo "<h5> Nombre Lugar:   ".(utf8_encode($row['nombrelugar']))."</h5>";
                                echo "<h5> Latitud:   $row[latitud]</h5>";
                                echo "<h5> Longitud:   $row[longitud]</h5>";
                                echo "<h5> Altura del Lugar:   $row[altura]</h5>";
                                echo "<h5> Clima:    ".(utf8_encode($row['clima']))."</h5>";
                                echo "<h5> Superficie:   ".(utf8_encode($row['superficie']))."</h5>";
                                echo "<h5> Nombre Ciudad:   ".(utf8_encode($row['nombreciudad']))."</h5>";
                                echo "<h5> Tipo de Lugar:   ".(utf8_encode($row['nombreTl']))."</h5>";
                            }
                                    
                      ?>
                    </div>
                </div>                     
            </div>
<div class="widget tags">
                <h3>Medios de Transporte</h3>
                   
                            <?php
                                extract($_POST);
                                include("conect.php");
                                //cadena de conexion al mysql
                                $sql_listar="select  m.transporte, lt.descripcion
                                            from lugarturistico l, mediostransporte m, lugartrans lt
                                            where lt.codLugar='$idlugar' AND (lt.codTrans=m.codTrans AND lt.codLugar=l.codLugar)";
                                $res_sql=mysql_query($sql_listar,$link);
                                while ($row=mysql_fetch_array($res_sql)){
                                        echo utf8_encode($row['transporte']).":  ";
                                        echo utf8_encode($row['descripcion'])."<br>";
                                    }               
                      ?>
                                     
         </div>
