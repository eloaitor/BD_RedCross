<?php include "php/usuario.php"; ?>
<?php $usuario = new usuario(); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'include/head.php' ?>

    <title>Nuevo usuario | Cruz Roja Gernika</title>
</head>

<body>
    <?php include 'include/navbar.php' ?>

    <div class="container-fluid">

            <?php include 'include/sidebar.php' ?>

            <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
                <h1>Nuevo usuario</h1>

                

                <div class="form-group">
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="nombre">Nombre: </label></strong>
                                    <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Jaime" maxlength="30" autofocus>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="apellido1">Apellido1: </label></strong>
                                    <input class="form-control" type="text" name="apellido1" id="apellido1" placeholder="Fernandez" maxlength="50" autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="apellido2">Apellido2: </label></strong>
                                    <input class="form-control" type="text" name="apellido2" id="apellido2" placeholder="Rodriguez" maxlength="30" autofocus>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="responsabilidad">Responsabilidad: </label></strong>
                                    <input class="form-control" type="text" name="responsabilidad" id="responsabilidad" placeholder="Responsable de base" maxlength="50" autofocus>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="admin">Administrador: </label></strong>
                                    <select class="form-control" name="admin" id="admin" autofocus required>
                                            <option value="0" selected>No</option>
                                            <option value="1">Si</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="contrasena">Contraseña: </label></strong>
                                    <input class="form-control" type="password" name="contrasena" id="contrasena" placeholder="Contrasena" maxlength="30" autofocus>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="contrasena2">Repita la contraseña: </label></strong>
                                    <input class="form-control" type="password" name="contrasena2" id="contrasena2" placeholder="Repita la ontrasena" maxlength="50" autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="observaciones">Observaciones: </label></strong>
                                    <textarea rows="4" cols="50" class="form-control" name="observaciones" id="observaciones" placeholder="Descripcion de la incidencia"></textarea>
                                </div>
                             </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <button name="registrar" type="submit" class="btn btn-success btn-lg ">Registrar</button>
                                    <button type="reset" class="btn btn-danger btn-lg">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymo</us"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

<?php
    if(isset($_POST['registrar'])){
        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $responsabilidad = $_POST['responsabilidad'];
        $admin = $_POST['admin'];
        $contrasena = $_POST['contrasena'];
        $observaciones = $_POST['observaciones'];

        echo($nombre + $apellido1 + $apellido2 + $responsabilidad + $admin + $contrasena + $observaciones);
    }  
?>
</body>

</html>
