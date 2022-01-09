
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php
    include "config.php";
    session_start();
    $usuario = $_SESSION['user'];
    $correo = $_SESSION['mail'];
    $contrasena = $_SESSION['pass'];
     
    
    if (isset($_POST['registrarC'])){
        $codigo = $_POST["code"];
    
        if (preg_match('/\d/', $correo)) {
            $tipo = 2;
        } 
        else {
            $tipo = 1;
        }


        if($codigo==$_SESSION['code']){
            $insertar = "INSERT INTO usuarios VALUES('','$usuario','$correo','$contrasena','$tipo')";
            $ejecutaInsert = mysqli_query($conn,$insertar);
            if(!$ejecutaInsert){
                echo"<script>alert('Error en la linea de sql')</script>"; 
            }else{
                echo"<script>Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                  )</script>";
            } ;  
        };
    };
?>    

</body>
</html>