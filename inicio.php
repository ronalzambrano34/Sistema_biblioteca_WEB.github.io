<?php require_once("head.php") ?>


<div class="container">
    <br><br>
    <br><br>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-5 col-lg-3 p-0 p-1">
                <a href="./libros/libros.php">
                    <div class="row no-gutters bg-white shadow-sm">
                        <div class="col-md-3 bg-danger p-3">
                            <span class="icofont-library h1 text-white"></span>
                        </div>
                        <div class="col-md-9 pt-2">
                            <small class="ml-3 h3 text-secondary border-danger"><b class="count">
                                    <?php
                                    require_once("conexion/conexion.php");
                                    $query = "SELECT COUNT(Id_libro) AS Total FROM libros WHERE Activo=1";
                                    $resultado = $conexion->query($query);
                                    $fila = $resultado->fetch_assoc();
                                    echo $fila['Total'];
                                    ?>
                                </b></small>
                            <br>
                            <small class="ml-3 h6 text-secondary">Total de libros</small>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-5 col-lg-3 p-0 p-1">
                <a href="./personas/personas.php">
                    <div class="row no-gutters bg-white shadow-sm">
                        <div class="col-md-3 bg-info p-3">
                            <span class="icofont-business-man-alt-1 h1 text-white"></span>
                        </div>
                        <div class="col-md-9 pt-2">
                            <small class="ml-3 h3 text-secondary border-info"><b class="count">
                                    <?php
                                    require_once("conexion/conexion.php");
                                    $query = "SELECT COUNT(Id_persona) AS Total FROM personas WHERE Activo=1";
                                    $resultado = $conexion->query($query);
                                    $fila = $resultado->fetch_assoc();
                                    echo $fila['Total'];
                                    ?>
                                </b></small>
                            <br>
                            <small class="ml-3 h6 text-secondary">Total de Personas</small>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-5 col-lg-3 p-0 p-1">
                <a href="./visitas/visitas.php">
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
                            <small class="ml-3 h6 text-secondary">Total de visitas</small>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-5 col-lg-3 p-0 p-1">
                <a href="./prestamos/prestamos.php">
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
                </a>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Footer -->
<?php require("footer.php") ?>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
<!-- Bootstrap JS -->
<script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="vendor/bootstrap/js/counter.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        })
    });
</script>
<script>
    function abrirReporte() {
        window.open("reporte_libros/index.php", "Reporte de libros", "directories=no location=no");
    }
    function abrirReporte1() {
        window.open("reporte_personas/index.php", "Reporte de personas", "directories=no location=no");
    }
    function abrirReporte2() {
        window.open("reporte_autores/index.php", "Reporte de autores", "directories=no location=no");
    }
    function abrirReporte3() {
        window.open("reporte_empleados/index.php", "Reporte de empleados", "directories=no location=no");
    }
    function abrirReporte4() {
        window.open("reporte_visitas/index.php", "Reporte de visitas", "directories=no location=no");
    }
    function abrirReporte5() {
        window.open("reporte_prestamos/index.php", "Reporte de prestamos", "directories=no location=no");
    }
</script>
</body>

</html>