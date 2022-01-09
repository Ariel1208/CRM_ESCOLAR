<?php
    session_start();
    require_once "../../aplicacion/modelo.php";
    $model = new Model();
?>
    <table class="table table-hover table-info" id="tablaCategoriaDataTable">
        <thead style="text-align: center;">
            <th>Grupos</th>
            <th scope="col" ><span class="btn" data-bs-toggle="modal" data-bs-target="#modalGrupos"><i class="fas fa-user-plus"></i></span></th>
        </thead>
        <tbody style="text-align: center;" >
            <?php
                $model->execute("SELECT * FROM tablaEjemplo");
                $columnasAF = $model->fetchAll();
                foreach($columnasAF as $item){
                $idvideo = $item['id_video'] 
            ?>
            <tr>
                <td><?php echo $item['nombre']?></td>
                <td><?php echo $item['descripcion']?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalEditarVideos"  onclick="llenarVideo('<?php echo $idvideo?>')">Editar</a></li>
                            <li><a class="dropdown-item" id="btneliminar" onclick="eliminarVideo('<?php echo $idvideo?>')">Eliminar</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>            
