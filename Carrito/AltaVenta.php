<?php
session_start();
include_once("conexion.php");
$vend=$_POST['txtVend'];
$suc=$_POST['txtSuc'];
$emp=$_POST['txtEmp'];
$cli=$_POST['txtCli'];
$hoy = date("Y-m-d"); 
$sqlMax="SELECT max(`folio`)+1 as ultimo FROM `ticket` ";
$res = $conexion ->query($sqlMax);
$fila=$res->fetch_assoc();
$ultimo=$fila['ultimo'];
echo $sql="INSERT INTO `ticket` (`folio`, `cajero`, `fechaT`, `totalT`, `id_Suc`, `rfc`, `id_Cli`, `estado`) 
VALUES ('$ultimo', '$vend', '$hoy', '0', '$suc', '$emp', '$cli', 'Iniciado');";
?>