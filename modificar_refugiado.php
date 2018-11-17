<?php include "php/refugiado.php"; ?>
<?php $refugiado = new refugiado(); ?>
<?php $id = $_GET["id"]; ?>
<?php $refugiadoEditar = $refugiado->seleccionarUnRefugiado($id) ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'include/head.php' ?>

    <title>Modificar refugiado | Cruz Roja Gernika</title>
</head>

<body>
    <?php include 'include/navbar.php' ?>

    <div class="container-fluid">

            <?php include 'include/sidebar.php' ?>

            <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
                <h1>Modificar refugiado</h1>

                <div class="form-group">
                    
                   
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="nombre">Id: </label></strong>
                                    <input class="form-control" type="text" name="id" id="id" value="<?php echo($refugiadoEditar->id);?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="nombre">Fecha de entrada: </label></strong>
                                    <input class="form-control" type="text" name="fecha_entrada" id="fecha_entrada" maxlength="30" value="<?php echo($refugiadoEditar->fecha_entrada);?>" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="nombre">Nombre: </label></strong>
                                    <input class="form-control" type="text" name="nombre" id="nombre" maxlength="30" value="<?php echo($refugiadoEditar->nombre);?>" maxlength="30">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="primer_apellido">Primer apellido: </label></strong>
                                    <input class="form-control" type="text" name="primer_apellido" id="primer_apellido" maxlength="50" value="<?php echo($refugiadoEditar->apellido1);?>" maxlength="50">
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="segundo_apellido">Segundo apellido: </label></strong>
                                    <input class="form-control" type="text" name="segundo_apellido" id="segundo_apellido" maxlength="50" value="<?php echo($refugiadoEditar->apellido2);?>" maxlength="50">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="dni">DNI: </label></strong>
                                    <input style="text-transform:uppercase;" class="form-control" type="text" name="dni" id="dni" onblur="nif(this.value)" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Za-z]{1}))|((\d{8})([-]?)([A-Za-z]{1}))" value="<?php echo($refugiadoEditar->dni);?>" maxlength="10">
                                    <p id="dniHelp" class="form-text text-danger">
                                        El DNI que has introducido no es valido
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="fechaNacimiento">Fecha de nacimiento: </label></strong>
                                    <input class="form-control" type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo($refugiadoEditar->fechaNacimiento);?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="telefonoContacto">Telefono de contacto: </label></strong>
                                    <input class="form-control" type="tel" name="telefonoContacto" id="telefonoContacto" pattern="[0-9]{9}" value="<?php echo($refugiadoEditar->telefonoContacto);?>" maxlength="9">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="medicamentos">Medicamentos: </label></strong>
                                    <input class="form-control" type="text" name="medicamentos" id="medicamentos"value="<?php echo($refugiadoEditar->medicamentos);?>">
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <strong><label for="alergias">Alergias: </label></strong>
                                    <input class="form-control" type="text" name="alergias" id="alergias" value="<?php echo($refugiadoEditar->alergias);?>">
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
                                    <button name="modificar" type="submit" class="btn btn-success btn-lg ">Modificar</button>
                                </div>
                            </div>
                        </div>
                        
                        <p>
                            Añadir: <br>
                                + Al darle btn modificar vuelve a la lista de los refugiados<br>
                                + Poner validacion con un confirm al darle boton modificar
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
    if(isset($_POST['modificar'])){
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

        $refugiado->modificarRefugiado($id, $nombre, $apellido1, $apellido2, $dni, $medicamentos, $alergias, $fechaNacimiento, $telefonoContacto, $observaciones);

        ?>
        <script>alert("Se ha modificado el registro");</script>
        <meta http-equiv="Refresh" content="0;url=listado_refugiados.php">
        <?php
    }
    
?>
</body>

</html>
