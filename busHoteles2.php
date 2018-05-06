
 <?php 
/*extract($_POST);
include("conect.php");
	
	//exit();
	$sql='';
    $val='';
	if($select1!=null){
		$sqltablas='regionprovincia p, ciudad c, hoteles h';
		$sql.=' and p.codRp='.$select1 .' and p.codRp=c.codRp and c.codCiudad=h.codCiudad';
	}
	if ($categoria!=NULL){
		$sql.=' and h.calificacion='.$categoria;
	}

    $arreglos=$_POST['chk'];
    echo $count = count($arreglos);
         
    foreach ($arreglos as &$valor) {
        $val.="<> and  s.codServicios= ".$valor;
        $servicios.="s.codServicios= ".$valor;
        $sql.='and s.codServicios='.$valor.' and hs.codServicios=s.codServicios and hs.codHotel=h.codHotel';
    }
    $val = trim($val, "<>");
    echo $val; 

echo $sql1='select h.nombrehotel, h.direccion, h.calificacion from '.$sqltablas." where h.codHotel!='' ".$sql;
$res_sql=mysql_query($sql1,$link);
                                    
        while ($row=mysql_fetch_array($res_sql)){
            echo $nombre=$row['nombrehotel'];
            echo $direccion=$row['direccion'];
            echo $calificacion=$row['calificacion'];
            echo "<br>";
          }

	//select h.nombrehotel, h.direccion, h.calificacion from regionprovincias p, ciudad c, hoteles h where 
//h.codHotel!='' and c.codRp=17 and h.codCiudad=c.codCiudad
	/*$arreglo=$_POST['chk'];
    
   
    $count = count($arreglo);
    /*for ($j = 0; $j < $count; $j++) {
        print($arreglo[$j].'<br><br>');     //variable servicios checkbox
        $a=($arreglo[$j]);
        if($j==0){
         $sqltablas.=', hotelesservicios hs, servicios s';
        }
        $servicios.='s.codServicios='.$arreglo[$j] ;
            $sql.='and s.codServicios='.$a.' and hs.codServicios=s.codServicios 
        and hs.codHotel=h.codHotel';
      }*/
      /*for ($i = 0; $i < $count; $i++) {
        $ser.='hola '.$arreglo[$i];
      }
      echo $ser;*/




    /*for ($j = 0; $j < $count; $j++) {
         print($arreglo[$j].'<br><br>');     //variable servicios checkbox
         //echo $j;
          $a=($arreglo[$j]);
         //if($arreglo[$j]!=null){
         	if($j==0){
         		
         	 $sqltablas.=', hotelesservicios hs, servicios s';

         	}
         	$servicios.='s.codServicios='.$arreglo[$j] ;
		  echo $sql.='and s.codServicios='.$a.' and hs.codServicios=s.codServicios and hs.codHotel=h.codHotel';
			//}
      }
      echo $servicios;*/	
//SELECT h.nombreHotel, s.servicios FROM hotelesservicios hs, hoteles h, servicios s
//WHERE s.codServicios=8 and hs.codServicios=s.codServicios and hs.codHotel=h.codHotel
		
//select h.nombrehotel, h.direccion, h.calificacion from regionprovincias p, ciudad c, hoteles h where 
//h.codHotel!='' and c.codRp=17 and h.codCiudad=c.codCiudad 
	

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
                    $val='';
                    $sql='';
                    $servicios='';
                       
                        $sqltablas='regionprovincia p, ciudad c, hoteles h, hotelesservicios hs';
                        if($select1!=null){
                            $sql.=' and p.codRp='.$select1 .' and p.codRp=c.codRp and c.codCiudad=h.codCiudad';
                        }
                        if ($categoria!=null){
                            $sql.=' and h.calificacion='.$categoria ;
                        }
                        if($select2!=null){
                            $sql.=' and c.codCiudad='.$select2 .' and c.codCiudad=h.codCiudad';
                        }
                        
                        if(isset($chk)){
                        $arreglos=$_POST['chk'];
                        $count = count($arreglos);

                        $i=1;
                          $sql2='';   
                          $sql3='';   
                        foreach ($arreglos as &$valor) {
                            $sql2.=" and hs".$i.".codServicios=".$valor;
                            $sql2= trim($sql2, "</input");
                            $sql3.=" and hs".$i.".codHotel=h.codHotel";
                            $sqltablas.=", hotelesservicios hs".$i;
                            $i=$i+1;
                          }
                            //$sql2= trim($sql2,"</input <>");
                            $sql.=$sql3;
                            $sql.=$sql2;
                            }
                            
                     
                        $sql1='select distinct h.*, c.nombreCiudad from '.$sqltablas." where h.codHotel!='' ".$sql.' and c.codCiudad=h.codCiudad';
                        $res_sql=mysql_query($sql1,$link);
                                     while ($row=mysql_fetch_array($res_sql)){
                                     $nombre=$row['nombreHotel'];
                                     $direccion=$row['direccion'];
                                      $calificacion=$row['calificacion'];
                                      $ciudad=$row['nombreCiudad'];
                                      "<br>";
                                        echo "<div class='portfolio-item apps col-xs-12 col-sm-4 col-md-3'>";
                                       echo "<div class='recent-work-wrap'>";
                                       echo "<img class='img-responsive'  src='images/imgbase/hotel.jpg'/>";
                                       echo "<div class='overlay'>";
                                       echo "<div class='recent-work-inner'>";
                                       echo "<li><h3><a href='#restaurantes' data-toggle='modal'?codlugar=".$row['codHotel']."'>".(utf8_encode($row['nombreHotel']))."<span class='pull-right'></span></a></h3></li>";
                                       echo"<a class='preview' rel='prettyPhoto'>".(utf8_encode($direccion))."<span class='pull-right'></span></a><br>";
                                echo"<a class='preview' rel='prettyPhoto'>".(utf8_encode($ciudad))."<span class='pull-right'></span></a><br>";
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
