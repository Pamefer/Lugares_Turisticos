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
                        <li><a href="user-formulario.php">Formulario</a></li>
                        <li><a href="cerrarsesion.php">Cerrar Sesión</a></li>                          
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->


<?php
    extract($_GET);
    include("conect.php");
    //cadena de conexion al mysql
    
    $sql_insertar="select r.codRestaurante, r.nombreRestau, r.direccion, c.codCiudad, r.codCiudad, c.nombreCiudad, rt.codTipoComida, rt.codTipoComida, t.codTipoComida, t.nombreComida
                 from restaurantes r, ciudad c, tipocomida t, restaurantetipoc rt
                 where r.codRestaurante='$id' and r.codCiudad=c.codCiudad and (rt.codRestaurante=r.codRestaurante and rt.codTipoComida=t.codTipoComida)";
     
   
    $res_sql=mysql_query($sql_insertar,$link);
    while ($row=mysql_fetch_array($res_sql)){
        $cod=$row['codRestaurante'];
        $nombre=(utf8_encode($row['nombreRestau']));
        $dir=$row['direccion'];
        $ciudad=$row['codCiudad'];
        $nomciu=$row['nombreCiudad'];
        $nomtc=$row['nombreComida'];
        
            
    }
?>

 
              
                <form   method="post" name="frestaurantes"  action="update-restaurantes.php"  class="form-horizontal" role="form" style="width:45%; margin:0 auto;" >
                <input type="hidden" name="cod" value="<?php echo $cod;?>">
                <input type="hidden" name="ciudad" value="<?php echo $ciudad;?>">
                    <div class="modal-header" id="jumbo" >
                        <h4>RESTAURANTE<h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label form="contact-name" class="col-sm-2 control-label" id="eti" >Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" id="lugarname" name="nombre" class="form-control"  required value="<?php echo $nombre;?>"><br>
                            </div>
                            <label form="contact-name" class="col-sm-2 control-label" id="eti" >Direccion</label>
                            <div class="col-sm-10">
                                <input type="text" id="lugarname" name="dir" class="form-control"  required value="<?php echo $dir;?>"><br>
                            </div>
                            
                            <div id="medio" class="col-sm-10" style="margin-left:0">
                            <label for="contact-email" class="col-sm-2 control-label" >Ciudad</label>
                            <div class="col-sm-10">
                                <?php
                                    extract($_POST);
                                    include("conect.php");
                                    //cadena de conexion al mysql
                                    $sql_listar="select * from ciudad  ";
                                    $res_sql=mysql_query($sql_listar,$link);
        
                                    echo "<select class='form-control' name='select2'style='font-size:12px;'>";
                                    echo "<option>--</option>";
                                    while ($row=mysql_fetch_array($res_sql)){
                                    echo "<option value=".$row['codCiudad'].">".(utf8_encode($row['nombreCiudad']))."</option>";
                                    }
                                     echo "</select>";   
                                ?>
                        </div >
                        </div><br><br>
                           </div>
                           <div class="form-group" id="checks" style="margin-top:0px;">
                            <label for="contact-email" class="col-sm-2 control-label" id="eti">Tipo de Comida</label><br>
                            <div class="col-sm-10" style="margin-left:20px;"><br>
                               <table width="100%" id="tableList" style="border:0px;" border="0" cellpadding="0" cellspacing="0"> 
                <?php 
                    extract($_POST);
                    include("conect.php");
                    //cadena de conexion al mysql
                    $sql_listar="select * from tipocomida  ";
                    $sql_listarser="select rt.codTipoComida 
                                    from restaurantetipoc rt, restaurantes r 
                                    where rt.codRestaurante='$id' and rt.codRestaurante=r.codRestaurante";

                    $res_sql=mysql_query($sql_listar,$link);
                    $res_sql2=mysql_query($sql_listarser,$link);
                    $cont = 0 ;
                    $conta = 0 ;
                    $i=1; 
                     $arreglo[]=array();
                      while( $row=mysql_fetch_array($res_sql2)) {
                        $arreglo[$conta]=$row['codTipoComida'];                    
                         $conta=$conta+1;
                            arsort($arreglo);

                    }
    
                     

                     
                   
                    while( $row=mysql_fetch_array($res_sql)) { 
        if($cont%3 == 0) { 
            echo "<tr>";
        }
                $ban=0;
                echo "<td width='10px' > <input type='checkbox' ";
                for($j=0;$j<$conta;$j++){
                   // echo $arreglo[$j];
                    if(($row['codTipoComida']==$arreglo[$j]) AND ($ban==0)){
                        echo "checked";
                        $ban=$ban+1;
                    }
                }
                echo " style='padding-right: 50px;  padding-left: 20px; margin-left:40px; padding-bottom:10px;' name='chk2[]' id='Plazas' value=".(utf8_encode($row['codTipoComida']))."</input>";
                echo "</td>"; 
                echo "<td width='170' style='padding-left: 15px; padding-bottom:10px;' > ".(utf8_encode($row['nombreComida']))."</td> ";
                


        $cont++; 
        if($cont%3 == 0 && $cont!= 0 ) { 
            echo "<tr>";
        }
     }
        ////////

               



/////////

                    if($cont == 1 ){ 

                        echo "</tr>"; 
                    } 
                    ?> 
                    </table> 

                            </div>
                        </div>
                        </div>
                        
                         
                        
                         
                         
                    <div class="modal-footer">
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                        
                    
                </form>

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