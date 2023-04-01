<?php require_once("../head_files.php") ?>



<ul class="list-unstyled components">
    <li class="">
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
                <!-- <a onClick='abrirReporte()' href="#">Reportes</a> -->
                            <a href="#">Reportes</a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                class="icofont-people mr-3 h4 text-white"></span>Asociados<i
                class="icofont-rounded-down text-white"></i></a>
        <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <a href="registrar_personas.php">Registrar</a>
            </li>
            <li>
                <a href="personas.php">Consultar</a>
            </li>
            <li>
                <!-- <a onClick='abrirReporte1()' href="#">Reportes</a> -->
                            <a href="#">Reportes</a>
            </li>
        </ul>
    </li>
    <li class="">
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
    <li class="">
        <a href="#empleadosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                class="icofont-business-man mr-3 h4 text-white"></span>Empleados<i
                class="icofont-rounded-down text-white"></i></a>
        <ul class="collapse list-unstyled" id="empleadosSubmenu">
            <li>
                <a href="../empleados/registrar_empleados.php">Registrar</a>
            </li>
            <li>
                <a href="../empleados/empleados.php">Consultar</a>
            </li>
            <li>
                <a onClick='abrirReporte3()' href="#">Reportes</a>
            </li>
        </ul>
    </li>
    <li class="">
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
    <li class="">
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
    <li class="">
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
    <li class="">
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
<div class="container table-responsive">
    <br><br><br><br>
    <form action="#" class="form" method="POST">
        <div class="form-row container">
            <div class="col-md-6 col-lg-5">
                <div class="input-group">
                    <input type="search" name="dato" placeholder="Nobre del asociado"
                        class="form-control shadow-sm border-0" autocomplete="off">
                    <div class="input-group-prepend bg-white p-0" style="z-index: 0;">
                        <button name="buscar" type="submit"
                            class="input-group-text btn btn-danger border-0 shadow-sm icofont-search-1"></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class=" d-flex justify-content-end">
                    <a class="bg-success text-white h4 py-10 rounded" href="./registrar_personas.php"><i class="p-2 icofont-plus">Nuevo</i></a>
                </div>
            </div>
        </div>
        <br>
                <div class="container-fluid table-responsive p-0" style="height: 480px" id="datos">
                    <table class='table table-sm table-hover table-head-fixed gb-white shadow-sm'>
                <thead>
                    <tr class='bg-warning text-white font-weight-bold'>
                        <th class='text-center'><small>ID</small></th>
                        <th class='text-center'><small>Nombre</small></th>
                        <th class='text-center'><small>CI</small></th>
                        <th class='text-center'><small>Sexo</small></th>
                        <th class='text-center'><small>Fecha de inscripción</small></th>
                        <th class='text-center'><small>Direción</small></th>
                        <th class='text-center'><small>Teléfono</small></th>
                        <th colspan='2' class='text-center'><small>Acciones</small></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_POST['buscar']) && $_POST['buscar'] != '') {
                        require_once("../conexion/conexion.php");
                        $dato = $_POST['dato'];
                        $salida = "";
                        $query = "SELECT * FROM personas WHERE Nombre LIKE '$dato%' AND Activo=1";

                    } else {
                        require_once("../conexion/conexion.php");
                        $query = "SELECT * FROM personas WHERE activo=1";

                    }
                    $resultado = $conexion->query($query);
                    while ($fila = $resultado->fetch_assoc()) {
                        $id = $fila['Id_persona'];
                        ?>
                        <tr class='text-center'>
                            <td><small>
                                    <?php echo $fila['Id_persona']; ?>
                                </small></td>
                            <td><small>
                                    <?php echo $fila['Nombre']; ?>
                                </small></td>
                            <td><small>
                                    <?php echo $fila['CI']; ?>
                                </small></td>
                            <td><small>
                                    <?php echo $fila['Sexo']; ?>
                                </small></td>
                            <td><small>
                                    <?php echo $fila['Fecha_inscripcion']; ?>
                                </small></td>
                            <td><small>
                                    <?php echo $fila['Direccion']; ?>
                                </small></td>
                            <td><small>
                                    <?php echo $fila['Telefono']; ?>
                                </small></td>
                            <td><a class="bg-primary py-1 rounded-lg"
                                    href="modificar_personas.php?id=<?php echo $fila['Id_persona'] ?>"><span
                                        class='h6 text-white icofont-ui-edit px-1'></span></a></td>
                            <td><a class="bg-danger py-1 rounded-lg" href="#" onclick="confirmar(<?php echo $id; ?>)"><span
                                        class='h6 text-white icofont-ui-delete px-1'></span></a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </form>
</div>
</div>

<!-- Footer -->
<?php require("../footer.php") ?>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script>
<!-- Bootstrap JS -->
<script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
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
<script language="javascript">
    function confirmar(id) {
        swal({
            title: "Advertecia!",
            text: "¿Esta seguro de eliminar al asociado?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-primary ",
            confirmButtonText: "Eliminar",
            cancelButtonClass: "btn-danger",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
        },
            function (isConfirm) {
                if (isConfirm) {
                    window.location = "eliminar.php?id=" + id;
                } else {
                    swal({
                        title: "Operación cancelada!",
                        text: "El asociado no fue eliminado",
                        type: "error",
                        confirmButtonClass: "btn-primary",
                        confirmButtonText: "Volver",
                        closeOnConfirm: false
                    },);
                }
            });
    }
</script>
<script>
    function abrirReporte() {
        window.open("../reporte_libros/index.php", "Reporte de libros", "directories=no location=no");
    }
    function abrirReporte1() {
        window.open("../reporte_personas/index.php", "Reporte de asociado", "directories=no location=no");
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