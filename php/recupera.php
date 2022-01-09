<?php
    include "config.php";
    session_start();
    
    
    if(isset($_POST['validar'])){
        $correo = $_POST["email"];  
        $codigo = rand(1000,9999);
        $_SESSION['coder'] = $codigo;
        $_SESSION['email'] = $correo;

        $consulta = "SELECT COUNT(*) FROM usuarios WHERE correo = '$correo'";
        $resultado = mysqli_query($conn,$consulta);
        $valida = mysqli_fetch_array($resultado);
            
        if($valida[0] == 1){
            if(mail($correo,"Recupera tu cuenta","Tu código de verificación es $codigo","Código de validación")){
                echo"<script>alert('Correo enviado con éxito')
                window.location= '../actualiza.php'
                </script>";
            }else{
                echo"<script>alert('El correo no pudo ser enviado')</script>";
            };
        }else{
            echo"<script>alert('El usuario no existe en la base de datos.')</script>";
        };
    };
?>
