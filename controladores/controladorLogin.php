<?php 
	error_reporting(0);
	date_default_timezone_set("America/Mexico_City");
	header('Access-Control-Allow-Origin: *');

    require_once "../aplicacion/modelo.php";

    $model = new Model();
	$action = $_POST['action'];
    switch ($action) {
        case 'validar':
            session_start();
            $user = $_POST["user"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $type = $_POST["type"];
            $group = $_POST["group"]; 
            $codigo = rand(1000,9999);
            $_SESSION['user'] = $user;
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            $_SESSION['type'] = $type;
            $_SESSION['group'] = $group;
            $_SESSION['code'] = $codigo;
            

            $model ->execute("SELECT COUNT(*) AS CANTIDAD FROM usuarios WHERE correo = '$email'");
            $cantidad = $model->fetch();
            if($conteo['CANTIDAD']==0){
                if(mail($email,"Registro","Tu código de registro es $codigo","Código de registro")){
                    echo 1;
                } else {
                    echo 2;
                };
            } else{
                echo 3;
            };

        break;
        case 'registrar': 
            session_start();
            $codigo = $_POST["code"];
            $usuario = $_SESSION['user'];
            $correo = $_SESSION['email'];
            $contrasena = $_SESSION['pass'];
            $tipo = $_SESSION['type'];
            $grupo = $_SESSION['group'];
            
            if($codigo==$_SESSION['code']){
                $model->execute("INSERT INTO usuarios VALUES('','$usuario','$correo','$contrasena','$tipo','$grupo')");
                $columnasAF = $model->get_Affect();
                echo $columnasAF;
            }else{
                echo 2;
            }   
        break;
        case 'comprobar':
            session_start();
            $email = $_POST["email"];
            $codigo = rand(1000,9999);
            $_SESSION['emailver'] = $email;
            $_SESSION['codeVer'] = $codigo;
            
            $model ->execute("SELECT id AS ID FROM usuarios WHERE correo = '$email'");
            $cantidad = $model->fetch();
            $_SESSION['valor_id'] = $cantidad['ID'];

            if($_SESSION['valor_id']){
                if(mail($email,"Registro","Tu código de verificación es $codigo","Código de verificación")){
                    echo 1;
                } else {
                    echo 2;
                };
            } else{
                echo 3;
            };
        break;
        case 'actualizar':
            session_start();
            $codigo = $_POST["codigo"];
            $pass = $_POST["pass"];
            $cpass = $_POST["cpass"];
            $email = $_SESSION['emailver'];
            $id = $_SESSION['valor_id'];

            if($codigo==$_SESSION['codeVer']){
                $model->execute("UPDATE usuarios SET contrasena= '$pass' WHERE id= '$id'");
                $columnasAF = $model->get_Affect();
                echo $columnasAF;
            } else {
                echo 2;
            };
    };








		