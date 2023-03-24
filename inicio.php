<?php require_once("header.php") ?>

        <div class="container">
            <br><br>
            <br><br>
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-5 col-lg-3 p-0 p-1">
                        <div class="row no-gutters bg-white shadow-sm">
                            <div class="col-md-3 bg-danger p-3">
                                <span class="icofont-library h1 text-white"></span>
                            </div>
                            <div class="col-md-9 pt-2">
                                <small class="ml-3 h3 text-secondary border-danger"><b class="count">
                                        <?php
                                        require_once("conexion/conexion.php");
                                        $query = "SELECT COUNT(Id_libro) AS Total FROM libros";
                                        $resultado = $conexion->query($query);
                                        $fila = $resultado->fetch_assoc();
                                        echo $fila['Total'];
                                        ?>
                                    </b></small>
                                <br>
                                <small class="ml-3 h6 text-secondary">Total de libros</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3 p-0 p-1">
                        <div class="row no-gutters bg-white shadow-sm">
                            <div class="col-md-3 bg-info p-3">
                                <span class="icofont-business-man-alt-1 h1 text-white"></span>
                            </div>
                            <div class="col-md-9 pt-2">
                                <small class="ml-3 h3 text-secondary border-info"><b class="count">
                                        <?php
                                        require_once("conexion/conexion.php");
                                        $query = "SELECT COUNT(Id_persona) AS Total FROM personas";
                                        $resultado = $conexion->query($query);
                                        $fila = $resultado->fetch_assoc();
                                        echo $fila['Total'];
                                        ?>
                                    </b></small>
                                <br>
                                <small class="ml-3 h6 text-secondary">Total de Personas</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3 p-0 p-1">
                        <div class="row no-gutters bg-white shadow-sm">
                            <div class="col-md-3 bg-warning p-3">
                                <span class="icofont-learn h1 text-white"></span>
                            </div>
                            <div class="col-md-9 pt-2">
                                <small class="ml-3 h3 text-secondary border-warning"><b class="count">
                                        <?php
                                        require_once("conexion/conexion.php");
                                        $query = "SELECT COUNT(Id_consulta) AS Total FROM consulta";
                                        $resultado = $conexion->query($query);
                                        $fila = $resultado->fetch_assoc();
                                        echo $fila['Total'];
                                        ?>
                                    </b></small>
                                <br>
                                <small class="ml-3 h6 text-secondary">Total de consultas</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3 p-0 p-1">
                        <div class="row no-gutters bg-white shadow-sm">
                            <div class="col-md-3 bg-success p-3">
                                <span class="icofont-handshake-deal h1 text-white"></span>
                            </div>
                            <div class="col-md-9 pt-2">
                                <small class="ml-3 h3 text-secondary border-success"><b class="count">
                                        <?php
                                        require_once("conexion/conexion.php");
                                        $query = "SELECT COUNT(Id_prestamo) AS Total FROM prestamos";
                                        $resultado = $conexion->query($query);
                                        $fila = $resultado->fetch_assoc();
                                        echo $fila['Total'];
                                        ?>
                                    </b></small>
                                <br>
                                <small class="ml-3 h6 text-secondary">Total de prestamos</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php require_once("footer.php") ?>

