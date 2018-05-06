<?php
    extract($_GET);
    include("conect.php");
    $user=$_GET['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lugares Turísticos</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
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

<body class="homepage">
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                <div style="color:white">
                    <?php
                        echo "Bienvenido/a  ".$user;
                    ?>
                    </div>
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
                        <li class="active"> <?php
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
                                        //echo "<li><a href='dondeir2.php?user=$user'></a></li>";
                                        //echo "<input type='hidden' name='user' value='<?php echo $user;;
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

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/sierra.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">REGIÓN SIERRA</h1>
                                    <h2 class="animation animated-item-2">La Región Sierra goza de paisajes increíbles, en su cordillera se puede gozar de volcanes, bosques increíbles, además su gente es muy amigable.</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/costa5.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">REGIÓN COSTA</h1>
                                    <h2 class="animation animated-item-2">Esta Región se caracteriza por su clima que por lo general es cálido, además por sus playas que sin lugar a dudas son únicas para cada viajero que llega a ellas.</h2>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/oriente.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">REGION AMAZÓNICA</h1>
                                    <h2 class="animation animated-item-2">Sus selvas te dejarán encantado,la amazonía u oriente contiene una diversidad de fauna y flora que es el lugar perfecto para los amantes de la naturaleza</h2>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div><!--/.item--><div class="item" style="background-image: url(images/slider/galapagos.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">GALÁPAGOS</h1>
                                    <h2 class="animation animated-item-2">La abundante fauna, tanto marina como terrestre, atrae al turismo ecológico a las ecuatorianas islas Galápagos.</h2>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                
                <h2>¿Porqué visitar Ecuador?</h2>
                <p class="lead">El Ecuador ofrece una gran diversidad de recursos en 4 regiones diferenciadas: Galápagos, Costa, Andes y Amazonía; regiones que invitan a vivir experiencias únicas</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Gente Amable</h2>
                            <h3>Los ecuatorianos son naturalmente amables y serviciales.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>País Megadiverso</h2>
                            <h3>Es el país más megadiverso por kilómetro cuadrado</h3>
                        </div>
                    </div><!--/.col-md-4-->


                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart"></i>
                            <h2>Pequeño Tamaño</h2>
                            <h3>Es fácil explorar toda esa diversidad en un corto período de tiempo</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>SOBRE ECUADOR</h2>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/orqui.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Orquídeas</a> </h3>
                                <p>Muestra de la exhuberante vegetación de nuestras tierras</p>
                                <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
                 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/yasu.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Yasuní</a></h3>
                                <p>Lugar en donde la biodiversidad florece</p>
                                <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/comida.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gastronomía</a></h3>
                                <p>Platos exquisitos y muy variados para todos los gustos</p>
                                <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/choco.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Cacao</a></h3>
                                <p>Ecuador produce el mejor cacao del mundo</p>
                                <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/images.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Sombreros de paja toquilla</a></h3>
                                <p>Muy famosos a nivel mundial, son exportados desde Manabí</p>
                                <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/condor.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Cóndor</a></h3>
                                <p>Ave majestuosa de los Andes</p>
                                <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/amala.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Ama la vida</a></h3>
                                <p>Lema con el cual se impulsa el turismo en el Ecuador</p>
                                <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/surf.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Surf</a></h3>
                                <p>Puedes disfrutar del surf en todas sus playas, en especial en las de Montañita</p>
                                <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Reconocimientos</h2>
                <p class="lead">Los distintos reconocimientos que ha tenido nuestro país han sido tales como: 'The Ultimate Bucket List Trip' y 'South America's Leading Airport 2014'</p>
            </div>    

            <div class="partners" style="margin:0 20px 0 310px">
                <ul>
                    
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/premio.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/premio2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/premio.png"></a></li>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->

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