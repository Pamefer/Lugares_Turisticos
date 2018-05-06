<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lugares Turìsticos</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
     
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

    <style>
        .ibody{
            width: 600px;
            margin: 0 auto;
            padding: 0px 0 0 0px;
            width: 600px;
            -webkit-border-radius:8px;
            -moz-border-radius:8px;
            padding-bottom: 10px;
            color:white;
        }
        .jumbotron{
            border-radius: 8px 8px 0px 0px;
            padding: 5px 0 0 5px;
            -webkit-border-radius:8px 8px 0px 0px;
            -moz-border-radius:8px 8px 0px 0px;
            background-color: white;
            margin-bottom: 20px; 
            
        }
        .jumbotron h1{
            font-size: 32px;
            text-align: center;
        }
        .izquierda {
        float: left;
        clear: left;
        }
 
        .Derecha {
         float: right;
         clear: right;
        }
        
        ul {
             list-style: none;
        }
         li.izquierda ,  li.Derecha{
            display: inline-block;
            margin: 0.5em 0;
         padding: 0.5em;
          width: 46%;
        }
        .izquierda2{
            display: inline-table;
        }

        #hotelname{
            width: 93%;
            float: center;
            padding: 17px;
            margin-left: 11px;


        }

        .checkbox-inline{
            
            padding: 20px;
            margin-right: 30px;
            vertical-align: baseline;
            display: inline-block;
        }
    
        input[type=submit] {
            padding:5px 15px; 
            background:#6755E3; border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            width: 10em; 
            margin: 32px 20px 0 130px;

        }

    </style>

<?php 

            $regionprovincia_status = 'unchecked';
            $ciudad_status = 'unchecked';

                if (isset($_POST['enviar']) && isset($_POST['lugar'])) {

                    $selected_radio = $_POST['lugar'];    //variable radio 
                           //variable categoria combobox
    
                    if ($selected_radio == 'regionprovincia') {
                        $regionprovincia_status = 'checked';
                        print $selected_radio.'<br>';
                        $comboprov= $_POST['select1'];  //variable provincia combobox
                        print  $comboprov;
                     }
                    else if ($selected_radio == 'ciudad') {
                        $ciudad_status = 'checked';
                        print $selected_radio.'<br>';
                        $combociudad= $_POST['select2'];   //variable ciudad combobox
                        print  $combociudad;
                    }
                }
                if (isset($_POST['enviar']) && isset($_POST['select3'])) {
                    $comida= $_POST['select3']; 
                    print $comida;
                }
                if (isset($_POST['enviar']) && isset($_POST['chk'])) {  
                $arreglo=$_POST['chk'];
                $count = count($arreglo);
                    for ($j = 0; $j < $count; $j++) {
                        print($arreglo[$j].'<br><br>');     //variable servicios checkbox

                    }
                }
                 if (isset($_POST['enviar']) && isset($_POST['nomRestaurante'])) {
                    $nomHotel=$_POST['nomRestaurante'];
                    print $nomHotel;
                 }

             ?>


<body class="homepage" style="background: url('images/services/fondore.jpg') top left; background-size: cover;">

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

<div class="ibody">
    <div class="center wow fadeInDown">
                <h2>RESTAURANTES</h2>
       <p class="lead">Encuentra un restaurante según tus preferencias</p>
     </div>

     

    <form id="checkboxes" method="POST"  action="busRestaurantes.php">
        <ul>
            <li>
                <div>
                <span>
                    <label style="padding-left: 18px;">NOMBRE RESTAURANTE</label>
                      <input  name="nomRestaurante" id="nomRestaurante" type="text" class="form-control" placeholder="Text input">
                </span>
                 <span>
                <br><br>
                <label><font style="color:#838282; font-family:'pill_gothic_600mg_rgbold', Arial, san serif; padding-left: 25px;">Selecciona el tipo de búsqueda geográfica que quieres:</font></label><br>
    
                </span>
            </li>



            <li class="izquierda">
                <div>
               
                <span >
                <div class="radio">
                 <label>
                    PROVINCIA
                </label>
                    <?php
                    extract($_POST);
                    include("conect.php");
                    //cadena de conexion al mysql
                    $sql_listar="select * from  regionprovincia where codPadreRp!=0";
                    $res_sql=mysql_query($sql_listar,$link);
        
                    echo "<select class='form-control' name='select1' action='opcion-info.php' method='post'>";
                    echo "<option></option>";
                    while ($row=mysql_fetch_array($res_sql)){
                    echo "<option value='".$row['codRp']."'>".(utf8_encode($row['nombreRp']))."</option>";
                    }
                    echo "</select>";   
                    ?>

                </div>
                </span>

                <span >
                <div class="radio">
                    <label>
                    CIUDAD
                    </label>
                     <?php
                    extract($_POST);
                    include("conect.php");
                    //cadena de conexion al mysql
                    $sql_listar="select * from ciudad  ";
                    $res_sql=mysql_query($sql_listar,$link);
        
                    echo "<select class='form-control' name='select2'>";
                    echo "<option></option>";
                    while ($row=mysql_fetch_array($res_sql)){
                    echo "<option value='".$row['codCiudad']."'>".(utf8_encode($row['nombreCiudad']))."</option>";
                     }
                    echo "</select>";   
                    ?>
                 </div>
             </span>
            </li>

            <li class="Derecha">
                <div>
                <span >
                <label>
                    TIPO DE COMIDA
                 </label>
                    <?php
                    extract($_POST);
                    include("conect.php");
                    //cadena de conexion al mysql
                    $sql_listar="select * from tipocomida";
                    $res_sql=mysql_query($sql_listar,$link);
        
                    echo "<select class='form-control' name='select3'>";
                    echo "<option><option/>";
                    while ($row=mysql_fetch_array($res_sql)){
                        echo "<option value='".$row['codTipoComida']."'>".(utf8_encode($row['nombreComida']))."</option>";
                     }
                    echo "</select>";   
                    ?>
                </span>
                </div>
            </li>

              <li >
                <br><br><input  value="BUSCAR" name="enviar" class="btn btn-primary"  type="submit"/>
             </li>


            </div><br><br><br><br><br><br>
        </ul>
    </form>

    
    <div class="modal fade" id="hoteles" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form  method="post" name="fhoteles" action="guardar-hoteles.php" class="form-horizontal" role="form">
                    <div class="modal-header" id="jumbo" >
                        <h4>HOTEL<h4>
                    </div>
                </form>
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