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
<body style="background: url('images/services/hoteles3.jpg'); background-size:cover;">

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
                        <li><a href="listarlugar.php">Listar Lugar</a></li>
                        <li><a href="user-formulario.php">Formulario</a></li>                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->



<?php   
	extract($_GET);
	include("conect.php");
	//cadena de conexion al mysql

    $sql_actualizar="select h.codHotel, h.nombreHotel , h.direccion, h.telefono, h.calificacion, h.codCiudad, t.codHotel, t.codHabitacion, t.tarifa 
                     from hoteles h, hoteleshabitaciones t
                     where h.codHotel='$id' and h.codHotel=t.codHotel ";
    $res_sql=mysql_query($sql_actualizar,$link);
    while ($row=mysql_fetch_array($res_sql)){
        $cod=$row['codHotel'];
        $nombre=utf8_encode($row['nombreHotel']);
        $dir=utf8_encode($row['direccion']);
        $telf=$row['telefono'];
        $ciudad=$row['codCiudad'];
        $categoria=$row['calificacion'];
        $ciudad;

        
        if(isset($row['codHabitacion']) and $row['codHabitacion']=="1"){
            $habitacion1=$row['tarifa']; 
            $habitacion1."<br>";  
        }
         if($row['codHabitacion']=="2"){
            $habitacion2=$row['tarifa'];
             $habitacion2."<br>";  
   
        }
       
        if($row['codHabitacion'] =="3"  ){
            $habitacion3=$row['tarifa'];
            $habitacion3."<br>";  
  
        }

   
    }

 ?>

 
                <form  method="post" name="fhoteles" action="update-hoteles.php"  class="form-horizontal" role="form" style="width:45%; margin:0 auto;">
                    <input type="hidden" name="cod" value="<?php echo $cod;?>">
                    <input type="hidden" name="ciudad" value="<?php echo $ciudad;?>">
                    <input type="hidden" name="categoria" value="<?php echo $categoria;?>">
                     <input type="hidden" name="arreglo" value="<?php echo $arreglo;?>">



                    <div class="modal-header" id="jumbo" >
                        <h4>HOTEL<h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="contact-name" class="col-sm-2 control-label" id="eti" >Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" id="hotelname" name="hotelname" class="form-control" required value="<?php echo $nombre;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-email" class="col-sm-2 control-label" id="eti">Dirección</label>
                            <div class="col-sm-10">
                                <input  class="form-control" name="direccionh"  required value="<?php echo $dir;?>">
                            </div>
                        </div>
                    <div id="tres">
                        <div id="izq" class="form-group">
                            <label for="contact-email" class="col-sm-2 control-label" id="eti">Teléfono</label>
                            <div >
                                <input   class="form-control" name="telefono" value="<?php echo $telf;?>">
                            </div>
                        </div>
                        <div id="medio" class="form-group">
                            <label for="contact-email" class="col-sm-2 control-label" >Ciudad</label>
                            <div >
                                <?php
                                    extract($_POST);
                                    include("conect.php");
                                    //cadena de conexion al mysql
                                    $sql_listar="select * from ciudad  ";
                                    $res_sql=mysql_query($sql_listar,$link);
                                   
                                    echo "<select class='form-control' name='select2' style='font-size:12px;'>";
                                    echo "<option>--</option>";

                                    while ($row=mysql_fetch_array($res_sql)){
                                    echo "<option value=".$row['codCiudad'].">".(utf8_encode($row['nombreCiudad']))."</option>";

                                    }
                                     echo "</select>";

                                ?>
                        </div >
                        </div>
                        <div id="dere" class="form-group">
                            <label for="contact-email" class="col-sm-2 control-label">Categoría</label>
                            <div >
                                <select  class="form-control" name="select3">
                                  <option>--</option>
                                <option>1 estrella</option>
                                <option>2 estrellas</option>
                                <option>3 estrellas</option>
                                <option>4 estrellas</option>
                                <option>5 estrellas</option>
                            </select>
                        </div >
                        </div>        
                            <div id="izq2">
                            <label style="display:left;" id="eti">Tipo de habitaciones<br><br>

                            <input type="checkbox" name="Conocido" value="Google" id="Conocido" onclick="mostrarReferencia();" /> Simple<br>
                            <input type="checkbox" name="Conocido" value="Otros" id="Conocido" onclick="mostrarReferencia();" /> Doble<br>
                            <input type="checkbox" name="Conocido" value="doble" id="Conocido" onclick="mostrarReferencia();" /> Suite<br>
                           </div>

                            <div id="dere2"><br>
                            <label style="display:right;">Tarifa:<br>
                            
                            <div id="Simple" style="display:none;">
                            <input type="text" name="otro1" class="form-control" required value="<?php if(isset($habitacion1)){echo $habitacion1;}?>" />
                            </div>

                            <div id="Doble" style="display:none;">
                             <input type="text" name="otro2" class="form-control" required value="<?php if(isset($habitacion2)){echo $habitacion2;}?>" />
                            </div>

                            <div id="Suite" style="display:none;">
                             <input type="text" name="otro3" class="form-control" required value="<?php if(isset($habitacion3)){echo $habitacion3;}?>" />
                            </div>
                            </div>

                        </div>
                    
            
             <div class="form-group" id="checks" style="margin-top:0px;">
                     <label for="contact-email" class="col-sm-2 control-label" id="eti">Servicios</label><br>
                            <div class="col-sm-10" style="margin-left:20px;"><br>
                               <table width="100%" id="tableList" style="border:0px;" border="0" cellpadding="0" cellspacing="0"> 
                <?php 
                    extract($_POST);
                    include("conect.php");
                    //cadena de conexion al mysql
                    $sql_listar="select * from servicios  ";
                    $sql_listarser="select hs.codServicios from hotelesservicios hs, hoteles h 
                                    where hs.codHotel='$id' and hs.codHotel=h.codHotel";

                    $res_sql=mysql_query($sql_listar,$link);
                    $res_sql2=mysql_query($sql_listarser,$link);
                    $cont = 0 ;
                    $conta = 0 ;
                    $i=1; 
                     $arreglo[]=array();
                      while( $row=mysql_fetch_array($res_sql2)) {
                        $arreglo[$conta]=$row['codServicios'];                    
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
                    if(($row['codServicios']==$arreglo[$j]) AND ($ban==0)){
                        echo "checked";
                        $ban=$ban+1;
                    }
                }
                echo " style='padding-right: 50px;  padding-left: 20px; margin-left:40px; padding-bottom:10px;' name='chk2[]' id='Plazas' value=".(utf8_encode($row['codServicios']))."</input>";
                echo "</td>"; 
                echo "<td width='170' style='padding-left: 15px; padding-bottom:10px;' > ".(utf8_encode($row['servicios']))."</td> ";
                


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
                    <div class="modal-footer">
                         <button class="btn btn-primary">Guardar</button>
                    </div>
                    </div>
                </form>

                
                       


    
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