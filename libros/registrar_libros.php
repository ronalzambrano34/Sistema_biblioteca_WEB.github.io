<?php require_once("../head_files.php") ?>


<ul class="list-unstyled components">
  <li class="Libros">
    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
        class="icofont-library mr-3 h4 text-white"></span>Libros<i class="icofont-rounded-down text-white"></i></a>
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
  <li class="Asociados">
    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
        class="icofont-people mr-3 h4 text-white"></span>Asociados<i class="icofont-rounded-down text-white"></i></a>
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
        class="icofont-learn mr-3 h4 text-white"></span>Visitas<i class="icofont-rounded-down text-white"></i></a>
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
        class="icofont-paper mr-3 h4 text-white"></span>Prestamos<i class="icofont-rounded-down text-white"></i></a>
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
        class="icofont-tick-boxed mr-3 h4 text-white"></span>Puestos<i class="icofont-rounded-down text-white"></i></a>
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
  <br>
  <?php
  require_once("../conexion/conexion.php");
  $sql = "SELECT MAX(Id_libro) FROM libros WHERE Activo = 1";
  $result = mysqli_query($conexion, $sql);
  $next_id = mysqli_fetch_row($result);
  ?>
  <div class="bg-white rounded-lg formulario">
    <form class="p-4 needs-validation" action="registrar_libros.php" method="POST" novalidate>
      <center><label for="">
          <h4>REGISTRAR LIBROS <sup class="btn color text-white">#
              <?php echo $next_id[0] + 1 ?>
            </sup></h4>
        </label></center>
      <div class="form-row d-flex justify-content-center">

      </div>
      <div class="form-row">
        <div class="col-md-2 col-lg-1 mb-2">
          <label for="validationCustom04">Id. Reg</label>
          <input type="text" class="form-control" id="validationCustom04" value="<?php echo $next_id[0] + 1 ?>" required
            name="id" placeholder="ID" pattern="[0-9]+">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-md-4 col-lg-3 mb-3">
          <label for="validationCustom01">Clasificación</label>
          <input type="text" class="form-control" autocomplete="off" id="validationCustom01" required
            name="clasificacion" placeholder="Clasificacion del libro"
            pattern="[0-9-a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
            maxlength="50">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-md-4 col-lg-4 mb-4">
          <label for="validationCustom01">Autor</label>
          <select id="validationCustom02" name="autor" class="form-control" required>
            <option value="" disabled selected>Elige una opción</option>
            <?php
            include('../conexion/conexion.php');
            $query = "SELECT * FROM autores";
            $resultado = $conexion->query($query);
            while ($fila = mysqli_fetch_array($resultado)) {
              echo '<option value="' . $fila["Id_autor"] . '">' . $fila["Nombre"] . '</option>';
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
        <div class="col-md-4 col-lg-4 mb-4">
          <label for="validationCustom01">Título</label>
          <input type="text" class="form-control" autocomplete="off" id="validationCustom01" required name="titulo"
            placeholder="Título del libro"
            pattern="[0-9-a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
            maxlength="50">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-md-4 col-lg-4 mb-4">
          <label for="validationCustom01">Edición</label>
          <input type="text" class="form-control" autocomplete="off" id="validationCustom01" 3 name="edicion"
            placeholder="Edición del libro"
            pattern="[0-9-a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
            maxlength="50">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-md-4 col-lg-4 mb-4">
          <label for="validationCustom03">Editorial</label>
          <input type="text" class="form-control" id="validationCustom03" required name="editorial"
            placeholder="Editorial"
            pattern="[0-9-a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
            maxlength="30">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-md-4 col-lg-4 mb-4">
          <label for="validationCustom02">Año de edición</label>
          <input type="text" class="form-control" id="validationCustom02" required name="anno"
            placeholder="Año de edición" pattern="[0-9]{4}" maxlength="4">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <!-- </div>
      <div class="form-row"> -->
        <div class="col-md-4 col-lg-4 mb-4">
          <label for="validationCustom03">Lugar</label>
          <input type="text" class="form-control" id="validationCustom03" required name="lugar" placeholder="Lugar"
            pattern="[0-9-a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
            maxlength="30">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
          <label for="validationCustom06">Cantidad de páginas</label>
          <input type="text" class="form-control" id="validationCustom06" required name="cant_pag"
            placeholder="Cantidad de páginas" pattern="[0-9]+">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
          <label for="validationCustom05">Materia</label>
          <input type="text" class="form-control" id="validationCustom05" required name="materia" placeholder="Materia"
            pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
            maxlength="30">
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
  $id = $_POST['id'];
  $Clasificacion = $_POST['clasificacion'];
  $Id_autor = $_POST['autor'];
  $Titulo = $_POST['titulo'];
  $Edicion = $_POST['edicion'];
  $Editorial = $_POST['editorial'];
  $Anno = $_POST['anno'];
  $Lugar = $_POST['lugar'];
  $Cant_pag = $_POST['cant_pag'];
  $Materia = $_POST['materia'];

  // Validar que el ID no exista en la tabla
  $sql = "SELECT * FROM libros WHERE Id_libro = '$id'";
  $result = mysqli_query($conexion, $sql);
  if (mysqli_num_rows($result) > 0) {
    // El ID ya existe en la tabla, mostrar mensaje de error
    echo '<script>
    swal({
    title: "Operación fallida",
    text: "El Id. Reg ya existe en la tabla!",
    type: "error",
    showCancelButton: true,
    cancelButtonClass: "btn-warning",
    cancelButtonText: "Intentar de nuevo",
    confirmButtonClass: "btn-success",
    confirmButtonText: "Ver asociados",
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
    // Insertar los datos en la tabla
    $query = "INSERT INTO libros (Id_libro,Clasificacion,Id_autor,Titulo,Edicion,Editorial,Anno,Lugar,Cant_pag,Materia) values('$id','$Clasificacion','$Id_autor','$Titulo','$Edicion','$Editorial','$Anno','$Lugar','$Cant_pag','$Materia')";
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