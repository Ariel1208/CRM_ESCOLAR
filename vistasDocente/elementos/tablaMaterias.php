<?php
    session_start();
    require_once "../../aplicacion/modelo.php";
    $model = new Model();
?>
    <table class="table table-hover table-info" id="tablaCategoriaDataTable">
        <thead style="text-align: center;">
            <th>Materias</th>
            <th scope="col" ><span class="btn" data-bs-toggle="modal" data-bs-target="#modalMaterias"><i class="fas fa-book"></i> Agregar</span></th>
        </thead>
        <tbody style="text-align: center;" >
            <?php
                $model->execute("SELECT * FROM materias");
                $columnasAF = $model->fetchAll();
                foreach($columnasAF as $item){
                $idmateria = $item['id_materia'] 
            ?>
            <tr>
                <td><?php echo $item['materia']?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalEditarMaterias"  onclick="llenarMateria('<?php echo $idmateria?>')">Editar</a></li>
                            <li><a class="dropdown-item" id="btneliminar" onclick="eliminarmateria('<?php echo $idmateria?>')">Eliminar</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
   

    
