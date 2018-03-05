<?php include "php/refugiado.php"; ?>
<?php $refugiado = new refugiado(); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'include/head.php' ?>

    <title>Nuevo refugiado | Cruz Roja Gernika</title>
</head>

<body>
    <?php include 'include/navbar.php' ?>

    <div class="container-fluid">

            <?php include 'include/sidebar.php' ?>

            <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
                <h1>Nuevo refugiado</h1>

                <div class="form-group">
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="nombre">Nombre: </label></strong>
                                    <input class="form-control" type="text" name="nombre" id="nombre" maxlength="30" placeholder="Jaime" maxlength="30">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="primer_apellido">Primer apellido: </label></strong>
                                    <input class="form-control" type="text" name="primer_apellido" id="primer_apellido" maxlength="50" placeholder="Martinez" maxlength="50">
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="segundo_apellido">Segundo apellido: </label></strong>
                                    <input class="form-control" type="text" name="segundo_apellido" id="segundo_apellido" maxlength="50" placeholder="Lezama" maxlength="50">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="dni">DNI: </label></strong>
                                    <input style="text-transform:uppercase;" class="form-control" type="text" name="dni" id="dni" onblur="nif(this.value)" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Za-z]{1}))|((\d{8})([-]?)([A-Za-z]{1}))" placeholder="X-4568547-D / 45878547-S" maxlength="10">
                                    <p id="dniHelp" class="form-text text-danger">
                                        El DNI que has introducido no es valido
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="fechaNacimiento">Fecha de nacimiento: </label></strong>
                                    <input class="form-control" type="date" name="fechaNacimiento" id="fechaNacimiento">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="telefonoContacto">Telefono de contacto: </label></strong>
                                    <input class="form-control" type="tel" name="telefonoContacto" id="telefonoContacto" pattern="[0-9]{9}" placeholder="946251988" maxlength="9">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="medicamentos">Medicamentos: </label></strong>
                                    <input class="form-control" type="text" name="medicamentos" id="medicamentos" placeholder="Ibuprofeno">
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="alergias">Alergias: </label></strong>
                                    <input class="form-control" type="text" name="alergias" id="alergias" placeholder="Polen, polvo">
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
                                    <button name="registrar" type="submit" class="btn btn-success btn-lg ">Registrar</button>
                                    <button type="reset" class="btn btn-danger btn-lg">Reset</button>
                                </div>
                            </div>
                        </div>
                        
                        <p>
                            GETDATE te saca hora y fecha
                            <br>
                            Fecha entrada y salida estan quitados ya que cogeran automaticos del sistema. Fecha entrada al darle a registrar y fecha salida al darle SALIDA en la lista de refugiados.
                            <br>
                            Poner las validaciones los: request
                        </p>
                        <p>
                            AGREGAR -> Mirar la tabla de la base de datos, MAXLENGHT
                        </p>
                        <p>
                            MEJORA -> Hacer que de la opcion de agregar algun familiar o mas de uno. Input buscado y que te saque los datos en un model con un confirm
                            <br>
                            Hacer lo mismo con medicamentos poner un plus si se quiere añadir -> Nombre, y input radio con la manera de tomar esa pastilla.
                        </p>
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

<script>
$( document ).ready(function() {
    $("#dniHelp").hide()
});

function nif(dni) {
    numero = dni.substr(0,dni.length-1);
    let = dni.substr(dni.length-1,1);
    numero = numero % 23;
    letra='TRWAGMYFPDXBNJZSQVHLCKET';
    letra=letra.substring(numero,numero+1);
    if (letra!=let) {
        $("#dniHelp").show();
    }else{
        $("#dniHelp").hide();
    }
}
</script>

    <?php
    if(isset($_POST['registrar'])){
        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['primer_apellido'];
        $apellido2 = $_POST['segundo_apellido'];
        $dni = $_POST['dni'];
        $medicamentos = $_POST['medicamentos'];
        $alergias = $_POST['alergias'];

        $fechaNacimiento = $_POST['fechaNacimiento'];
        $telefonoContacto = $_POST['telefonoContacto'];
        $observaciones = $_POST['observaciones'];

        //$fecha_entrada = $_POST['fecha_entrada']; Al hacer el INSERT
        //$fecha_salida = $_POST['fecha_salida']; UPDATE en el boton del listado SALIDA js/confirm

        $refugiado->anadirRefugiado($nombre, $apellido1, $apellido2, $dni, $medicamentos, $alergias, $fechaNacimiento, $telefonoContacto, $observaciones);
    }
    
?>
</body>

</html>
