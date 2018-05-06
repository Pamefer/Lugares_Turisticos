
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portfolio | Corlate</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
        <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                    </div>
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
                                <form role="form" action="buscador.php" method="POST">
                                    <input name="buscador" class="search-form" autocomplete="off" placeholder="Search">
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
                        <li class="active"><a href="index.php">Inicio</a></li>
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
                                        echo "<li><a href='dondeir1.php?codRp=".$row['codRp']."'><font style='text-transform: none;'>".(utf8_encode($row['nombreRp']))."</font></a></li>";
                                    }
                                ?>
                            </ul>
                        </li>
                        <li><a href="hoteles.php">Hoteles</a></li>
                        <li><a href="restaurantes.php">Restaurantes</a></li>
                        <li><a href="login.php">Iniciar Sesión</a></li>                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->


    <section id="portfolio">
        <div class="container">
            <div class="center">
            <h1><font style="color:black"></font></h1>
           </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">Todas</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Naturaleza</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Cultura</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Playas</a></li>
            </ul><!--/#portfolio-filter-->

      
                     

            <div class="row">
                <div class="portfolio-items">
                    
                      <?php
                    extract($_POST);
                    include("conect.php");
                      $aux=0;

                     $buscador=utf8_decode($_POST['buscador']);

                     $sql_insertar1="select distinct f.foto, l.nombreLugar, l.codlugar
                                   from lugarturistico l, fotos f, tipoatractivo ta, lugartipo lt, actividades a, lugaractividad la
                                   where((a.nombreActividad like '%$buscador%' and a.codActividad=la.codActividad and l.codlugar=la.codlugar and l.codlugar=f.codlugar) 
                                   or (ta.nombreTl like '%$buscador%' and ta.codTipo=lt.codTipo and lt.codLugar=l.codLugar and l.codlugar=f.codlugar))
                                   and f.codAdmin=1";

                    $res_sql=mysql_query($sql_insertar1,$link);
                    while ($row=mysql_fetch_array($res_sql)){
                      echo $aux=1;
                      echo "<div class='portfolio-item col-md-3'>";
                      echo "<div class='recent-work-wrap'>";
                      echo "<img src='".$row['foto']."' height='219'/>";
                      echo "<div class='overlay'>";
                      echo "<div class='recent-work-inner'>";
                      echo "<li><h3><a href='lugar.php?codlugar=".$row['codlugar']."'>".(utf8_encode($row['nombreLugar']))."<span class='pull-right'></span></a></h3></li>";
                      echo"<a class='preview' rel='prettyPhoto'><i class='fa fa-eye'></i>View</a>";
                      echo "</div>"; 
                      echo "</div>"; 
                      echo "</div>"; 
                      echo "</div>";  
                    }

                    if($aux==0){
                     $sql_insertar="select distinct f.foto, l.nombreLugar, l.codlugar
                                   from lugarturistico l, fotos f, ciudad c
                                   where ((l.nombreLugar like '%$buscador%' and l.codlugar=f.codlugar)
                                   or (l.latitud like '%$buscador%' and l.codlugar=f.codlugar) 
                                   or (l.longitud like '%$buscador%' and l.codlugar=f.codlugar) 
                                   or (c.nombreCiudad like '%$buscador%' and l.codCiudad=c.codCiudad and l.codlugar=f.codlugar) 
                                   or (c.altura like '%$buscador%' and l.codCiudad=c.codCiudad and l.codlugar=f.codlugar) 
                                   or (c.clima like '%$buscador%' and l.codCiudad=c.codCiudad and l.codlugar=f.codlugar))
                                   and f.codAdmin=1";

                    $res_sql=mysql_query($sql_insertar,$link);
                    while ($row=mysql_fetch_array($res_sql)){
                      
                      echo "<div class='portfolio-item col-md-3'>";
                      echo "<div class='recent-work-wrap'>";
                      echo "<img src='".$row['foto']."' height='219'/>";
                      echo "<div class='overlay'>";
                      echo "<div class='recent-work-inner'>";
                      echo "<li><h3><a href='lugar.php?codlugar=".$row['codlugar']."'>".(utf8_encode($row['nombreLugar']))."<span class='pull-right'></span></a></h3></li>";
                      echo"<a class='preview' rel='prettyPhoto'><i class='fa fa-eye'></i>View</a>";
                      echo "</div>"; 
                      echo "</div>"; 
                      echo "</div>"; 
                      echo "</div>";  
                    }

                   }
                     
                    $sql1="select codHotel, nombreHotel, direccion, calificacion
                    from hoteles 
                    where nombreHotel like '%$buscador%' or direccion like '%$buscador%'";
                    $res_sql=mysql_query($sql1,$link);
                                     while ($row=mysql_fetch_array($res_sql)){
                                     $nombre=$row['nombreHotel'];
                                     $direccion=$row['direccion'];
                                      $calificacion=$row['calificacion'];
                                      "<br>";
                                        echo "<div class='portfolio-item col-md-3'>";
                                       echo "<div class='recent-work-wrap'>";
                                       echo "<img class='img-responsive'  src='images/imgbase/hotel.jpg'/>";
                                       echo "<div class='overlay'>";
                                       echo "<div class='recent-work-inner'>";
                                       echo "<li><h3><a href='#restaurantes' data-toggle='modal'?codlugar=".$row['codHotel']."'>".(utf8_encode($row['nombreHotel']))."<span class='pull-right'></span></a></h3></li>";
                                       echo"<a class='preview' rel='prettyPhoto'>".(utf8_encode($direccion))."<span class='pull-right'></span></a><br>";
                                       echo "</div>"; 
                                       echo "</div>"; 
                                       echo "</div>"; 
                                       echo "</div>"; 
                                     }  
                    $sql2="select distinct nombreRestau, codRestaurante, direccion 
                    from restaurantes 
                    where nombreRestau like '%$buscador%'";
                    $res_sql=mysql_query($sql2,$link);
                 while ($row=mysql_fetch_array($res_sql)){
                                $nombre=$row['nombreRestau'];
                                $direccion=$row['direccion'];
                                $codRestaurante=$row['codRestaurante'];
                                echo "<br>";
                                echo "<div class='portfolio-item apps col-xs-12 col-sm-4 col-md-3'>";
                                echo "<div class='recent-work-wrap'>";
                                echo "<img class='img-responsive'  src='images/imgbase/hotel.jpg'/>";
                                echo "<div class='overlay'>";
                                echo "<div class='recent-work-inner'>";
                                echo "<li><h3><a id='ver-restau' href='#restaurantes?codRestaurante=$codRestaurante' data-target='#restaurantes' data-toggle='modal''>".(utf8_encode($row['nombreRestau']))."<span class='pull-right'></span></a></h3></li>";
                                echo"<a class='preview' rel='prettyPhoto'>".(utf8_encode($direccion))."<span class='pull-right'></span></a><br>";
                                //echo"<a class='preview' rel='prettyPhoto'><i class='fa fa-eye'></i>View</a>";
                                //echo"<a class='preview' rel='prettyPhoto'><i class='fa fa-eye'></i>View</a>";
                                echo "</div>"; 
                                echo "</div>"; 
                                echo "</div>"; 
                                echo "</div>"; 
                }   

                    ?>
                     
 
            </div>
        </div>
    </section><!--/#portfolio-item-->
    
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Costa</h3>
                        <ul>
                            <li><a href="#">Machala</a></li>
                            <li><a href="#">Manabí</a></li>
                            <li><a href="#">Guayaquil</a></li>
                            <li><a href="#">Esmeraldas</a></li>
                            <li><a href="#">Atacames</a></li>
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
                            <li><a href="#">Baños</a></li>
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
                            <li><a href="#">Yantzaza</a></li>
                            <li><a href="#">Santiago de Méndez</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Galápagos</h3>
                        <ul>
                            <li><a href="#">Isla</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
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