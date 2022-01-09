function insertarmateria() {
    var materia = $('#txtmateria').val();
    if (materia != "") {
        $.ajax({
            type: 'POST',
            url: "../controladores/controladorDocente.php",
            data: { action: 'registrarMateria', materia: materia },
            success: function(response) {
                console.log(response)
                if (response == 1) {
                    swal({
                        title: "Éxito",
                        text: "Materia registrado con éxito.",
                        icon: "success",
                        dangerMode: true,
                    })
                    $('#tablaMaterias').load("elementos/tablaMaterias.php");
                    $('#txtmateria').val("");

                } else if (response == 2) {
                    swal({
                        title: "Error",
                        text: "Algo malió sal",
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
            text: "Ingresa el nombre de una materia",
            icon: "warning",
            dangerMode: true,
        })
        return false;
    }
}

function llenarMateria(id) {
    $.ajax({
        type: 'POST',
        url: "../controladores/controladorDocente.php",
        data: { action: 'llenarMateria', id: id },
        dataType: "json",
        success: function(response) {
            console.log(response.id_materia)
            console.log(response.materia)
            $("#txteditarmateria").val(response.materia)
            $("#txtidmateria").val(response.id_materia)
        },
        error: function(xhr) {
            console.log(xhr);
        }
    });
}

function editarmateria() {
    var materia = $('#txteditarmateria').val();
    var id = $('#txtidmateria').val();
    if (materia != "") {
        $.ajax({
            type: 'POST',
            url: "../controladores/controladorDocente.php",
            data: { action: 'editarMateria', materia: materia, id: id },
            success: function(response) {
                console.log(response)
                if (response == 1) {
                    swal({
                        title: "Éxito",
                        text: "Materia Actualizada.",
                        icon: "success",
                        dangerMode: true,
                    })
                    $('#tablaMaterias').load("elementos/tablaMaterias.php");
                    $('#txteditarmateria').val("");

                } else if (response == 2) {
                    swal({
                        title: "Error",
                        text: "Algo malió sal",
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
            text: "Ingresa el nombre de una materia",
            icon: "warning",
            dangerMode: true,
        })
        return false;
    }
}

function eliminarmateria(id) {
    swal({
            title: "¿Esta seguro de eliminar esta materia?",
            text: "Una vez eliminada no podra recuperarse...",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: 'POST',
                    url: "../controladores/controladorDocente.php",
                    data: { action: 'eliminarMateria', id: id },
                    success: function(response) {
                        console.log(response)
                        if (response == 1) {
                            swal({
                                title: "Éxito",
                                text: "Materia eliminada con éxito.",
                                icon: "success",
                                dangerMode: true,
                            })
                            $('#tablaMaterias').load("elementos/tablaMaterias.php");
                            $('#txtmateria').val("");

                        } else if (response == 2) {
                            swal({
                                title: "Error",
                                text: "Algo malió sal",
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
                swal("Your imaginary file is safe!");
            }
        });

}