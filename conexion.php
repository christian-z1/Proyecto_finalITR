<?php
$hostname='localhost'; // no necesitas referenciar el puerto 
$database='appgps';
$username='root';
$password='';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "El sitio web está experimentado problemas";
}
?>