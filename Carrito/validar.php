
<?php
$usuario= $_GET['txtUsuario'];
$password= $_GET['txtPassword'];


$sql="SELECT * FROM `usuarios` WHERE `usuario` LIKE '$usuario' AND `contraseña` LIKE '$password'";

?>

