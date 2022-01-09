<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body> 
        <section>
            <div class="imgP">
                <img src="img/portada.jpeg">
            </div>
            <div class="content">
                <div class="form">
                    <h2>Iniciar Sesión</h2>
                    <form>
                        <div class="input">
                            <span>Usuario </span>
                            <input type="email" placeholder="Escribe tu correo" id="correo">
                        </div>
                        <div class="input">
                            <span>Contraseña </span>
                            <input type="password" placeholder="Escribe tu contraseña" id="contrasena">
                        </div>
                        <div class="input">
                            <a href="contrasena.php">Olvidé mi contraseña</a>
                        </div>
                        <div class="input">
                            <input type="submit" value="Ingresar" id="btnIniciarSesion">
                        </div>
                        <div class="input">
                            <p>¿No tienes una cuenta? <a href="registro.php">Registrarse</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <script src="lib/sweetalert.min.js"></script>
        <script src="lib/jquery-3.5.1.min.js"></script>
        <script src="JS/controlaplicativo.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {

            $('#btnIniciarSesion').click(function(event){
                event.preventDefault();
                IniciarSesion();
            });
        });
    </script>
    </body>
</html>