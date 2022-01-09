function IniciarSesion() {
    var email = $('#correo').val();
    var password = $('#contrasena').val();

    if (email != "" && password != "") {
        $.ajax({
            type: 'POST',
            url: "controladores/control.php",
            data: { action: 'login', email: email, password: password },
            dataType: "json",
            success: function(response) {

                if (response == 1) {
                    // alert("Usuario no existente");
                    swal({
                        title: "Usuario no existente",
                        text: "Este usuario no se ha registrado",
                        icon: "error",
                        dangerMode: true,
                    })
                } else if (response == 2) {
                    //alert("Usuario o contraseña invalido");
                    swal({
                        title: "Usuario o contraseña invalido",
                        text: "Compruebe haber ingresado correctamente las credenciales correctas",
                        icon: "warning",
                        dangerMode: true,
                    })
                } else {
                    if (response.tipo == 1) {

                        //alert("Bienvenido administrador");
                        swal({
                                title: 'Bienvenido Docente',
                                text: 'Redirigiendo...',
                                icon: 'success',
                                timer: 800,
                                buttons: false,
                            })
                            .then(() => {
                                location.href = "vistasDocente/inicioD.php";
                            })
                    } else if (response.tipo == 2) {

                        //alert("Bienvenido");
                        swal({
                                title: 'Bienvenido Alumno',
                                text: 'Redirigiendo...',
                                icon: 'success',
                                timer: 800,
                                buttons: false,
                            })
                            .then(() => {
                                location.href = "vistasAlumno/inicioA.php";
                            })
                    }
                }
            }
        });
    } else {
        alert("Lo sentimos, todos los campos son obligatorios!");
    }
}


function CerrarSesion() {
    $.ajax({
        type: 'POST',
        url: "../controladores/control.php",
        data: { action: 'salir' },
        dataType: "json",
        success: function(response) {

            if (response == 1) {
                location.href = "../index.php";
                localStorage.clear();
            }

        },
        error: function(xhr) {
            console.log(xhr);
            alert();
        }
    });
}