<?php
    //solicitamos la conexion a la base de datos.
    include 'php/c_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    //$apellido_paterno  

    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena) 
              VALUES ('$nombre_completo','$correo','$usuario','$contrasena')";//aqui estamos pasando los datos de las variables input


$ejecutar = mysqli_query($conn, $query);





