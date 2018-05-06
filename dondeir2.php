<?php
    extract($_GET);
    include("conect.php");
    $user=$_GET['user'];
    //cadena de conexion al mysql
    $sql_insertar="select codRp, nombreRp from regionprovincia where codRp='$codRp'";
    $res_sql=mysql_query($sql_insertar,$link);
    while ($row=mysql_fetch_array($res_sql)){
        $idprov=$row['codRp'];
        $nombreRp=$row['nombreRp'];
    }
    
?>
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
    <section id="portfolio">
        <div class="container">
            <div class="center">
            <h1><font style="color:black"><?php echo  utf8_encode($nombreRp) ?></font></h1>
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
                    $sql_listar="select  f.foto, l.nombreLugar, l.codlugar
                    from fotos f, ciudad c, regionprovincia r, lugarturistico l
                    where r.codPadreRp='$idprov' AND r.codRp=c.codRp AND c.codCiudad=l.codCiudad AND l.codlugar=f.codlugar AND f.codAdmin=1";
                    $res_sql=mysql_query($sql_listar,$link);
                   
                   while ($row=mysql_fetch_array($res_sql)){
                       echo "<div class='portfolio-item col-md-3'>";
                      echo "<div class='recent-work-wrap'>";
                      echo "<img src='".$row['foto']."' height='200'/>";
                      echo "<div class='overlay'>";
                      echo "<div class='recent-work-inner'>";
                      echo "<li><h3><a href='lugar2.php?codlugar=".$row['codlugar']."&user=$user'>".(utf8_encode($row['nombreLugar']))."<span class='pull-right'></span></a></h3></li>";
                      
                      echo"<a class='preview' rel='prettyPhoto'><i class='fa fa-eye'></i>View</a>";
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