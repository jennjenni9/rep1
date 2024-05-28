<?php
session_start();
//$vendedor=$_SESSION["vendedor"];
echo $vendedor="tania";
include_once("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Venta</h1>
        <hr>
        <form action="AltaVenta.php" method="post">
            <table>
                <tr>
                    <th>Vendedor</th>
                    <th><input type="text" name="txtVend" value="<?php echo $vendedor;?>"></th>
                </tr>
                <tr>
                    <th>Sucursal</th>
                    <th> <select name="txtSuc">
                        
                    <?php 
                    $sql = "SELECT * FROM `datossuc`";
                    $res = $conexion ->query($sql);
                    while ($fila=$res->fetch_assoc()) {
                        $idS= $fila['id_Suc'];
                        $nomS= $fila['nombreS'];
                        echo"<option value='$idS'>$nomS</option>";
                    }
                    ?></select></th>
                </tr>
                <tr>
                    <th>Empresa</th>
                    <th><select name="txtEmp">
                        
                        <?php 
                        $sql = "SELECT * FROM `datosempresa`";
                        $res = $conexion ->query($sql);
                        while ($fila=$res->fetch_assoc()) {
                            $rfc= $fila['rfc'];
                            $nom= $fila['nombre'];
                            echo"<option value='$rfc'>$nom</option>";
                        }
                        ?></select></th>
                </tr>
                <tr>
                    <th>Cliente</th>
                    <th><select name="txtCli">
                        
                        <?php 
                        $sql = "SELECT * FROM `cliente`";
                        $res = $conexion ->query($sql);
                        while ($fila=$res->fetch_assoc()) {
                            $idC= $fila['id_Cli'];
                            $nomC= $fila['nombreC'];
                            echo"<option value='$idC'>$nomC</option>";
                        }
                        ?></select></th>
                </tr>
                
                <tr>
                    <th><input type="reset" ></th>
                    <th><input type="submit" ></th>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>