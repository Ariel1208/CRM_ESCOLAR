<?php
    include "config.php";
    session_start();
    
    
    if(isset($_POST['Ingresar'])){
        $usuario = $_POST["username"]; 
        $correo = $_POST["email"];  
        $contrasena = $_POST["password"];
        $rcontrasena = $_POST["cpassword"];
        $codigo = rand(1000,9999);
        $_SESSION['code'] = $codigo;
        $_SESSION['user'] = $usuario;
        $_SESSION['mail'] = $correo;
        $_SESSION['pass'] = $contrasena;

        if($contrasena==$rcontrasena){
            $consulta = "SELECT * FROM usuarios WHERE correo = '$correo'";
            $resultado = mysqli_query($conn,$consulta);
            
            if(!$resultado->num_rows > 0){
                if(mail($correo,"Registro","Tu código de registro es $codigo","Código de registro")){
                    echo"<script>alert('Correo enviado con éxito')
                    window.location= '../codigo.php'
                    </script>";
                }else{
                    echo"<script>alert('El correo no pudo ser enviado')</script>";
                };
            }else{
                echo"<script>alert('El usuario ya existe en la base de datos.')</script>";
            };
        }else{
            echo"<script>alert('Las contraseñas no coinciden')</script>";
        };
    };
?>
