<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../lib/fontawesome/css/fontawesome.css" rel="stylesheet"/> 
    <link href="../lib/fontawesome/css/brands.css" rel="stylesheet"/> 
    <link href="../lib/fontawesome/css/solid.css" rel="stylesheet"/>
</head>
<body>
    <!-- Inicio de Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Docente</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="iniciod.php">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="materias.php">Materias</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="cuestionarios.php">Cuestionarios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="videos.php">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="vistaAlumnos.php">Alumnos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="vistaGrupos.php">Grupos</a>
                </li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-danger" type="submit"> <i class="fas fa-sign-out-alt"></i> Cerrar Sesión</button>
            </form>
            </div>
        </div>
    </nav>
    <!-- Fin de Navbar-->

    <!-- Inicio de Tabla Grupos-->
    <div class="container mt-5" id="tablaGrupos">
    </div>
    <!-- Fin de Tabla Alumnos-->

    <script src="../lib/sweetalert.min.js"></script>
    <script src="../lib/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tablaGrupos').load("elementos/tablaGrupos.php")
            
        });
    </script>
</body>
</html>