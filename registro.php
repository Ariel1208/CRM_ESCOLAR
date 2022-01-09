<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style/style.css">
    <!-- <link rel="stylesheet" href="lib/bootstrap4/bootstrap.min.css"> -->
</head>
<body> 
        <section>
            <div class="imgP">
                <img src="img/portada.jpeg">
            </div>
                <div class="content">
                   <div class="form" id="form" name="form" >
                        <h2>Registro</h2>
                            <div>
                                <div class="input">
                                    <span>Usuario </span>
                                    <input type="text" placeholder="Escribe tu usuario" id="user">
                                </div>
                                <div class="input">
                                    <span>Correo electrónico </span>
                                    <input type="text" placeholder="Escribe tu correo electrónico" id="email">
                                </div>
                                <div class="input">
                                    <span>Contraseña</span>
                                    <input type="password" placeholder="Escribe tu contraseña" id="pass">
                                </div>
                                <div class="input">
                                    <input type="password" placeholder="Repite tu contraseña" id="cpass">
                                </div>
                                <div class="input">
                                <span>Tipo de usuario</span>
                                    <select id="type">
                                        <option value="0">Seleccione una opción</option>
                                        <option value="1">Docente</option>
                                        <option value="2">Alumno</option>
                                    </select>
                                </div>
                                <div class="input">
                                <span id="lblgrupo">Grupo</span>
                                <select id="slcgrupos">
                                </select>
                                </div>
                                <div class="input">
                                    <input type="submit" id="btnregistro" value="Validar">
                                </div>
                        </div>
                    </div>
              </div>
        </section>
        <script src="lib/sweetalert.min.js"></script>
        <script src="lib/jquery-3.5.1.min.js"></script>
        <!-- <script src="lib/bootstrap4/bootstrap.min.js"></script> -->
        <script src="JS/app.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#slcgrupos').load("componentes/Registro/slcgrupos.php");

            $('#btnregistro').click(function(event){
                event.preventDefault();
                iniciarSesionControlador();
            });

            $("#slcgrupos").hide();
            $("#lblgrupo").hide();
        });
        </script>
        <script>
        $(document).ready(function(){
            $("#type").change(function(){
                console.log($("#type").val())
                if ($("#type").val() == 1){
                    $("#slcgrupos").hide();
                    $("#lblgrupo").hide();
                } else if ($("#type").val() == 0){
                    $("#slcgrupos").hide();
                    $("#lblgrupo").hide();
                } else {
                    $("#slcgrupos").show();
                    $("#lblgrupo").show();
                }
            });
           
        });
</script>
    </body>
</html>


