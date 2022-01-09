function insertarvideo() {
    var fichero = $('#fichero').val();
    var nombrevideo = $('#nombreVideo').val();
    var descripcionvideo = $('#descripcionVideo').val();

    if (fichero != "" && nombrevideo != "" && descripcionvideo != "") {
        $.ajax({
            type: 'POST',
            enctype: 'multipart/form-data',
            url: "../controladores/controladorDocente.php",
            data: { action: 'insertarVideo', fichero: fichero, nombrevideo: nombrevideo, descripcionvideo: descripcionvideo },
            success: function(response) {
                console.log(response)
                if (response == 1) {
                    swal({
                        title: "Éxito",
                        text: "Video subido con éxito.",
                        icon: "success",
                        dangerMode: true,
                    })
                    $('#tablaVideos').load("elementos/tablaVideos.php");
                    $('#fichero').val("");
                    $('#nombreVideo').val("");
                    $('#descripcionVideo').val("");

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
            text: "No se pueden dejar campos vacíos",
            icon: "warning",
            dangerMode: true,
        })
        return false;
    }
}