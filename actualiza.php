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
                        <div class="form" id="form" name="form">
                            <h2>Recupera tu cuenta</h2>
                            <div>
                                <div class="input">
                                    <span>Ingresa tu código</span>
                                    <input type="text" placeholder="Escribe tu código de verificación" id="codigo">
                                </div>
                                <div class="input">
                                    <span>Actualiza tu contraseña</span>
                                    <input type="password" placeholder="Escribe tu contraseña" id="pass">
                                </div>
                                <div class="input">
                                    <input type="password" placeholder="Repite tu contraseña" id="cpass">
                                </div>
                                    <div class="input">
                                        <input type="submit" id="btnactualizar" value="Recuperar">
                                    </div>
                            </div>
                        </div>
                    </div>
        </section>
        <script src="lib/sweetalert.min.js"></script>
        <script src="lib/jquery-3.5.1.min.js"></script>
        <script src="JS/app.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {

            $('#btnactualizar').click(function(event){
                event.preventDefault();
                actualizarcontrasena();
            });
        });
    </script>
</body>
</html>