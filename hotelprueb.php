<?php 
include("conect.php");

    $sql1="select distinct h.* from regionprovincia p, ciudad c, hoteles h, hotelesservicios hs1, hotelesservicios hs2, hotelesservicios hs3 where h.codHotel!='' and hs1.codHotel=h.codHotel and hs2.codHotel=h.codHotel and hs3.codHotel=h.codHotel and hs1.codServicios=1 and hs2.codServicios=2 and hs3.codServicios=3";
    $res_sql=mysql_query($sql1,$link);
    while ($row=mysql_fetch_array($res_sql)){
            echo $nombre=$row['nombreHotel'];
            echo $direccion=$row['direccion'];
            echo $calificacion=$row['calificacion'];
            echo "rrrr";
   }
           
 ?>