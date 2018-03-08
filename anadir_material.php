<?php include "php/material.php"; ?>
<?php include "php/vehiculo.php"; ?>
<?php $material = new material(); ?>
<?php $vehiculo = new vehiculo(); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'include/head.php' ?>
    
    <title>Anadir material | Cruz Roja Gernika</title>
</head>

<body>
    <?php include 'include/navbar.php' ?>

    <div class="container-fluid">
        <div class="row">

            <?php include 'include/sidebar.php' ?>

            <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
                <h1>Anadir material a un vehiculo</h1>

                <div class="form-group">
                    <form action="#" method="POST">
                    
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="material">Material: </label></strong>
                                    <input class="form-control" type="text" name="nombre_material" id="material" placeholder="Betadine" autofocus required>
                                </div>
                            </div>
              
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
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="cantidad">Cantidad: </label></strong>
                                    <input class="form-control" type="number" name="cantidad" id="cantidad" placeholder="2" autofocus required>
                                </div>
                            </div>
                       
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="caducidad">Caducidad: </label></strong>
                                    <input class="form-control" type="date" name="caducidad" id="caducidad" autofocus required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="observaciones">Observaciones: </label></strong>
                                    <textarea rows="4" cols="50" class="form-control" name="observaciones" id="observaciones" placeholder="Cualquier informacion que no se pueda introducir en los textos anteriores"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <button type="submit" name="anadir_material" class="btn btn-success btn-lg ">Añadir</button>
                                    <button type="reset" name="reset" class="btn btn-outline-danger btn-lg">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- class="form-group" -->
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

<?php

if(isset($_POST['anadir_material'])){
    $nombre_material = $_POST['nombre_material'];
    $vehiculo = $_POST['vehiculo'];
    $cantidad = $_POST['cantidad'];
    $caducidad = $_POST['caducidad'];
    $observaciones = $_POST['observaciones'];

    $material->anadirMaterial($nombre_material, $vehiculo, $cantidad, $observaciones, $caducidad);
}
?>

</body>

</html>