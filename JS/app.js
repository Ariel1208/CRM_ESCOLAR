function iniciarSesionControlador() {
    var user = $('#user').val();
    var email = $('#email').val();
    var password = $('#pass').val();
    var cpassword = $('#cpass').val();
    var type = $('#type').val();
    var group = $('#slcgrupos').val();
    console.log(type)
    if (user != "" && email != "" && password != "" && cpassword != "" && type != "" && group != "" && type != 0) {
        if (password == cpassword) {
            if (group == "") {
                group = 0 
            }
            
            $.ajax({
                type: 'POST',
                url: "controladores/controladorLogin.php",
                data: { action: 'validar', user: user, email: email, pass:password, type:type, group:group },
                success: function(response) {
                    console.log(response)
                    if (response == 1) {
                        swal({
                            title: "Éxito",
                            text: "Email enviado con éxito, revisa tu bandeja",
                            icon: "success",
                            dangerMode: true,
                            timerProgressBar: true,
                        }).then(() => {
                            location.href = "codigo.php";
                        })
                    } else if (response == 2) {
                        swal({
                            title: "Error",
                            text: "El Email no pudo ser enviado.",
                            icon: "error",
                            dangerMode: true,
                        }).then(() => {
                            location.href = "index.php";
                        })
                    } else if (response == 3) {
                        swal({
                            title: "Error",
                            text: "Ya existe un usuario registrado con ese correo.",
                            icon: "warning",
                            dangerMode: true,
                        }).then(() => {
                            location.href = "index.php";
                        })
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        } else {
            swal({
                title: "Alerta",
                text: "Las contraseñas no coinciden",
                icon: "warning",
                dangerMode: true,
            })
            return false;
        }
    } else {
        swal({
            title: "Alerta",
            text: "Faltan campos por llenar",
            icon: "warning",
            dangerMode: true,
        })
        return false;
    }
}

function validarcodigo() {
    var code = $('#code').val();
    if (code != "") {
        $.ajax({
            type: 'POST',
            url: "controladores/controladorLogin.php",
            data: { action: 'registrar', code:code },
            success: function(response) {
                console.log(response)
                if (response == 1) {
                    swal({
                        title: "Éxito",
                        text: "Usuario registrado con éxito.",
                        icon: "success",
                        dangerMode: true,
                    }).then(() => {
                        location.href = "index.php";
                    })
                } else if (response == 2) {
                    swal({
                        title: "Error",
                        text: "Los códigos no coinciden",
                        icon: "error",
                        dangerMode: true,
                    }) 
                }
            },
            error: function(xhr) {
                console.log(xhr);
            }
        });
    } else {
        swal({
            title: "Alerta",
            text: "Ingresa un código",
            icon: "warning",
            dangerMode: true,
        })
        return false;
    }
}

function validarcorreo() {
    var email = $('#email').val();

    if (email != "") {
        $.ajax({
            type: 'POST',
            url: "controladores/controladorLogin.php",
            data: { action: 'comprobar', email: email },
            success: function(response) {
                console.log(response)
                if (response == 1) {
                    swal({
                        title: "Usuario encontrado",
                        text: "Te hemos enviado un código de verificación a tu correo.",
                        icon: "success",
                        dangerMode: true,
                    }).then(() => {
                        location.href = "actualiza.php";
                    })
                } else if (response == 2) {
                    swal({
                        title: "Error",
                        text: "El usuario si existe pero no se pudo enviar un código de verificación por correo.",
                        icon: "error",
                        dangerMode: true,
                    }).then(() => {
                        location.href = "index.php";
                    })
                } else if (response == 3){
                    swal({
                        title: "Error",
                        text: "Usuario no encontrado",
                        icon: "error",
                        dangerMode: true,
                    }).then(() => {

                        // location.href = "index.php";
                    })
                }
            },
            error: function(xhr) {
                console.log(xhr);
            }
        });

    } else {
        swal({
            title: "Alerta",
            text: "Faltan campos por llenar",
            icon: "warning",
            dangerMode: true,
        })
        return false;
    }
}

function actualizarcontrasena() {
    var codigo = $('#codigo').val();
    var pass = $('#pass').val();
    var cpass = $('#cpass').val();

    if (codigo != "" && pass != "" && cpass != "") {
        if (pass == cpass) {
            $.ajax({
                type: 'POST',
                url: "controladores/controladorLogin.php",
                data: { action: 'actualizar', codigo: codigo, pass: pass, cpass: cpass },
                success: function(response) {
                    console.log(response)
                    if (response == 1) {
                        swal({
                            title: "Éxito",
                            text: "Contraseña actualizada con éxito.",
                            icon: "success",
                            dangerMode: true,
                        }).then(() => {
                            location.href = "index.php";
                        })
                    } else if (response == 2) {
                        swal({
                            title: "Error",
                            text: "Los códigos no coinciden",
                            icon: "warning",
                            dangerMode: true,
                        })
                    };
                },
                error: function(xhr) {
                    console.log(xhr);
                }
            });
        } else {
            swal({
                title: "Alerta",
                text: "Las contraseñas no coinciden",
                icon: "warning",
                dangerMode: true,
            })
            return false;
        }
    } else {
        swal({
            title: "Alerta",
            text: "Faltan campos por llenar",
            icon: "warning",
            dangerMode: true,
        })
        return false;
    }
}

