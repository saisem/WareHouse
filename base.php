<?php
    $conexion=mysqli_connect('localhost','root','','baseproyect2');
    $consulta="select  o.direccion , i.fecha , h.nroHabitacion , count(h.nroHabitacion) 
    from dim_cliente1 c, dim_hotel o, dim_ingcliente i, dim_habitacion  h, dataproblema1 p
    WHERE p.id_cliente1=c.id_cliente1 and p.id_hotel1=o.id_hotel1 and p.id_cliente1=i.id_ingClient1 and p.id_habitacion1=h.id_habitacion1 and o.direccion ='Cochabamba' and YEAR(i.fecha)=2018
    GROUP BY o.direccion
    having count(h.nroHabitacion)";
    $resultado=mysqli_query($conexion,$consulta);
?>