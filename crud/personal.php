<?php
include_once "../crud/bd-personal/conexion.php";
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta="SELECT * FROM personal";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$personal = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Icons Materialize -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="">
    <header class="bg-primary rounded">
        <div class="container p-3 mb-4">
            <h1 class="text-center text-white text-uppercase">Personal - OEK</h1>
        </div>
    </header>

    <section class="container">
        <div class="row">
            <div class="col-lg-12">
                <button id="btnNuevo" type="button" class="btn btn-dark mb-4 btnNuevo" data-toggle="modal">
                        Agregar
                </button>
            </div>
        </div>

        <!-- DataTable -->
        <div class="row caja">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tbPersonal" class="table table-striped table-bordered table-dark" style="width:100%">
                            <thead class="bg-primary text-white text-center">
                                <tr>
                                    <th>NUM. EMPLEADO</th>
                                    <th>NOMBRE</th>
                                    <th>APELLIDO</th>
                                    <th>PUESTO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($personal as $personal) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $personal['num_empleado'] ?>
                                    </td>
                                    <td>
                                        <?php echo $personal['nombre'] ?>
                                    </td>
                                    <td>
                                        <?php echo $personal['ap_paterno'] ?>
                                    </td>
                                    <td>
                                        <?php echo $personal['puesto'] ?>
                                    </td>
                                </tr>
                                <?php    
                                }
                                ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- Archivo JavaScript -->
    

    <script>
        $(document).ready(function(){
            $('#tbPersonal').DataTable();
        })
    </script>

</body>

</html>