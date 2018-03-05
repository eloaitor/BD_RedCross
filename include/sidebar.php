<?php 
$basename = basename($_SERVER['PHP_SELF']);
?>

<nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
    <ul class="nav nav-pills flex-column">
        <!--<li class="nav-item">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>-->
        <li class="navbar-brand">
            Caducidades
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
            if($basename == "incidencia_vehiculo.php" ){
                echo("active");
            }
            ?>" href="incidencia_vehiculo.php">Incidencia vehiculo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
            if($basename == "anadir_material.php" ){
                echo("active");
            }
            ?>" href="anadir_material.php">Añadir material</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
            if($basename == "anadir_vehiculo.php" ){
                echo("active");
            }
            ?>" href="anadir_vehiculo.php">Añadir vehiculo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
            if($basename == "listado_caducidades.php" ){
                echo("active");
            }
            ?>" href="listado_caducidades.php">Listado caducidades</a>
        </li>
    </ul>

    <hr/>

    <ul class="nav nav-pills flex-column">
        <li class="navbar-brand">
            ERIE Albergue
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
            if($basename == "nuevo_refugiado.php" ){
                echo("active");
            }
            ?>" href="nuevo_refugiado.php">Nuevo refugiado</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
            if($basename == "listado_refugiados.php" ){
                echo("active");
            }
            ?>" href="listado_refugiados.php">Listar refugiados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
            if($basename == "nuevo_responsable.php" ){
                echo("active");
            }
            ?>" href="nuevo_responsable.php">Nuevo Responsable</a>
        </li>
    </ul>

    <hr/>
    
    <ul class="nav nav-pills flex-column">
        <li class="navbar-brand">
            Generar archivos
        </li>
        <li class="nav-item">
           <a class="nav-link" href="#"> Lista de los refugiados </a>
        </li>
    </ul>

    <hr/>

    <ul class="nav nav-pills flex-column">
        <li class="navbar-brand">
            Admin
        </li>
        <li class="nav-item">
           <a class="nav-link" href="#"> Agregar Usuario </a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="#"> Listado Usuario </a>
        </li>
    </ul>

</nav>