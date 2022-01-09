<?php
    session_start();
    require_once "../../aplicacion/modelo.php";
    $model = new Model();
?>
    <table class="table table-hover table-info" id="tablaCategoriaDataTable">
        <thead style="text-align: center;">
            <th>Fecha de creación</th>
            <th>Asignatura</th>
            <th>Grupo</th>
            <th>Fecha de inicio</th>
            <th>Fecha de expiración</th>
            <th scope="col" ><span class="btn"  data-bs-toggle="modal" data-bs-target="#modalAddCuestionario"><i class="fas fa-user-plus"></i></span></th>
        </thead>
        <tbody style="text-align: center;" >
            <?php
                $model->execute("SELECT * FROM cuestionarios a inner join grupos b on a.id_grupo = b.id_grupo inner join materias c on a.id_materia = c.id_materia;");
                $columnasAF = $model->fetchAll();
                foreach($columnasAF as $item){
                $idcuestionario = $item['id_cuestionario'] 
            ?>
            <tr>
                <td><?php echo $item['fecha_creacion']?></td>
                <td><?php echo $item['materia']?></td>
                <td><?php echo $item['grupo']?></td>
                <td><?php echo $item['fecha_inicio']?></td>
                <td><?php echo $item['fecha_expiracion']?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#modalAddCuestionario"  onclick="llenarMateria('<?php echo $idcuestionario?>')">Editar</a></li>
                            <li><a class="dropdown-item" id="btneliminar" onclick="eliminarCuestionario('<?php echo $idcuestionario?>')">Eliminar</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
   