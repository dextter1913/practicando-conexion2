<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prcaticando conexion 2</title>
</head>
<body>
    <center>
    <h1>Practicando conexion 2</h1><br><br>
    <form action="index.php" method="post">
    <label for="id">ID:</label>
    <input type="text" name="id" id="id">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="apellido">
    <label for="telefono">Telefono:</label>
    <input type="text" name="telefono" id="telefono">
    <input type="submit" value="Registrar" name="btnregistrar">
    </form>
    </center>
    <?php 
    if (isset($_POST['btnregistrar'])) {
        $_id = $_POST['id'];
        $_nombre = $_POST['nombre'];
        $_apellido = $_POST['apelido'];
        $_telefono = $_POST['telefono'];

        include("./clases/open_conexion.php");

        $conexion->query("INSERT INTO $taba(id,nombre,apellido,telefono) VALUES('$_id','$_nombre','$_apellido','$_telefono')");

        include("./clases/close_conexion.php")
    }
    ?>
</body>
</html>