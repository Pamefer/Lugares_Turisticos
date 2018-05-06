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
    <link rel="stylesheet" type="text/css" href="css/flic/bootstrap.css"/>
          <style >
               #imagenes img{
                    height: 150px; width: 150px; float: left;
                    -cursor: pointer;
                    -moz-border-radius:7px;
                    -webkit-border-radius:7px;
                    border-radius: 7px;
                    
               }
               #fondo{
                    background: rgba(0,0,0,.5); display: none;
                    position: fixed;
                    height: 100%; width: 100%;
                    top: 0; left: 0;
               }
               #imgAmpliada{
                    height: 300px; -moz-border-radius:15px;
                    -webkit-border-radius:15px;
                    border-radius: 15px;
               }
               #fondo div{
                    margin: 50px auto;
                    width: 400px;
               }
               #efecto{
                    display: none;
               }
          </style>
          <script src="scripts/jquery-2.1.3.js" type="text/javascript"></script>

<!--/head-->
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
    
     <body>
     	<section>
     		<div class="hero-unit">
     			<h1>Flicker</h1>
     			<blockquote>
     				<p>El concepto es el concepto</p>
     				<small>Airbag</small>
     			</blockquote>	
     			<div class="input-prepend">
     				<span class="add-on"><i class="icon-camera"></i></span>
     			<input id="busqueda" type="text"/>
     			</div>	
                    <p>
                         <a id="efecto" class="btn btn-primary">Resetear</a>
                    </p>	
     			<div id="imagenes" class="container-fluid">
     			</div>
     		</div>
               <div id="fondo">
                    <div>
                         <img src="" id="imgAmpliada"/>
                    </div>
               </div>
     	</section>
     <script>
     $(document).ready(function(){
          var _tags, iElementos=30;

          $('#busqueda').keyup(function(){
               console.log(this);
               _tags= $(this).val();  


               keyupTiempo=1000;
               keyupTiempofin=null;
               keyupTiempofin=setTimeout(function(){
                    clearTimeout(keyupTiempofin);
                    enviarAjax();},
               keyupTiempo);
               function enviarAjax(){
                    $.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?",{
                         tags:_tags,
                         tagmode:"any",
                         format:"json"
                    }, 
               function(data){
                    $.each(data.items, function(i,item){
                          $('<img/>').attr("src", item.media.m).prependTo("#imagenes");
                          $('img').click(function(){
                              $('#imgAmpliada').attr("src",$(this).attr('src'));
                              $('#fondo').fadeIn()
                    });
               });
                    $('#efecto').fadeIn;
          });            
          
          };
           $('#fondo').click(function(){
           $('#fondo').fadeOut();   
           });
           $('#efecto').click(function(){
                 $('#imagenes').slideUp('slow', function(){
                    $('#imagenes').text('');
                    $('#imagenes').show();
                    $('#efecto').fadeOut();
          });   

         });      
              

         });  
     });
     
     </script>
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


 </html>