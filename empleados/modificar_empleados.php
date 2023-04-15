<?php require_once("../head_files.php") ?>



<ul class="list-unstyled components">
    <li class="Libros">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                class="icofont-library mr-3 h4 text-white"></span>Libros<i
                class="icofont-rounded-down text-white"></i></a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="../libros/registrar_libros.php">Registrar</a>
            </li>
            <li>
                <a href="../libros/libros.php">Consultar</a>
            </li>
            <li>
                <a onClick='abrirReporte()' href="#">Reportes</a>
            </li>
        </ul>
    </li>
    <li class="Asociados">
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                class="icofont-people mr-3 h4 text-white"></span>Asociados<i
                class="icofont-rounded-down text-white"></i></a>
        <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <a href="../personas/registrar_personas.php">Registrar</a>
            </li>
            <li>
                <a href="../personas/personas.php">Consultar</a>
            </li>
            <li>
                <!-- <a onClick='abrirReporte1()' href="#">Reportes</a> -->
                <a href="#">Reportes</a>
            </li>
        </ul>
    </li>
    <li class="Autores">
        <a href="#autoresSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                class="icofont-read-book-alt mr-3 h4 text-white"></span>Autores<i
                class="icofont-rounded-down text-white"></i></a>
        <ul class="collapse list-unstyled" id="autoresSubmenu">
            <li>
                <a href="../autores/registrar_autores.php">Registrar</a>
            </li>
            <li>
                <a href="../autores/autores.php">Consultar</a>
            </li>
            <li>
                <!-- <a onClick='abrirReporte2()' href="#">Reportes</a> -->
                <a href="#">Reportes</a>
            </li>
        </ul>
    </li>
    <li class="Empleados" hidden>
        <a href="#empleadosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                class="icofont-business-man mr-3 h4 text-white"></span>Empleados<i
                class="icofont-rounded-down text-white"></i></a>
        <ul class="collapse list-unstyled" id="empleadosSubmenu">
            <li>
                <a href="registrar_empleados.php">Registrar</a>
            </li>
            <li>
                <a href="empleados.php">Consultar</a>
            </li>
            <li>
                <a onClick='abrirReporte3()' href="#">Reportes</a>
            </li>
        </ul>
    </li>
    <li class="Visitas">
        <a href="#visitaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                class="icofont-learn mr-3 h4 text-white"></span>Visitas<i
                class="icofont-rounded-down text-white"></i></a>
        <ul class="collapse list-unstyled" id="visitaSubmenu">
            <li>
                <a href="../visitas/registrar_visitas.php">Registrar</a>
            </li>
            <li>
                <a href="../visitas/visitas.php">Consultar</a>
            </li>
            <li>
                <!-- <a onClick='abrirReporte4()' href="#">Reportes</a> -->
                <a href="#">Reportes</a>
            </li>
        </ul>
    </li>
    <li class="Prestamos">
        <a href="#prestamoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                class="icofont-paper mr-3 h4 text-white"></span>Prestamos<i
                class="icofont-rounded-down text-white"></i></a>
        <ul class="collapse list-unstyled" id="prestamoSubmenu">
            <li>
                <a href="../prestamos/registrar_prestamos.php">Registrar</a>
            </li>
            <li>
                <a href="../prestamos/prestamos.php">Consultar</a>
            </li>
            <li>
                <!-- <a onClick='abrirReporte5()' href="#">Reportes</a> -->
                <a href="#">Reportes</a>
            </li>
        </ul>
    </li>
    <hr style="border-top: 1px dotted white;">
    <li class="Puestos">
        <a href="#puestoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                class="icofont-tick-boxed mr-3 h4 text-white"></span>Puestos<i
                class="icofont-rounded-down text-white"></i></a>
        <ul class="collapse list-unstyled" id="puestoSubmenu">
            <li>
                <a href="../puestos/registrar_puesto.php">Registrar</a>
            </li>
            <li>
                <a href="../puestos/puestos.php">Consultar</a>
            </li>
        </ul>
    </li>
    <li class="Usuarios">
        <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                class="icofont-users-alt-4 mr-3 h4 text-white"></span>Usuarios<i
                class="icofont-rounded-down text-white"></i></a>
        <ul class="collapse list-unstyled" id="userSubmenu">
            <li>
                <a href="../usuarios/registrar_usuarios.php">Registrar</a>
            </li>
            <li>
                <a href="../usuarios/usuarios.php">Consultar</a>
            </li>
        </ul>
    </li>
</ul>
</nav>

<div class="container">
    <br><br><br><br>
    <div class="bg-white rounded-lg formulario">
        <?php
        $id = $_REQUEST['id'];
        require_once("../conexion/conexion.php");
        $query = "SELECT empleados.Id_empleado,personas.Nombre,empleados.Fecha_contratacion,puesto.Descripcion,puesto.Id_puesto
                                FROM personas,empleados,puesto WHERE personas.Id_persona=empleados.Id_persona
                                AND empleados.Id_puesto=puesto.Id_puesto AND empleados.Id_empleado=$id";
        $resultado = $conexion->query($query);
        $fila = $resultado->fetch_assoc();
        ?>
        <form class="p-4 needs-validation" action="realizar_edicion.php?id=<?php echo $fila['Id_empleado'] ?>"
            method="POST" novalidate>
            <center><label class="mt-2" for="">
                    <h4>ACTUALIZAR EMPLEADOS</h4>
                </label></center>
            <div class="form-row">
                <div class="col-md-6 col-lg-6 mb-4">
                    <label for="validationCustom01">Nombre</label>
                    <input type="text" class="form-control" id="validationCustom01" required name="nombre"
                        value="<?php echo $fila['Nombre'] ?>" readonly>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                    <div class="invalid-feedback">
                        Porfavor rellena el campo.
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <label for="validationCustom02">Puesto</label>
                    <select id="validationCustom02" name="puesto" class="form-control" required>
                        <option value="<?php echo $fila['Id_puesto'] ?>" disabled select><?php echo $fila['Descripcion'] ?></option>
                        <?php
                        include('../conexion/conexion.php');
                        $query1 = "SELECT * FROM puesto";
                        $resultados = $conexion->query($query1);
                        while ($filas = mysqli_fetch_array($resultados)) {
                            echo '<option value="' . $filas["Id_puesto"] . '">' . $filas["Descripcion"] . '</option>';
                        }
                        ?>
                    </select>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                    <div class="invalid-feedback">
                        Porfavor rellena el campo.
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <label for="validationCustom03">Fecha de contratación</label>
                    <input type="date" class="form-control" id="validationCustom03" name="fecha" required
                        value="<?php echo $fila['Fecha_contratacion'] ?>">
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                    <div class="invalid-feedback">
                        Porfavor rellena el campo.
                    </div>
                </div>
            </div>
            <button class="btn btn-warning text-white" type="submit" name="registrar">Actualizar</button>
        </form>
    </div>
    <br>
</div>
<script src="../push/push.min.js" type="text/javascript"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</div>

<!-- Footer -->
<?php require("../footer.php") ?>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script>
<!-- Bootstrap JS -->
<script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('.toast').toast('show');
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });

    function launchFullScreen(element) {
        if (element.requestFullScreen) {
            element.requestFullScreen();
        } else if (element.mozRequestFullScreen) {
            element.mozRequestFullScreen();
        } else if (element.webkitRequestFullScreen) {
            element.webkitRequestFullScreen();
        }
    }
    // Lanza en pantalla completa en navegadores que lo soporten
    function cancelFullScreen() {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        }
    }
</script>
<script>
    function abrirReporte() {
        window.open("../reporte_libros/index.php", "Reporte de libros", "directories=no location=no");
    }

    function abrirReporte1() {
        window.open("../reporte_personas/index.php", "Reporte de personas", "directories=no location=no");
    }

    function abrirReporte2() {
        window.open("../reporte_autores/index.php", "Reporte de autores", "directories=no location=no");
    }

    function abrirReporte3() {
        window.open("../reporte_empleados/index.php", "Reporte de empleados", "directories=no location=no");
    }

    function abrirReporte4() {
        window.open("../reporte_visitas/index.php", "Reporte de visitas", "directories=no location=no");
    }

    function abrirReporte5() {
        window.open("../reporte_prestamos/index.php", "Reporte de prestamos", "directories=no location=no");
    }
</script>
</body>

</html>