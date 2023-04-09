<?php require_once("../head_files.php") ?>



<ul class="list-unstyled components">
    <li class="Libros">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                class="icofont-library mr-3 h4 text-white"></span>Libros<i
                class="icofont-rounded-down text-white"></i></a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="./libros/registrar_libros.php">Registrar</a>
            </li>
            <li>
                <a href="./libros/libros.php">Consultar</a>
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
                <a href="./personas/registrar_personas.php">Registrar</a>
            </li>
            <li>
                <a href="./personas/personas.php">Consultar</a>
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
                <a href="./autores/registrar_autores.php">Registrar</a>
            </li>
            <li>
                <a href="./autores/autores.php">Consultar</a>
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
                <a href="./empleados/registrar_empleados.php">Registrar</a>
            </li>
            <li>
                <a href="./empleados/empleados.php">Consultar</a>
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
                <a href="./visitas/registrar_visitas.php">Registrar</a>
            </li>
            <li>
                <a href="./visitas/visitas.php">Consultar</a>
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
                <a href="./prestamos/registrar_prestamos.php">Registrar</a>
            </li>
            <li>
                <a href="./prestamos/prestamos.php">Consultar</a>
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
                <a href="registrar_puesto.php">Registrar</a>
            </li>
            <li>
                <a href="puestos.php">Consultar</a>
            </li>
        </ul>
    </li>
    <li class="Usuarios">
        <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                class="icofont-users-alt-4 mr-3 h4 text-white"></span>Usuarios<i
                class="icofont-rounded-down text-white"></i></a>
        <ul class="collapse list-unstyled" id="userSubmenu">
            <li>
                <a href="./usuarios/registrar_usuarios.php">Registrar</a>
            </li>
            <li>
                <a href="./usuarios/usuarios.php">Consultar</a>
            </li>
        </ul>
    </li>
</ul>
</nav>
<div class="container">
    <br><br><br><br>
    <div class="bg-white rounded-lg formulario">
        <form class="p-4 needs-validation" action="registrar_puesto.php" method="POST" novalidate>
            <center><label class="mt-2" for="">
                    <h4>REGISTRAR PUESTOS</h4>
                </label></center>
            <div class="form-row">
                <div class="col-md-12 col-lg-6 mb-4">
                    <label for="validationCustom01">Nombre del Puesto</label>
                    <input type="text" class="form-control" id="validationCustom01" required name="puesto"
                        placeholder="Puesto">
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                    <div class="invalid-feedback">
                        Porfavor rellena el campo.
                    </div>
                </div>
            </div>
            <button class="btn btn-warning text-white" type="submit" name="registrar">Registrar</button>
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
<?php
if (isset($_POST['registrar'])) {
    require_once("../conexion/conexion.php");
    $puesto = $_POST['puesto'];
    $query = "INSERT INTO puesto (Descripcion) VALUES ('$puesto')";
    $verificar = $conexion->query($query);
    if ($verificar) {
        echo '<script>
                    swal({
                    title: "Operación exitosa",
                    text: "El puesto fue registrado correctamente!",
                    type: "success",
                    showCancelButton: true,
                    cancelButtonClass: "btn-warning",
                    cancelButtonText: "Registrar",
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Ver puestos",
                    closeOnConfirm: false
                  },
                  function(isConfirm) {
                      if (isConfirm) {
                        window.location="puestos.php";
                      } else {
                        window.location="registrar_puesto.php";
                      }
                    });
                    </script>';
    } else {
        echo '<script>
                    swal({
                    title: "Operación fallida",
                    text: "Ocurrio un error al registrar el puesto!",
                    type: "error",
                    showCancelButton: true,
                    cancelButtonClass: "btn-warning",
                    cancelButtonText: "Intentar de nuevo",
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Ver puestos",
                    closeOnConfirm: false
                  },
                  function(isConfirm) {
                      if (isConfirm) {
                        window.location="puestos.php";
                      } else {
                        window.location="registrar_puesto.php";
                      }
                    });
                    </script>';
    }
}
?>

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