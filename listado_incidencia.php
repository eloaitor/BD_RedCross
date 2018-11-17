<?php include "php/vehiculo.php"; ?>
<?php $vehiculo = new vehiculo(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'include/head.php' ?>

    <title>Listado incidencias | Cruz Roja Gernika</title>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <?php include 'include/navbar.php' ?>

    <div class="container-fluid">
        <div class="row">

            <?php include 'include/sidebar.php' ?>

            <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
                <h1>Listado incidencias</h1>

                <section>
                    <hr>

                    <table class="table table-hover" id="tabla_incidencias"  class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Vehiculo</th>
                                <th>Incidencia</th>
                                <th>Observaciones</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $incidencias = $vehiculo->listarIncidencias();
                                if( is_array( $incidencias ) && count( $incidencias ) > 0 ) {
                                    foreach ($incidencias as $dato){ ?>
                                        <tr>
                                            <td>
                                                <?php echo($dato->IdIncidencia); ?>
                                            </td>
                                            <td>
                                                <?php echo($dato->matricula); ?>
                                            </td>
                                            <td>
                                                <?php echo($dato->incidencia); ?>
                                            </td>
                                            <td>
                                                <?php echo($dato->observaciones); ?>
                                            </td>
                                            <td>
                                                <!-- Pasarle el id por el enlace y luego en la otra pagina cojerlo con el get-->
                                                <a href="incidencia_vehiculo.php?id=<?php echo($dato->IdIncidencia); ?>" class="btn btn-info">Modificar</a>
                                                <form action="#" method="POST">
                                                    <a name="eliminar" href="#?id=<?php echo($dato->IdIncidencia); ?>" class="btn btn-info">eliminar</a>
                                                </form>
                                                
                                                <button type="button" name="eliminar" class="btn btn-danger">Eliminar</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } else { ?>
                                        <tr>
                                            <td colspan="5">
                                                <div class="alert alert-danger">
                                                    <strong>Error!</strong> No se han encontrado incidencias. Si cree que se trata de un error contacte con el administrador. <strong>Aitor Elorriaga</strong>
                                                </div>
                                            </td>
                                        </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </section>
            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymo</us"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#tabla_incidencias').DataTable();
        });
    </script>

    <?php
    if(isset($_POST['eliminar'])){
        $id = $_GET['id'];
        echo($id);
        $vehiculo->eliminarIncidencia($id);
    }
    ?>

</body>

</html>
