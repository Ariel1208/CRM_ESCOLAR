<?php 
	error_reporting(0);
	date_default_timezone_set("America/Mexico_City");
	header('Access-Control-Allow-Origin: *');

    require_once "../aplicacion/modelo.php";

    $model = new Model();
	$action = $_POST['action'];
    switch ($action) {
        case 'registrarMateria': 
            $materia = $_POST["materia"];
            
            $model->execute("INSERT INTO materias VALUES('','$materia')");
            $columnasAF = $model->get_Affect();
            echo $columnasAF;

            if($columnasAF!= 1){
                echo 2;
            }
        break;
        case 'llenarMateria':
            $idMateria = $_POST["id"];

            $model->execute("SELECT * FROM materias WHERE id_materia = '$idMateria'");
            $columnasAF = $model->fetch();
            echo json_encode($columnasAF); die();

        break;
        case 'editarMateria': 
            $materia = $_POST["materia"];
            $id_materia = $_POST["id"];

            $model->execute("UPDATE materias SET materia = '$materia' WHERE id_materia = '$id_materia'");
            $columnasAF = $model->get_Affect();
            echo $columnasAF;

            if($columnasAF!= 1){
                echo 2;
            }            
        break;
        case 'eliminarMateria':
            $idMateria = $_POST["id"];

            $model->execute("DELETE FROM materias WHERE id_materia = '$idMateria'");
            $columnasAF = $model->get_Affect();
            echo $columnasAF;

            if($columnasAF!= 1){
                echo 2;
            }
        break;
        case 'insertarVideo': 
            echo "Insertar video";
        break;
      
    };



