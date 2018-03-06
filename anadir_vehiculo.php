<?php 
include 'php/vehiculo.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'include/head.php' ?>
    
    <title>Anadir vehiculo | Cruz Roja Gernika</title>
</head>

<body>
    <?php include 'include/navbar.php' ?>

    <div class="container-fluid">

        <?php include 'include/sidebar.php' ?>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
            <h1>Anadir un nuevo vehiculo</h1>
            ANADIR ITV,POLIZA SEGURO,

            <div class="form-group">
                <form action="#" method="POST">

                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <strong><label for="marca">Marca: </label></strong>
                                <input class="form-control" type="text" name="marca" id="marca" placeholder="Renault" maxlength="25" autofocus required>
                            </div>
                        </div>
              
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <strong><label for="modelo">Modelo: </label></strong>
                                <input class="form-control" type="text" name="modelo" id="modelo" placeholder="Master" maxlength="25" autofocus required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <strong><label for="matricula">Matricula: </label></strong>
                                <input class="form-control" type="text" name="matricula" id="matricula" placeholder="1234-ABC / BI-1234-SA" maxlength="10" autofocus required>
                                <span class="help-block">Formatos aceptados: 1234-ABC ó BI-1234-AB</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <strong><label for="itv">ITV: </label></strong>
                                <input class="form-control" type="date" name="itv" id="itv" placeholder="2018/02/02" autofocus>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <strong><label for="polizaSeguro">Poliza seguro: </label></strong>
                                <input class="form-control" type="number" name="polizaSeguro" id="polizaSeguro" placeholder="07620001895" maxlength="20" autofocus>
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

                    <button type="submit" name="anadir_vehiculo" class="btn btn-success btn-lg ">Registrar</button>
                    <button type="reset" class="btn btn-danger btn-lg">Reset</button>
                    </p>
                </form>
            </div>

        </main>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>


<?php

    $vehiculo = new vehiculo();

    if(isset($_POST['anadir_vehiculo'])){
        $matricula = $_POST['matricula'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $observacion = $_POST['observaciones'];
        $itv = $_POST['itv'];
        $polizaSeguro = $_POST['polizaSeguro'];
         
        //Agregar a la base de datos ITV y POLIZASEGURO
        //ITV: Date
        //POLIZASEGURO: int
        $vehiculo->anadirVehiculo($matricula, $marca, $modelo, $observacion, $itv, $polizaSeguro);
    }
?>

</body>

</html>