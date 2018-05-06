<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portal Ecuador</title>
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
     <style type="text/css">
    #subm>li:hover{
        background:#C52D2F;
    }

    #jumbo h4{
            font-size: 25px;
            text-align: center;
            margin: 4px 0 4px 0;
        }
    #izq{
        float: left;
         margin: 0 4px 0 5px;
        
    }

     #medio {
        float: left;
        margin: 0 auto;
    }
   
    #dere{
         float: right;
         margin: 0 5px 0 4px;

    }
    #tres{
        display: inline-block;
        }

    #izq2{
        float: left;
        margin: 12px 100px 12px 0;
        padding: 10px 10px 0 20px; 

          
    }
    #Conocido{
        margin-bottom: 14px;
        margin-left: 50px;
    }
    #dere2{
        float: right;
       margin: 12px 50px 12px 0;
        padding: 10px 10px 0 20px; 
    }
    #dos{
        display: inline-block;
        padding-bottom: 0px;
        margin-bottom: 0px;
          
    }
    #checks{
        margin-top: 0px;
        padding-top: 0px;
        
    }
    #coor{
        display: inline-block;
    }
   
    </style>
    <script type="text/javascript">
<!--
function mostrarReferencia(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.fhoteles.Conocido[0].checked == true ) {
//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('Simple').style.display='block';
//por el contrario, si no esta seleccionada
} 

if(document.fhoteles.Conocido[1].checked == true ) {
//oculta el div con id 'desdeotro'
document.getElementById('Doble').style.display='block';
}

if(document.fhoteles.Conocido[2].checked == true ) {
//oculta el div con id 'desdeotro'
document.getElementById('Suite').style.display='block';
}


}
-->
</script>
</head><!--/head-->
<body style="background: url('images/services/bg_services.png'); background-size: cover; ">

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
                        <li><a href="user-formulario.php">Formulario</a></li>
                        <li><a href="cerrarsesion.php">Cerrar Sesión</a></li>                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->


    <section id="portfolio" >
    	<div style='text-align: justify; margin: 0px 80px 0 80px;'>
		<?php   
	extract($_POST);
	include("conect.php");
	//cadena de conexion al mysql


	 $sql_listar="select *
                 from hoteles";
     
	$res_sql=mysql_query($sql_listar,$link);
	echo "<table  cellspacig=1  align=center border='3' width='50%'  style='color:#ffdbee;'>";
	echo "<thead>";
	echo "<tr >";
        echo "<th style='padding:1px 0 1px 22px; '>Id</th>";
		echo "<th style='padding:1px 0 1px 22px; '>Nombre de Hotel</th>";
		echo "<th style='padding:1px 0 1px 22px; '>Borrar</th>";
		echo "<th style='padding:1px 0 1px 22px; '>Actualizar</th>";
	echo "</tr>";
	echo "</thead>";
	while ($row=mysql_fetch_array($res_sql)){
		echo "<tr>";

            echo "<td style='padding:1px 0 1px 22px; '>".$row['codHotel']."</td>";
			echo "<td style='padding:1px 0 1px 22px; '>".(utf8_encode($row['nombreHotel']))."</td>";
			echo "<td style='padding:1px 0 1px 22px; ' id='borrar'><a href='borrarhotel.php?id=".$row['codHotel']."'>Borrar</a></td>";
            echo "<td style='padding:1px 0 1px 22px; ' id='actualizar'><a href='actualizar-hoteles.php?id=".$row['codHotel']."'>Actualizar</a></td>";
		echo "</tr>";

	}
echo "</table";
	
?>
		</div>
	</section>




    
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