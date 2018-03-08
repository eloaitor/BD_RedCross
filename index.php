<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'include/head.php' ?>
    
    <title>Home | Cruz Roja Gernika</title>
</head>

<body>
    <?php include 'include/navbar.php' ?>

    <div class="container-fluid">
        <div class="row">

            <?php include 'include/sidebar.php' ?>

            <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
                <h1>Gernikako Gurutze Gorria - Cruz Roja Gernika</h1>

                <section class="row text-justify ">
                    <div class="hero-unit">
                        <h3>Bienvenido a la APP de Cruz Roja Gernika</h3>
                        <p>
                            Con esta sencilla herramienta, podrá gestionar las caducidades de diferentes vehiculos y registrar todo los refugiados de
                            su Albergue.
                        </p>
                        <p>Con esta sencilla herramienta, podrá conectarse a Inmotek y obtener datos sobre los inmuebles de
                            la base de datos para la que tenga acceso. El API está basada en la llamada a scripts del servidor,
                            que devuelven ficheros XML que posteriormente deberá parchear, les adjuntamos ejemplos desarrollados
                            de formulario y presentación de novedades destacados. Puede ejecutar peticiones http mediante
                            Ajax para rellenar campos de formulario, basándose en valores de otro campo, en los ejemplos
                            expuestos los valores van predefinidos.
                        </p>
                    </div>
                </section>
                
                <hr class=" spacer">
                <!--/row-->
                <strong>
                    <h3>Caducidades y Revisiones</h3>
                </strong>

                <hr>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <a href="anadir_vehiculo.php">
                            <pre>
                                <center><h3>Añadir vehiculo</h3><i class="fas fa-ambulance fa-5x" aria-hidden="true"></i></center>
                            </pre>
                        </a>
                    </div>


                    <div class="col-md-4 col-xs-12">
                        <a href="anadir_material.php">
                            <pre>
                                <center><h3>Añadir material</h3><i class="fas fa-calendar-alt fa-5x" aria-hidden="true"></i></center>
                            </pre>
                        </a>
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <a href="listado_caducidades.php">
                            <pre>
                                <center><h3>Listado</h3><i class="fas fa-list fa-5x" aria-hidden="true"></i></center>
                            </pre>
                        </a>
                    </div>
                </div><!-- /row -->

                <hr class=" spacer">

                <strong>
                    <h3>ERIE Albergue</h3>
                </strong>

                <hr>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <a href="nuevo_refugiado.php">
                            <pre>
                                <center><h3>Añadir Refugiado</h3> <i class="fas fa-user-plus fa-5x"></i></center>
                            </pre>
                        </a>
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <!--<a href="anadir_responsable.php">-->
                            <pre>
                                <center><h3>Añadir Responsable</h3> <i class="fas fa-user-plus fa-5x" aria-hidden="true"></i></center>
                            </pre>
                        <!--</a>-->
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <a href="listado_refugiados.php">
                            <pre>
                                <center><h3>Listado</h3><i class="fas fa-list fa-5x" aria-hidden="true"></i></center>
                            </pre>
                        </a>
                    </div>
                </div>
            </main>
        </div>
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
</body>

</html>