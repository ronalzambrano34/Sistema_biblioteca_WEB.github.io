<!-- Page Content  -->
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
                        <a class="text-white h5 nav-link" href="inicio.php"><i class="icofont-ui-home"
                                title="Inicio"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="prestamos/pendientes.php" class="text-white h5 nav-link" href="#"><i
                                class="icofont-notification" title="Notificaciones"><span
                                    style="position: relative; top: -8px;" class="bg-warning badge count">
                                    <?php
                                    require_once("conexion/conexion.php");
                                    $buscar_pend = "SELECT COUNT(prestamos.Id_prestamo) AS numero FROM prestamos,personas WHERE prestamos.Fecha_devolucion < NOW() AND prestamos.Estatus = 'Pendiente' AND prestamos.Id_persona=personas.Id_persona AND personas.Activo=1";
                                    $confirmar = $conexion->query($buscar_pend);
                                    $rows = $confirmar->fetch_assoc();
                                    echo $rows['numero'];
                                    ?>
                                </span></i></a>
                    </li>
                    <!-- Example single danger button -->
                    <li class="nav-item">
                        <div class="btn-group">
                            <button type="button" id="perfil" class="btn dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img width="43" height="43" src="images/user.png" alt="">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small text-light">
                                    <?php echo $_SESSION['Nombre_usuario']; ?>
                                </span>
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

