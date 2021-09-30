<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title> Login y Registro - Vaytesa </title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>

<main>

    <div class="contenedor__todo">

        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿ya tienes cuenta?</h3>
                <p>Iniciar sesion para entrar a la pagina.</p>
                <button id="btn__iniciar-seion"> Iniciar sesion</button>
            </div>

            <div class="caja__trasera-register">
                <h3> ¿Aún no tienes cuenta?</h3>
                <p>Registrate para que puedas iniciar sesión</p>
                <button id="btn__registrarse">Registarse</button>
            </div>
        </div>
        <!-- Formulario de login y regristro-->
        <div class="contenedor__login-register">
            <!--LOGIN-->
            <form action="" class="formulario__login">
                <h2> Iniciar Sesión</h2>
                <input type="text"  placeholder="Correo Electronico"><br>
                <input type="password" placeholder="Contraseña"><br>
                <button>Entrar</button>
            </form>
            <!--registro-->
            <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                <h2> registrarse</h2>
                <input type="text" placeholder="nombre completo" name="nombre_completo"><br>
                <input type="text" placeholder="correo electronico" name="correo"><br>
                <input type="text" placeholder="Nombre de usuario" name="usuario"><br>
                <input type="password" placeholder="contraseña" name="contrasena"><br>
                <button>registrarse</button>
            </form>

        </div>


    </div>

</main>
<script src="assets/jc/script.js"></script>
</body>
