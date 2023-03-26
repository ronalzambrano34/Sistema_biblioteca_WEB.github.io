<?php require_once("../head_files.php") ?>


      <ul class="list-unstyled components">
        <li class="">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
              class="icofont-library mr-3 h4 text-white"></span>Libros<i
              class="icofont-rounded-down text-white"></i></a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
              <a href="registrar_libros.php">Registrar</a>
            </li>
            <li>
              <a href="libros.php">Consultar</a>
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
              <a href="../personas/registrar_personas.php">Registrar</a>
            </li>
            <li>
              <a href="../personas/personas.php">Consultar</a>
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
              <a href="../autores/registrar_autores.php">Registrar</a>
            </li>
            <li>
              <a href="../autores/autores.php">Consultar</a>
            </li>
            <li>
              <a onClick='abrirReporte2()' href="#">Reportes</a>
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
          <a href="#consultaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
              class="icofont-learn mr-3 h4 text-white"></span>Consultas<i
              class="icofont-rounded-down text-white"></i></a>
          <ul class="collapse list-unstyled" id="consultaSubmenu">
            <li>
              <a href="../consultas/registrar_consultas.php">Registrar</a>
            </li>
            <li>
              <a href="../consultas/consultas.php">Consultar</a>
            </li>
            <li>
              <a onClick='abrirReporte4()' href="#">Reportes</a>
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
      <br>
      <div class="bg-white rounded-lg formulario">
        <form class="p-4 needs-validation" action="registrar_libros.php" method="POST" novalidate>
          <center><label for="">
              <h4>REGISTRAR LIBROS</h4>
            </label></center>
          <div class="form-row">
            <div class="col-md-4 col-lg-6 mb-4">
              <label for="validationCustom01">Titulo</label>
              <input type="text" class="form-control" autocomplete="off" id="validationCustom01" required name="titulo"
                placeholder="Titulo del libro"
                pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
                maxlength="50">
              <div class="valid-feedback">
                Correcto!
              </div>
              <div class="invalid-feedback">
                Porfavor rellena el campo.
              </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">
              <label for="validationCustom02">Copias</label>
              <input type="text" class="form-control" id="validationCustom02" required name="copias"
                placeholder="Número de copias" pattern="[0-9]{1}">
              <div class="valid-feedback">
                Correcto!
              </div>
              <div class="invalid-feedback">
                Porfavor rellena el campo.
              </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">
              <label for="validationCustom03">Editorial</label>
              <input type="text" class="form-control" id="validationCustom03" required name="editorial"
                placeholder="Editorial"
                pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
                maxlength="30">
              <div class="valid-feedback">
                Correcto!
              </div>
              <div class="invalid-feedback">
                Porfavor rellena el campo.
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 col-lg-4 mb-3">
              <label for="validationCustom04">Fecha de ultima edición</label>
              <input type="date" class="form-control" id="validationCustom04" name="fecha">
              <div class="valid-feedback">
                Correcto!
              </div>
              <div class="invalid-feedback">
                Porfavor rellena el campo.
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
              <label for="validationCustom05">Categoría</label>
              <input type="text" class="form-control" id="validationCustom05" required name="cate"
                placeholder="Categoría"
                pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
                maxlength="30">
              <div class="valid-feedback">
                Correcto!
              </div>
              <div class="invalid-feedback">
                Porfavor rellena el campo.
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
              <label for="validationCustom06">Número de Estante</label>
              <input type="text" class="form-control" id="validationCustom06" required name="estante"
                placeholder="Número de estante" pattern="[0-9]{1}">
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
    $titulo = $_POST['titulo'];
    $copias = $_POST['copias'];
    $editorial = $_POST['editorial'];
    $fecha = $_POST['fecha'];
    $cate = $_POST['cate'];
    $estante = $_POST['estante'];

    $query = "INSERT INTO libros (Titulo,Copias,Editorial,Fecha_edicion,Categoria,Estante) values('$titulo',$copias,'$editorial','$fecha','$cate',$estante)";
    $verificar = $conexion->query($query);
    if ($verificar) {
      echo '<script>
                    swal({
                    title: "Operación exitosa",
                    text: "El libro fue registrado correctamente!",
                    type: "success",
                    showCancelButton: true,
                    cancelButtonClass: "btn-warning",
                    cancelButtonText: "Registrar",
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Ver libros",
                    closeOnConfirm: false
                  },
                  function(isConfirm) {
                      if (isConfirm) {
                        window.location="libros.php";
                      } else {
                        window.location="registrar_libros.php";
                      }
                    });
                    </script>';
    } else {
      echo '<script>
                    swal({
                    title: "Operación fallida",
                    text: "Ocurrio un error al registrar el libro!",
                    type: "error",
                    showCancelButton: true,
                    cancelButtonClass: "btn-warning",
                    cancelButtonText: "Intentar de nuevo",
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Ver libros",
                    closeOnConfirm: false
                  },
                  function(isConfirm) {
                      if (isConfirm) {
                        window.location="libros.php";
                      } else {
                        window.location="registrar_libros.php";
                      }
                    });
                    </script>';
    }
  }
  ?>
  <!-- Footer -->
  <footer class=" ">
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-4">
          <p class="text-white pt-3"><small><b>Copyright &copy; 2023 </b>Ronal Zambrano Ferrer todos los derechos
              reservados</small></p>
        </div>
        <div class="col-md-4 text-white mt-3 mb-2">
          <div class="contaiter">
            <a href="../conexion/desarolladores.php">Desarolladores</a>
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
      window.open("../reporte_consultas/index.php", "Reporte de consultas", "directories=no location=no");
    }
    function abrirReporte5() {
      window.open("../reporte_prestamos/index.php", "Reporte de prestamos", "directories=no location=no");
    }
  </script>
</body>

</html>