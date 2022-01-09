function agregarPreguntaCuestionario(num = $('#numPregunta').val()) {
    let pregunta = `
<div class=" mb-4" id = "panelPregunta-${num}">
<hr>
  <div class="row">
    <div class="col-12">
        <label for="exampleFormControlInput1" class="form-label">Texto de pregunta  </label>
    </div>
    <div class="col-10">
        <input type="email" class="form-control" id="pregunta-${num}">
    </div>
    <div class="col-2">
        <i class="fas fa-trash-alt btn btn-danger" onclick="eliminarPreguntaCuestionario(${num})"></i>
    </div>
    <div class="col-1">
        <input  style="display: none;" type="number" id="numRespuesta-${num}" value="1">
    </div>
    <div class="col-11">
        <div id="add_panelrespuestas-${num}"></div>
    </div>
  </div>
  <span class="btn btn-primary mt-1 ms-4" onclick="agregarRespuestasCuestionario(${num})">Agregar respuestas</span>
</div>`
    num = parseInt(num, 10) + 1;
    $('#add_panelPreguntas').append(pregunta);
    $('#numPregunta').val(num)
}

function agregarRespuestasCuestionario(numPregunta) {
    let num = $('#numRespuesta-' + numPregunta).val();
    let respuesta = `<div class="">
    <label for="exampleFormControlInput1" class="form-label">Texto de respuesta  </label>
        <div class="row">
            <div class="col-11 form-check">
                <input class="form-check-input" type="radio" name="" id="exampleRadios1" value="option1">
                <input type="email" class="form-control form-check-label" id="respuesta-">
            </div>
            <div class="col-1">
                <i class="fas fa-trash-alt btn btn-danger"></i>
            </div>
        </div>
    </div>`

    num = parseInt(num, 10) + 1;
    $('#numRespuesta-' + numPregunta).val(num)
    $('#add_panelrespuestas-' + numPregunta).append(respuesta);

}

function eliminarPreguntaCuestionario(num) {
    $('#panelPregunta-' + num).empty();
}