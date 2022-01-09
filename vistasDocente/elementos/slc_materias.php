<?php
    session_start();
    require_once "../../aplicacion/modelo.php";
    $model = new Model();

    $model->execute("SELECT * FROM materias");
    $columnasAF = $model->fetchAll();
    foreach($columnasAF as $item){

        $id = $item['id_materia'];
        ?>
        
        <option value="<?php echo $id ?>"><?php echo $item['materia']; ?></option>
        
        <?php
    }
?>