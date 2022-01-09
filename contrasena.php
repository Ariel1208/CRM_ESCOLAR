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
                                    <span>Ingresa tu correo para buscar tu cuenta</span>
                                    <input type="text" placeholder="Ingresa tu correo" id="email">
                                </div>
                                    <div class="input">
                                        <input type="submit" id="btnvalidar" name="Verificar">
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

                $('#btnvalidar').click(function(event){
                    event.preventDefault();
                    validarcorreo();
                });
            });
        </script>
    </body>
</html>