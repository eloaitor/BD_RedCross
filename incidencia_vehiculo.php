<?php include "php/vehiculo.php"; ?>
<?php $vehiculo = new vehiculo(); ?>

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

                <div class="form-group">
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="vehiculo">Vehiculo: </label></strong>
                                    <select class="form-control" name="vehiculo" id="vehiculo" autofocus required>
                                        <?php $vehiculos = $vehiculo->listarVehiculos(); ?>
                                        <?php foreach ($vehiculos as $dato){ ?>
                                            <option value="<?php echo($dato->id);?>"><?php echo($dato->matricula); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="incidencia">Incidencia: </label></strong>
                                    <input class="form-control" type="text" name="incidencia" id="incidencia" placeholder="Averia" maxlength="20" autofocus>
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
        
        
    }  
?>
</body>

</html>
