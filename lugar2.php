<?php
    extract($_GET);
    include("conect.php");
    $user=$_GET['user'];
    $pag=2;
    //cadena de conexion al mysql
    $sql_insertar="select codLugar, nombreLugar from lugarturistico where codlugar='$codlugar'";
    $res_sql=mysql_query($sql_insertar,$link);
    while ($row=mysql_fetch_array($res_sql)){
        $idlugar=$row['codLugar'];
        $nombrelug=$row['nombreLugar'];
    }
    $sql_insertar1="select * from usuario where nombreUser='$user'";
    $res_sql1=mysql_query($sql_insertar1,$link);
    while ($row=mysql_fetch_array($res_sql1)){
         $mail=$row['nombreUser'];
         $pass=$row['contrasenia'];
         $iduser=$row['codUsuario'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Single | Corlate</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">     
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <style>
        #map-canvas{
            width: 400px;
            height: 400px;
        }
    </style>
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li> <?php
                                    extract($_POST);
                                    include("conect.php");
                                    echo "<a href='index2.php?user=$user'>Inicio</a></li>";
                             ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dónde ir?<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <?php
                                    extract($_POST);
                                    include("conect.php");
                                    
                                    $sql_listar="select r.codRp, r.nombreRp 
                                                from regionprovincia r
                                                where r.codPadreRp=0";
                                    $res_sql=mysql_query($sql_listar,$link);
                                    
                                    while ($row=mysql_fetch_array($res_sql)){
                                        echo "<li><a href='dondeir2.php?codRp=".$row['codRp']."&user=$user'><font style='text-transform: none;'>".(utf8_encode($row['nombreRp']))."</font></a></li>";
                                    }
                                ?>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Información<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                            <li> <?php
                                    extract($_POST);
                                    include("conect.php");
                                    echo "<a href='hoteles2.php?user=$user'>Hoteles</a></li>";
                             ?>
                        <li> <?php
                                    extract($_POST);
                                    include("conect.php");
                                    echo "<a href='restaurantes2.php?user=$user'>Restaurantes</a></li>";
                             ?> 
                            </ul>
                        </li> 
                        
                        <li> <?php
                                    extract($_POST);
                                    include("conect.php");
                                    echo "<a href='flickr.php?user=$user'>Galería</a></li>";
                             ?>
                        <li> <?php
                                    extract($_POST);
                                    include("conect.php");
                                    echo "<a href='cerrarsesion.php?user=$user'>Cerrar Sesión</a></li>";
                             ?>
                        <li> <?php
                                    extract($_POST);
                                    include("conect.php");
                                    echo "<a href='acercade2.php?user=$user'>Acerca de</a></li>";
                             ?>                               
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->


    <section id="blog" class="container">
        <div class="center">
            <h1><font style="color:black"><?php echo  utf8_encode($nombrelug) ?></font></h1>
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
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
                        </div><!--/.blog-item-->
                        
                        <div class="media reply_section">
                            <div class="pull-left post_reply text-center">
                                <a href="#"><img src="images/blog/boy.png" class="img-circle" alt="" /></a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
                                </ul>
                            </div>
                            <div class="media-body post_reply_content">
                                <h3>María Bersoza</h3>
                                <p class="lead">Lugar muy bonito y acogedor, recomiendo visitar el lugar</p>
                            </div>
                        </div> 
                        
                        <h1 id="comments_title">5 Comentarios</h1>
                        <div class="media comment_section">
                            <div class="pull-left post_comments">
                                <a href="#"><img src="images/blog/girl.png" class="img-circle" alt="" /></a>
                            </div>
                            <div class="media-body post_reply_comments">
                                <h3>Juan</h3>
                                <h4>Noviembre 9, 2013</h4>
                                <p>El lugar es bien chevere, recomiendo recorrer todo el lugar para disfrutar</p>
                                
                            </div>
                        </div> 
                        <div class="media comment_section">
                            <div class="pull-left post_comments">
                                <a href="#"><img src="images/blog/boy2.png" class="img-circle" alt="" /></a>
                            </div>
                            <div class="media-body post_reply_comments">
                                <h3>Juan</h3>
                                <h4>Noviembre 9, 2013</h4>
                                <p>El lugar es bien chevere, recomiendo recorrer todo el lugar para disfrutar</p>
                                
                            </div>
                        </div> 
                        <div class="media comment_section">
                            <div class="pull-left post_comments">
                                <a href="#"><img src="images/blog/boy3.png" class="img-circle" alt="" /></a>
                            </div>
                            <div class="media-body post_reply_comments">
                                <h3>Juan</h3>
                                <h4>Noviembre 9, 2013</h4>
                                <p>El lugar es bien chevere, recomiendo recorrer todo el lugar para disfrutar</p>
                                
                            </div>
                        </div>
                        
                         
                       

                            
                                <?php
                                
                                 
                                 
                                $sql="select * from comentarios c, usuario u WHERE c.codlugar='$codlugar' and c.codUsuario=u.codUsuario";
                                $res_sql=mysql_query($sql,$link);
                                while($f=mysql_fetch_array($res_sql)){
                                       echo "<div class='media comment_section'>";
                                      echo "<div class='pull-left post_comments'>";
                                      echo "<a href='#'><img src='images/blog/avatar3.png' class='img-circle' alt='' /></a>";
                                       echo "</div>";
                                      echo "<div class='media-body post_reply_comments'>";
                                      echo "<h3>".$comen=$f['nombreUser']."</h3><br>";
                                      echo $iduser=$f['descripcion'];
                                      
                                    echo "</div>";
                             echo "</div>";
                                      
                                    }
                            
                         
                               ?>
                           
                       
                    <div id="contact-page clearfix">
                        <div class="status alert alert-success" style="display: none"></div>
                            <div class="message_heading">
                                <h4>Para hacer comentarios ingresa aquí:</h4>
                                <p>Llena los campos (*)</p>
                            </div> 

                                        
                            <form action="validar.php" method="post">
                            <table border="0">
                            
                            <input type="hidden" name="idlugar" value="<?php echo $idlugar;?>">
                            <input type="hidden" name="mail" value="<?php echo $mail;?>">
                            <input type="hidden" name="pass" value="<?php echo $pass;?>">
                            <input type="hidden" name="pag" value="<?php echo $pag;?>">

                            <tr><td><label style="font-size: 14pt; color: black;"><b>     Comentario: </b></label></td>
                             <td ><textarea name="message" style="border-radius:15px;" rows="8" cols="40"></textarea></td></tr>
                            
                            <li><a href='validar.php?codlugar="$idlugar"'><tr><td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
                                </tr></tr></a></li></table>
                            </form>

                            
                             
                    </div><!--/#contact-page-->
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    
    				
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
                        echo "<table width='90%' cellpadding='6' align=center  background=#9966CC>";
  
                        
                        while ($row=mysql_fetch_array($res_sql)){
                                echo "<tr  >";
                                    echo "<th  > Nombre Lugar: </th>"."<td >".(utf8_encode($row['nombrelugar']))."</td>";
                                echo "</tr >";
                                echo "<tr >";
                                    echo "<th> Latitud:</th>"."<td>". $row['latitud']."</td>";
                                echo "</tr >";
                                echo "<tr >";
                                    echo "<th>  Longitud:</th>"."<td >".  $row['longitud']."</td>";
                                echo "</tr >";
                                echo "<tr >";
                                     echo "<th>  Altura del Lugar:</th>"."<td >".  $row['altura']."</td>";
                                 echo "</tr >";
                                echo "<tr >";
                                    echo "<th>  Clima: </th>"."<td >".(utf8_encode($row['clima']))."</td>";
                                 echo "</tr >";
                                 echo "<tr >";
                                    echo "<th>  Superficie:</th>"."<td >".(utf8_encode($row['superficie']))."</td>";
                                 echo "</tr >";
                                echo "<tr >";
                                    echo "<th>  Nombre Ciudad: </th>"."<td >".(utf8_encode($row['nombreciudad']))."</td>";
                                 echo "</tr >";
                                echo "<tr >";
                                    echo "<th>  Tipo de Lugar: </th>"."<td >".(utf8_encode($row['nombreTl']))."</td>";
                                echo "</tr >";
                            }
                            echo "</table>";
                                    
                      ?>
                    </div>
                </div>                     
            </div><!--/.recent comments-->
                
                 <div class="widget tags">
                        <?php
                        extract($_POST);
                        include("conect.php");
                        //cadena de conexion al mysql
                        $sql_listar="Select latitud, longitud from lugarturistico where codLugar='$idlugar'";
                        $res_sql=mysql_query($sql_listar,$link);
                        
                        while ($row=mysql_fetch_array($res_sql)){
                            $sql_latitud=floatval($row['latitud']);
                            $sql_longitud=floatval($row['longitud']);
                             
                        }

                        ?>
                        <script type="text/javascript">
        var map;
        var service;
        var latitudL="<?php echo $sql_latitud; ?>" ;
       /* document.writeln(latitudL);*/
        var longitudL="<?php echo $sql_longitud; ?>" ;
      

        function handleSearchResults(results, status){
            console.log(results);
            for (var i = 0; i <results.length; i++) {
                var marker = new google.maps.Marker({
               
               
        });
                
            };

        }
        function performSearch(){
            var request={
                bounds:map.getBounds(),
               
            }
            service.search(request, handleSearchResults);
        }
///1

        function initialise(){

            console.log(location);
            var currentLocation= new google.maps.LatLng(latitudL,longitudL);
             
             var mapOptions = {
             center: currentLocation,
             zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map=new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

        var marker = new google.maps.Marker({
            position: currentLocation,
            map:map
        });

        service = new google.maps.places.PlacesService(map);
        google.maps.event.addListenerOnce(map,'bounds_changed',performSearch);

        $('#refresh').click(performSearch);

        //dibujar un circulo en el mapa
        var circleOptions = {
            strokeColor: "#0000FF",
            strokeOpacity: 0.8,
            strokeWeight: 1.5,
            fillColor: "#0000FF",
            fillOpacity: 0.35,
            map: map,
            center: currentLocation,
            radius: 300
        };
          var circle = new google.maps.Circle(circleOptions);
          //trafico
          var trafficLayer=new google.maps.TrafficLayer();
          $('#toggle_traffic').click(function(){
            if(trafficLayer.getMap()){
                trafficLayer.setMap(null);
            }else{
                trafficLayer.setMap(map);
            }
            });
        }

      $(document).ready(function()
    {
        navigator.geolocation.getCurrentPosition(initialise);

    });
    </script>


            <div id="map-canvas"></div>
                
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
            
    				
    		<div class="widget blog_gallery">
                <h3>Galería de Usuarios</h3>
                    <?php
                                
                                 
                                 
                                 $sql="select * from fotos WHERE codlugar='$codlugar'";
                                $res_sql=mysql_query($sql,$link);
                                while($f=mysql_fetch_array($res_sql)){
                                        $imagen=$f['foto'];
                                         echo "<div class='col-md-6'>";
                                        echo "<div class='recent-work-wrap'>";
                                       echo "<img src='$imagen' width='10' height='100'> ";    
                                        echo " <div class='overlay'>";
                                       echo "<div class='recent-work-inner'>";
                                       echo "<a class='preview' href='".$imagen."' rel='prettyPhoto'><i class='fa fa-eye'></i> View</a>";    
                                       echo "</div>";                           
                                       echo "</div>";                           
                                       echo "</div>";                           
                                       echo "</div>";                           
                                    }
                            
                                echo "<br>";
                                echo "<br>";
                                echo "<br>";
                               ?>
                        <form method="post" action="insertarfoto.php" enctype="multipart/form-data">
                        <input type="hidden" name="idlugar" value="<?php echo $idlugar;?>">
                        <input type="hidden" name="user" value="<?php echo $user;?>">
                        <br><br><label>Elige Imagen:</label>
                        <br/>
                        <input type="file" name="imagen"/>
                        <br/>
                        <input type="submit" value="Enviar"/>
                        <br/>
                    
                </form><br>
                    </div><!--/.blog_gallery-->
    					
    				
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->


    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Costa</h3>
                        <ul>
                            <li><a href="#">Machala</a></li>
                            <li><a href="#">Santa Elena</a></li>
                            <li><a href="#">Guayaquil</a></li>
                            <li><a href="#">Esmeraldas</a></li>
                            <li><a href="#">Quevedo</a></li>
                            <li><a href="#">Portoviejo</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Sierra</h3>
                        <ul>
                            <li><a href="#">Quito</a></li>
                            <li><a href="#">Cuenca</a></li>
                            <li><a href="#">Loja</a></li>
                            <li><a href="#">Ambato</a></li>
                            <li><a href="#">Ibarra</a></li>
                            <li><a href="#">Latacunga</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Oriente</h3>
                        <ul>
                            <li><a href="#">Macas</a></li>
                            <li><a href="#">Puyo</a></li>
                            <li><a href="#">Nueva Loja</a></li>
                            <li><a href="#">Zamora</a></li>
                            <li><a href="#">Tena</a></li>
                            <li><a href="#">Francisco de Orellana</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Galápagos</h3>
                        <ul>
                            <li><a href="#">Isabela</a></li>
                            <li><a href="#">San Cristóbal</a></li>
                            <li><a href="#">Santa Cruz</a></li>
                            <li><a href="#">Baltra</a></li>
                            <li><a href="#">Genovesa</a></li>
                            <li><a href="#">Santa Fe</a></li>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>