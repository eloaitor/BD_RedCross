<?php include "php/vehiculo.php"; ?>
<?php $vehiculo = new vehiculo(); ?>

<?php
$get = "";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $vehiculo->seleccionarIncidencia($id);
    $get = "true";
    $incidencia = (array) $result[0];
}?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'include/head.php' ?>

    <title>Incidencia vehiculo | Cruz Roja Gernika</title>
</head>

<body>
    <?php include 'include/navbar.php' ?>

    <div class="container-fluid">

            <?php include 'include/sidebar.php' ?>

            <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
                <h1>Nueva incidencia</h1>

                <?php if($get == ""){?>

                    <div class="form-group">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <strong><label for="vehiculo">Vehiculo: </label></strong>
                                        <select class="form-control" name="vehiculo" id="vehiculo" autofocus required>
                                            <?php $vehiculos = $vehiculo->listarVehiculos(); ?>
                                            <?php if( is_array( $vehiculos ) && count( $vehiculos ) > 0 ) { ?>
                                                <?php foreach ($vehiculos as $dato){ ?>
                                                    <option value="<?php echo($dato->id);?>"><?php echo($dato->matricula); ?></option>
                                                <?php } ?>
                                            <?php }else{?>
                                                <option>No hay vehiculos ingresados</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <strong><label for="incidencia">Incidencia: </label></strong>
                                        <input class="form-control" type="text" name="incidencia" id="incidencia" placeholder="Averia" maxlength="20" required autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <strong><label for="observaciones">Observaciones: </label></strong>
                                        <textarea rows="4" cols="50" class="form-control" name="observaciones" id="observaciones" placeholder="Descripcion de la incidencia" autofocus></textarea>
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

                <?php }else{?>

                    <div class="form-group">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <strong><label for="vehiculo">Vehiculo: </label></strong>
                                        <input class="form-control" type="text" name="vehiculo" id="vehiculo" maxlength="20" value="<?php print_r($incidencia['matricula']); ?>" required autofocus disabled>
                                    </div>
                                </div>

                                <input type="hidden" name="idVehiculo"  value="<?php print_r($incidencia['idVehiculo']); ?>">

                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <strong><label for="incidencia">Incidencia: </label></strong>
                                        <input class="form-control" type="text" name="incidencia" id="incidencia" placeholder="Averia" maxlength="20" value="<?php echo($incidencia['incidencia']); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <strong><label for="observaciones">Observaciones: </label></strong>
                                        <textarea rows="4" cols="50" class="form-control" name="observaciones" id="observaciones" placeholder="Descripcion de la incidencia" autofocus><?php echo($incidencia['observaciones']); ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <button name="modificar" type="submit" class="btn btn-success btn-lg ">Registrar</button>
                                        <button type="reset" class="btn btn-danger btn-lg">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                <?php } ?>
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
        $idVehiculo = $_POST['vehiculo'];
        $incidendia = $_POST['incidencia'];
        $observaciones = $_POST['observaciones'];

        $vehiculo->nuevaIncidencia($idVehiculo, $incidendia, $observaciones);
    }  

    if(isset($_POST['modificar'])){
        $incidendia = $_POST['incidencia'];
        $observaciones = $_POST['observaciones'];

        $vehiculo->modificarIncidencia($id, $incidencia, $observaciones);
    }  
?>
</body>

</html>
