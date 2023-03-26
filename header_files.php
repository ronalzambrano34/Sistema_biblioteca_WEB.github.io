<?php
session_cache_expire(30);
$cache_expire = session_cache_expire();
session_start();

$id = $_SESSION['Id_usuario'];
$usuario = $id;
if ($id == null || $id = '') {
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Golden Library</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/style.css">
    <link rel="stylesheet" type="text/css" href="../icofont/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/sweetalert.css">
    <script src="../vendor/bootstrap/js/sweetalert.min.js" type="text/javascript"></script>
</head>


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
                                <small>Barrio: </small>
                                <br>
                                <small>Calle: </small>
                                <br>
                                <small>Número: </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <span class="text-info icofont-envelope h1"></span>
                                <br>
                                <small>Email: ronalzambrano34@gmail.com</small>
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
                                <small>@</small>
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