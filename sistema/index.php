<?php

$alert = '';
session_start();
if(!empty($_SESSION['active'])){
    //si existe sesion activa pues entonces se redireciona al mimsmo sistema.
    header("location: sistema/sistema.php");
}else{
if (!empty($_POST)) {
    
    if (empty($_POST['usuario']) || empty($_POST['clave'])) {
        $alert = "ingrese su usuario y su clave";
    } else {
        require_once  'DBUsuariosRoles.php';
        $user = $_POST['usuario'];
        $pass = $_POST['clave'];

        $query = mysqli_query($conection, "SELECT * FROM usuarios WHERE usuario = '$user' AND clave = '$pass'");
        $result = mysqli_num_rows($query);

        if ($result > 0) {
            $data = mysqli_fetch_array($query);
            $_SESSION['active'] = true; //guardamos un inicio de sesion-
            $_SESSION['idUser'] = $data['idusuario'];
            $_SESSION['nombre'] = $data['nombre'];
            $_SESSION['email'] = $data['correo'];
            $_SESSION['user'] = $data['usuario'];
            $_SESSION['rol']= $data['rol'];

            header("location: sistema/sistema.php");
        }else{
            $alert = "el usuario o su clave es incorrecto.";
            session_destroy();
        }
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/jc/main.js"></script>
    <title> Login y Registro - Vaytesa </title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>
    <main>
        </div>
        <!-- Formulario de login y regristro-->
        <div class="contenedor__login-register">
            <!--LOGIN-->
            <form action="" method="POST" class="formulario__login">
                <h2> Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electronico" name="usuario" ><br>
                <input type="password" placeholder="Contraseña" name="clave" ><br>
                <div class="alert"><?php echo isset($alert) ? $alert : ''; ?> </div>
                <button>Entrar</button>
            </form>
            <!--registro-->
        </div>
        </div>
    </main>
</body>