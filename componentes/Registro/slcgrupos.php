<?php
    require_once "../../aplicacion/modelo.php";
    $model = new Model();
    $model ->execute("SELECT * FROM grupos");
            $cantidad = $model->fetchAll();
?>

<option value="0">Seleccione un grupo</option>
<?php

      for($a=0;$a < count($cantidad); $a++){

      
            $id=$cantidad[$a]['id_grupo'];
    ?> 
        <option value="<?php echo $id?>"><?php echo $cantidad[$a]['grupo'] ?></option>
    <?php
        }
    ?>

  
