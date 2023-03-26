<?php
// session_cache_expire(1);
// $cache_expire = session_cache_expire();
session_start();
$id = $_SESSION['Id_usuario'];
$usuario = $id;
if ($id == null || $id = '') {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Librería</title>

    <!--ICO-->
    <link rel="icon" href="images/logo.png" sizes="32x32" />
    <link rel="icon" href="images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="images/logo.png" />

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/style.css">
    <link rel="stylesheet" type="text/css" href="icofont/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="inicio.php"><img width="55" height="45" src="images/logo.png" alt="">Librería
                    <b>Catedral</b></a>
            </div>
            <ul class="list-unstyled components">
                <li class="">
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
                <li class="">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                            class="icofont-people mr-3 h4 text-white"></span>Personas<i
                            class="icofont-rounded-down text-white"></i></a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="./personas/registrar_personas.php">Registrar</a>
                        </li>
                        <li>
                            <a href="./personas/personas.php">Consultar</a>
                        </li>
                        <li>
                            <a onClick='abrirReporte1()' href="#">Reportes</a>
                        </li>
                    </ul>
                </li>
                <li class="">
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
                            <a onClick='abrirReporte2()' href="#">Reportes</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#empleadosSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle"><span class="icofont-business-man mr-3 h4 text-white"></span>Empleados<i
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
                <li class="">
                    <a href="#puestoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
                            class="icofont-tick-boxed mr-3 h4 text-white"></span>Puestos<i
                            class="icofont-rounded-down text-white"></i></a>
                    <ul class="collapse list-unstyled" id="puestoSubmenu">
                        <li>
                            <a href="./puestos/registrar_puesto.php">Registrar</a>
                        </li>
                        <li>
                            <a href="./puestos/puestos.php">Consultar</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#consultaSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle"><span class="icofont-learn mr-3 h4 text-white"></span>Consultas<i
                            class="icofont-rounded-down text-white"></i></a>
                    <ul class="collapse list-unstyled" id="consultaSubmenu">
                        <li>
                            <a href="./consultas/registrar_consultas.php">Registrar</a>
                        </li>
                        <li>
                            <a href="./consultas/consultas.php">Consultar</a>
                        </li>
                        <li>
                            <a onClick='abrirReporte4()' href="#">Reportes</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#prestamoSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle"><span class="icofont-paper mr-3 h4 text-white"></span>Prestamos<i
                            class="icofont-rounded-down text-white"></i></a>
                    <ul class="collapse list-unstyled" id="prestamoSubmenu">
                        <li>
                            <a href="./prestamos/registrar_prestamos.php">Registrar</a>
                        </li>
                        <li>
                            <a href="./prestamos/prestamos.php">Consultar</a>
                        </li>
                        <li>
                            <a onClick='abrirReporte5()' href="#">Reportes</a>
                        </li>
                    </ul>
                </li>
                <li class="">
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

        <!-- Page Content  -->
        <?php include("header.php") ?>