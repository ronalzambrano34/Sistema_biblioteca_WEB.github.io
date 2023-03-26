<!-- Page Content  -->
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<div class="menu">
    <nav class="p-2 navbar navbar-expand-lg navbar-light color">
        <div class="container-fluid">
            <i class="fas fa-align-left"></i>
            <a href="#"><span id="sidebarCollapse" class="text-white h3 icofont-navigation-menu"></span></a>
            <div class="ml-3 text-center text-white">
                <!-- <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                        </div> -->
            </div>
            <button class="btn d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
                <span class="text-white h3 icofont-circled-down"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a data-toggle="modal" data-target="#exampleModalScrollable1" class="text-white h5 nav-link"
                            href="#" title="Nuestra empresa"><i class="mr-2 icofont-building-alt"></i></a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="modal" data-target="#exampleModalScrollable" class="text-white h5 nav-link"
                            href="#" title="Contactanos"><i class="mr-2 icofont-search-map"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white h5 nav-link" href="../inicio.php"><i class="icofont-ui-home"
                                title="Inicio"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="prestamos/pendientes.php" class="text-white h5 nav-link" href="#"><i
                                class="icofont-notification" title="Notificaciones"><span
                                    style="position: relative; top: -8px;" class="bg-warning badge count">
                                    <?php
                                    require_once("conexion/conexion.php");
                                    $buscar_pend = "SELECT COUNT(Id_prestamo) AS numero FROM prestamos WHERE Fecha_devolucion<NOW() AND Estatus='Pendiente'";
                                    $confirmar = $conexion->query($buscar_pend);
                                    $rows = $confirmar->fetch_assoc();
                                    echo $rows['numero'];
                                    ;
                                    ?>
                                </span></i></a>
                    </li>
                    <!-- Example single danger button -->
                    <li class="nav-item">
                        <div class="btn-group">
                            <button type="button" id="perfil" class="btn dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img width="43" height="43" src="../images/user.png" alt="">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="usuarios/perfil.php"><button class="dropdown-item" type="button">Actualizar
                                        perfil</button></a>
                                <a href="usuarios/modificar_contrasena.php"><button class="dropdown-item"
                                        type="button">Cambiar contraseña</button></a>
                                <div class="dropdown-divider"></div>
                                <a href="conexion/cerrar_sesion.php"><button class="dropdown-item" type="button">Cerrar
                                        sesión</button></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>


<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Contáctanos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <span class="text-info icofont-envelope h1"></span>
                                <br>
                                <small>Name: Ronal Zambrano Ferrer.</small>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <span class="text-info icofont-map h1"></span>
                                <br>
                                <small>Barrio: Bonampack</small>
                                <br>
                                <small>Calle: Yaxchilan</small>
                                <br>
                                <small>Número: 18</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <span class="text-info icofont-envelope h1"></span>
                                <br>
                                <small>Email: winalllpz@gmail.com</small>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <span class="text-info icofont-brand-whatsapp h1"></span>
                                <br>
                                <small>Tel: +53 53843778</small>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <span class="text-info icofont-facebook h1"></span>
                                <br>
                                <small>@GoldenLibrary</small>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalScrollable1" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Quiénes somos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <span class="text-info icofont-hat h1"></span>
                                <p class="card-title">Misión</p>
                                <small>Nuestra misión es poder dar a conocer toda la sabiduría a través de
                                    nuestros
                                    libros. Tener un repertorio digno para todas las personas; clases sociales,
                                    edades, grados y campos de estudio. Que nuestros libros sean del mayor
                                    agrado de
                                    nuestros visitadores, contando la mejor calidad de servicio en préstamos de
                                    títulos. Siempre con el cello de la casa.</small>
                                <br>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <span class="text-info icofont-eye h1"></span>
                                <p class="card-title">Visión</p>
                                <small>Nuestra visión es tener siempre tener una atención del público a pesar
                                    del
                                    tiempo en la que estamos, ser una de las instituciones de títulos literarios
                                    más
                                    conocidos del mundo. Tener instalaciones de calidad para preservar el buen
                                    espacio para leer, contar con el mejor trato de visitador-empleado, ya que
                                    nuestro público lo merece.</small>
                                <br>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <span class="text-info icofont-chart-histogram-alt h1"></span>
                                <p class="card-title">Objetivo General</p>
                                <small>Tener un sistema para poder llevar a cabo la administración de los
                                    registros
                                    que se generan día con día y hacer más fácil la búsqueda de visitantes, las
                                    personas que tienen préstamos y los adeudos de libros. También llevar un
                                    registro de los libros que puedan estar dañados y así hacer una petición de
                                    cambios.</small>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>