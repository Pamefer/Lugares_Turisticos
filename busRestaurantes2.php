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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Información<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                            <li><a href="hoteles.php"><font style='text-transform: none;'>Hoteles</font></a></li>
                            <li><a href="restaurantes.php"><font style='text-transform: none;'>Restaurantes</font></a></li>  
                            </ul>
                        </li> 
                        <li><a href="flickr.php">Galería</a></li>
                        <li><a href="cerrarsesion.php">Cerrar Sesión</a></li>                       
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
    <section id="portfolio">
        <div class="container">
            <div class="center">
            <h1><font style="color:black">Resultados de la Busqueda</font></h1>
           </div>
            <div class="row">
                <div class="portfolio-items">
                    
 <?php 
extract($_POST);
include("conect.php");
    $sqltablas='restaurantes r, regionprovincia p, ciudad c, restaurantetipoc rt, tipocomida t';
    $sql="";

    if($nomRestaurante!=null){
        
        $sql.=" and r.nombreRestau like '%$nomRestaurante%'";
    }
    
    if($select1!=null){
        $sql.=' and p.codRp='.$select1 .' and p.codRp=c.codRp and c.codCiudad=r.codCiudad';
    }

    if($select2!=null){
        $sql.=' and c.codCiudad='.$select2 .' and c.codCiudad=r.codCiudad';
        
    }
    if($select3!=null){
        $sql.=' and rt.codTipoComida='.$select3 .' and rt.codRestaurante=r.codRestaurante and rt.codTipoComida=t.codTipoComida';
    }
     
    $sql1='select distinct r.nombreRestau, r.codRestaurante, r.direccion, c.nombreCiudad, t.nombreComida from '.$sqltablas." where r.codRestaurante!='' ".$sql.' and c.codCiudad=r.codCiudad  and rt.codRestaurante=r.codRestaurante and rt.codTipoComida=t.codTipoComida';
    $res_sql=mysql_query($sql1,$link);
    $res_sql=mysql_query($sql1,$link);
                 while ($row=mysql_fetch_array($res_sql)){
                                $nombre=$row['nombreRestau'];
                                $direccion=$row['direccion'];
                                $codRestaurante=$row['codRestaurante'];
                                $ciudad=$row['nombreCiudad'];
                                $tipo=$row['nombreComida'];
                                echo "<br>";
                                echo "<div class='portfolio-item apps col-xs-12 col-sm-4 col-md-3'>";
                                echo "<div class='recent-work-wrap'>";
                                echo "<img class='img-responsive'  src='images/imgbase/hotel.jpg'/>";
                                echo "<div class='overlay'>";
                                echo "<div class='recent-work-inner'>";
                                echo "<li><h3><a id='ver-restau' href='#restaurantes?codRestaurante=$codRestaurante' data-target='#restaurantes' data-toggle='modal''>".(utf8_encode($row['nombreRestau']))."<span class='pull-right'></span></a></h3></li>";
                                echo"<a class='preview' rel='prettyPhoto'>".(utf8_encode($direccion))."<span class='pull-right'></span></a><br>";
                                echo"<a class='preview' rel='prettyPhoto'>".(utf8_encode($tipo))."<span class='pull-right'></span></a><br>";
                                echo"<a class='preview' rel='prettyPhoto'>".(utf8_encode($ciudad))."<span class='pull-right'></span></a><br>";
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
    
     <div class="modal fade" id="restaurantes" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form  method="post" name="restaurantes" class="form-horizontal" role="form">
                        <?php  echo $cod=$_POST['codRestaurante']?>
                    <div class="modal-header" id="jumbo" >
                        <h1><font style="color:black"><?php echo  utf8_encode($nombre) ?></font></h1>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="contact-name" class="col-sm-2 control-label" id="eti" >Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" id="hotelname" name="hotelname" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-email" class="col-sm-2 control-label" id="eti">Dirección</label>
                            <div class="col-sm-10">
                                <input  class="form-control" name="direccionh" >
                            </div>
                        </div>
                    <div id="tres">
                        <div id="izq" class="form-group">
                            <label for="contact-email" class="col-sm-2 control-label" id="eti">Teléfono</label>
                            <div >
                                <input   class="form-control" name="telefono" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
