<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lugares turisticos</title>
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
<body style="background: url('images/costa5.jpg') top left; background-size: cover;">

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
                        <li><a href="login.php">Iniciar Sesión</a></li> 
                        <li><a href="acercade.php">Acerca de</a></li>                      
                                               
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section id="error" class="container text-center">
        <div class="container cont cent" id="cursor">

                  <center><div class="tit"><h2 style="color: black; ">Inicio de sesión</h2>
                        <center><div class="Ingreso">
                        <table border="0" align="center" valign="middle">
                        <tr>
                        <td rowspan=2>
                        <form action="validar1.php" method="post">

                        <table border="0">

                        <tr><td><label style="font-size: 14pt; color: black;"><b>Usuario: </b></label></td>
                            <td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
                        <tr><td><label style="font-size: 14pt; color: black;"><b>Contraseña: </b></label></td>
                            <td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
                        <tr><td></td>
                            <td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
                            </tr></tr></table>
                        </form>
                <br>
                <!-- formulario registro -->

                <form method="post" action="registro.php">
                  <fieldset>
                    <legend  style="font-size: 18pt; color: black;"><b>Registro</b></legend>
                    <div class="form-group">
                      <label style="font-size: 14pt; color: black;"><b>Ingresa tu nombre</b></label>
                      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
                    </div>
                    <div class="form-group">
                      <label style="font-size: 14pt; color: black;"><b>Ingresa tu email</b></label>
                      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
                    </div>
                    <div class="form-group">
                      <label style="font-size: 14pt; color: black;"><b>Ingresa tu Password</b></label>
                      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
                    </div>
                    <div class="form-group">
                      <label style="font-size: 14pt; color: black;"><b>Repite tu contraseña</b></label>
                      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
                    </div>
                      
                    </div>
                   
                    <input  class="btn btn-primary" type="submit" name="submit" value="Registrarse"/>

                  </fieldset>
                </form>
                </div>
        <?php
                if(isset($_POST['submit'])){
                    require("registro.php");
                }
            ?>
<!--Fin formulario registro -->

        </td>
        </tr>
        </table>
        </div></center></div></center>
        </div>

    </section><!--/#error-->

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
        