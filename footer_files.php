
    <!-- Footer -->
    <footer class=" ">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-md-4">
                    <p class="text-white pt-3"><small><b>Copyright &copy; 2020 </b>Librería Catedral todos los derechos
                            reservados</small></p>
                </div>
                <div class="col-md-4 text-white mt-3 mb-2">
                    <div class="contaiter">
                        <a href="conexion/desarolladores.php">Desarolladores</a>
                        <br>
                        <small>Version 3.0</small>
                    </div>
                </div>
                <div class="col-md-4 text-white mt-3 mb-2">
                    <div class="container">
                        <div class="d-inline">
                            <a href="" class="rounded-lg border border-info pt-2 p-2"><span
                                    class="icofont-facebook text-white h6"></span></a>
                        </div>
                        <div class="d-inline">
                            <a href="" class="rounded-lg border border-info pt-2 p-2"><span
                                    class="icofont-brand-whatsapp text-white h6"></span></a>
                        </div>
                        <div class="d-inline">
                            <a href="" class="rounded-lg border border-info pt-2 p-2"><span
                                    class="icofont-instagram text-white h6"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </footer>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap JS -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../vendor/bootstrap/js/counter.js" type="text/javascript"></script>
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
            window.open("reporte_consultas/index.php", "Reporte de consultas", "directories=no location=no");
        }
        function abrirReporte5() {
            window.open("reporte_prestamos/index.php", "Reporte de prestamos", "directories=no location=no");
        }
    </script>
</body>

</html>