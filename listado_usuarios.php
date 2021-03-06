<?php include "php/usuario.php"; ?>
<?php $usuario = new usuario(); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'include/head.php' ?>

    <title>Listado usuarios | Cruz Roja Gernika</title>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php include 'include/navbar.php' ?>

    <div class="container-fluid">
        <div class="row">

            <?php include 'include/sidebar.php' ?>

            <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
                <h1>Listado usuarios</h1>
   
                <section>
                    <hr>

                    <table class="table table-hover" id="tabla_usuarios"  class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido1</th>
                                <th>Apellido2</th>
                                <th>Responsabilidad</th>
                                <th>Admin</th>
                                <th>Observaciones</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $usuarios = $usuario->listarUsuarios();

                                if( is_array( $usuarios ) && count( $usuarios ) > 0 ) {
                                    foreach ($usuarios as $dato){ ?>
                                        <tr>
                                            <td>
                                                <?php echo($dato->id); ?>
                                            </td>
                                            <td>
                                                <?php echo($dato->nombre); ?>
                                            </td>
                                            <td>
                                                <?php echo($dato->apellido1); ?>
                                            </td>
                                            <td>
                                                <?php echo($dato->apellido2); ?>
                                            </td>
                                            <td>
                                                <?php echo($dato->responsabilidad); ?>
                                            </td>
                                            <td>
                                                <?php echo($dato->admin); ?>
                                            </td>
                                            <td>
                                                <?php echo($dato->observaciones); ?>
                                            </td>
                                            <td>
                                                <!-- Pasarle el id por el enlace y luego en la otra pagina cojerlo con el get-->
                                                <a href="http://google.com" class="btn btn-info">Modificar</a>
                                                <button type="button" class="btn btn-danger">Eliminar</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php }else{ ?>
                                    <tr>
                                        <td colspan="8">
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
            var table = $('#tabla_usuarios').DataTable();
        });
    </script>

</body>

</html>