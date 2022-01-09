<?php
    include "config.php";
    session_start();
    
    
    if(isset($_POST['recuperar'])){
        $contrasena = $_POST["password"];
        $rcontrasena = $_POST["cpassword"];
        $codigo = $_POST["codigo"];
        $correo = $_SESSION['email'];
        $_SESSION['contra'] = $contrasena;

        if($codigo==$_SESSION['coder']){
            if($contrasena==$rcontrasena){
                $consulta = "UPDATE usuarios SET contrasena = '$contrasena' WHERE correo = '$correo'";
                $resultado = mysqli_query($conn,$consulta);
            
                if(!$resultado){
                    echo"<script>alert('Error al actualizar.')</script>";
                }else{
                    echo"<script>alert('Contraseña actualizada.')</script>";
                };
            }else{
                echo"<script>alert('Las contraseñas no coinciden')</script>";
            };
        }else{
            echo"<script>alert('Los códigos no coinciden')</script>";
        };
    };
?>
