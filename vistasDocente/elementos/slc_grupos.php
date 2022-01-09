<?php
    session_start();
    require_once "../../aplicacion/modelo.php";
    $model = new Model();

    $model->execute("SELECT * FROM grupos");
    $columnasAF = $model->fetchAll();
    foreach($columnasAF as $item){

        $id = $item['id_grupo'];
        ?>
        
        <option value="<?php echo $id ?>"><?php echo $item['grupo']; ?></option>
        
        <?php
    }
?>