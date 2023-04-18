<?php require("../head_files.php") ?>

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
                    <a href="#empleadosSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle"><span class="icofont-business-man mr-3 h4 text-white"></span>Empleados<i
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
                    <a href="#prestamoSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle"><span class="icofont-paper mr-3 h4 text-white"></span>Prestamos<i
                            class="icofont-rounded-down text-white"></i></a>
                    <ul class="collapse list-unstyled" id="prestamoSubmenu">
                        <li>
                            <a href="registrar_prestamos.php">Registrar</a>
                        </li>
                        <li>
                            <a href="prestamos.php">Consultar</a>
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
    <div class="">
        <?php
        $id = $_REQUEST['id'];
        require_once("../conexion/conexion.php");
        $query = "SELECT prestamos.Id_prestamo,personas.Nombre,prestamos.Cantidad,prestamos.Identificacion,
                                prestamos.Fecha_prestamo,prestamos.Fecha_devolucion,libros.Titulo,detalle.Descripcion,
                                prestamos.Estatus FROM libros,prestamos,detalle,personas WHERE
                                prestamos.Id_persona=personas.Id_persona AND libros.Id_libro=detalle.Id_libro AND
                                prestamos.Id_prestamo=detalle.Id_prestamo AND prestamos.Id_prestamo=$id";
        $resultado = $conexion->query($query);
        $fila = $resultado->fetch_assoc();

        $query1 = "SELECT personas.Nombre FROM empleados,prestamos,personas WHERE empleados.Id_persona=personas.Id_persona AND prestamos.Id_empleado=empleados.Id_empleado AND prestamos.Id_prestamo=$id";
        $resultado1 = $conexion->query($query1);
        $fila1 = $resultado1->fetch_assoc();
        ?>
        <form class="p-4 needs-validation" action="realizar_edicion.php?id=<?php echo $fila['Id_prestamo'] ?>"
            method="POST" novalidate>
            <div class="bg-white bg-white rounded-lg shadow-sm p-3">
                <center><label for="">
                        <h4>ACTUALIZAR PRESTAMOS <sup class="btn bg-info">#
              <?php echo $fila['Id_prestamo'] ?>
            </sup></h4>
                    </label></center>
                <div class="form-row">
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                        <label for="validationCustom01">Nombre persona</label>
                        <input type="text" class="form-control" readonly value="<?php echo $fila['Nombre']; ?>">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                        <label for="validationCustom02">Empleado</label>
                        <input type="text" class="form-control" readonly value="<?php echo $fila1['Nombre']; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
                        <label for="validationCustom01">Cantidad</label>
                        <input type="number" class="form-control" readonly value="<?php echo $fila['Cantidad']; ?>">
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-3">
                        <label for="validationCustom05">Fecha de prestamo</label>
                        <input type="date" class="form-control" readonly value="<?php echo $fila['Fecha_prestamo']; ?>">
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-3">
                        <label for="validationCustom05">Fecha de devolucion</label>
                        <input type="date" class="form-control" readonly
                            value="<?php echo $fila['Fecha_devolucion']; ?>">
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 mb-3">
                        <label for="validationCustom09">Estatus</label>
                        <select class="form-control" id="validationCustom09" required name="estatus">
                            <option value="<?php echo $fila['Estatus'] ?>"><?php echo $fila['Estatus'] ?></option>
                            <?php
                            $sexo = $fila['Estatus'];
                            if ($sexo == "Pendiente") {
                                echo '<option value="Entregado">Entregado</option>';
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
                </div>
                <button class="btn btn-warning text-white mb-3" type="submit" name="registrar">Actualizar</button>
            </div>
            <br>
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

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div style="max-width: 90%;" class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Buscar Personas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Nombre de la persona</label>
                        <input type="search" class="form-control" name="buscar" id="buscar"
                            placeholder="Miguel López López">
                    </div>
                </div>
                <br>
                <div class="table-responsive datos" id="datos">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div style="max-width: 90%;" class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Buscar Libros</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Titulo del libro</label>
                        <input type="search" class="form-control" name="buscar" id="buscar" placeholder="Los 3 cerditos"
                            autocomplete="off">
                    </div>
                </div>
                <br>
                <div class="table-responsive datos" id="datos1">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<?php require("../footer.php") ?>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script>
<!-- Bootstrap JS -->
<script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../vendor/bootstrap/js/fila.js" type="text/javascript"></script>
<script src="../vendor/bootstrap/js/buscar_persona.js" type="text/javascript"></script>
<script src="../vendor/bootstrap/js/buscar_persona1.js" type="text/javascript"></script>
<script type="text/javascript">
    $(buscar_1());
    function buscar_1(consulta) {
        $.ajax({
            url: '../conexion/buscar.php',
            type: 'POST',
            dataType: 'html',
            data: { consulta: consulta },
        })
            .done(function (respuesta) {
                $("#caja1").html(respuesta);
            })
            .fail(function () {
                console.log("error");
            })
    }
    $(document).on('keyup', '#validationCustom08', function () {
        var valor = $(this).val();
        if (valor != "") {
            buscar_1(valor);
        } else {
            buscar_1();
        }

    })
</script>
<script type="text/javascript">
    $(buscar_libros_1());
    function buscar_libros_1(consulta) {
        $.ajax({
            url: '../conexion/buscar_libro.php',
            type: 'POST',
            dataType: 'html',
            data: { consulta: consulta },
        })
            .done(function (respuesta) {
                $("#datos1").html(respuesta);
            })
            .fail(function () {
                console.log("error");
            })
    }
    $(document).on('keyup', '#buscar', function () {
        var valor = $(this).val();
        if (valor != "") {
            buscar_libros_1(valor);
        } else {
            buscar_libros_1();
        }

    })
</script>
<script type="text/javascript">
    $(buscar_2());
    function buscar_2(consulta) {
        $.ajax({
            url: '../conexion/buscar.php',
            type: 'POST',
            dataType: 'html',
            data: { consulta: consulta },
        })
            .done(function (respuesta) {
                $("#caja2").html(respuesta);
            })
            .fail(function () {
                console.log("error");
            })
    }
    $(document).on('keyup', '#validationCustom09', function () {
        var valor = $(this).val();
        if (valor != "") {
            buscar_2(valor);
        } else {
            buscar_2();
        }

    })
</script>
<script type="text/javascript">
    $(buscar_3());
    function buscar_3(consulta) {
        $.ajax({
            url: '../conexion/buscar.php',
            type: 'POST',
            dataType: 'html',
            data: { consulta: consulta },
        })
            .done(function (respuesta) {
                $("#caja3").html(respuesta);
            })
            .fail(function () {
                console.log("error");
            })
    }
    $(document).on('keyup', '#validationCustom10', function () {
        var valor = $(this).val();
        if (valor != "") {
            buscar_3(valor);
        } else {
            buscar_3();
        }

    })
</script>
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