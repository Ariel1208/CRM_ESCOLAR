<?php 
	error_reporting(0);
	date_default_timezone_set("America/Mexico_City");
	header('Access-Control-Allow-Origin: *');

    require_once "../aplicacion/modelo.php";
	$response = array();
    $model = new Model();
	$action = $_POST['action'];
    switch ($action) {
		case 'login': 
			$email = $_POST['email'];
			$password = $_POST['password'];

			$model ->execute("SELECT COUNT(*) as cantidad FROM usuarios WHERE correo='$email'");
			$cantidad = $model->fetch();

			if($cantidad['cantidad']>0){
				$model ->execute("SELECT count(*) as cantidad FROM usuarios WHERE correo='$email' AND contrasena ='$password'");
				$cantidad2 = $model->fetch();

				if($cantidad2['cantidad']==0){
					echo 2;
				}else{
					$model->execute("SELECT * FROM USUARIOS WHERE correo = '$email' AND contrasena = '$password'");
					$userA = $model->fetch();


					session_start();
					$_SESSION['ID_US'] = $userA['id'];
					$_SESSION['ROL'] = $userA['tipo'];

					echo json_encode($userA);die();
				}
			}else if($cantidad['cantidad'] == "0"){
				echo  1;
			}

		break;
        case 'salir':
			session_start();
			session_destroy();
			
			echo 1;

		break;
    };



