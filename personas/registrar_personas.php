<?php require_once("../head_files.php") ?>



<ul class="list-unstyled components">
  <li class="">
    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
        class="icofont-library mr-3 h4 text-white"></span>Libros<i class="icofont-rounded-down text-white"></i></a>
    <ul class="collapse list-unstyled" id="homeSubmenu">
      <li>
        <a href="../libros/registrar_libros.php">Registrar</a>
      </li>
      <li>
        <a href="../libros/libros.php">Visitas</a>
      </li>
      <li>
        <a onClick='abrirReporte()' href="#">Reportes</a>
      </li>
    </ul>
  </li>
  <li class="">
    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
        class="icofont-people mr-3 h4 text-white"></span>Personas<i class="icofont-rounded-down text-white"></i></a>
    <ul class="collapse list-unstyled" id="pageSubmenu">
      <li>
        <a href="registrar_personas.php">Registrar</a>
      </li>
      <li>
        <a href="personas.php">Visitas</a>
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
        <a href="../autores/autores.php">Visitas</a>
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
        <a href="../empleados/empleados.php">Visitas</a>
      </li>
      <li>
        <a onClick='abrirReporte3()' href="#">Reportes</a>
      </li>
    </ul>
  </li>
  <li class="">
    <a href="#puestoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
        class="icofont-tick-boxed mr-3 h4 text-white"></span>Puestos<i class="icofont-rounded-down text-white"></i></a>
    <ul class="collapse list-unstyled" id="puestoSubmenu">
      <li>
        <a href="../puestos/registrar_puesto.php">Registrar</a>
      </li>
      <li>
        <a href="../puestos/puestos.php">Visitas</a>
      </li>
    </ul>
  </li>
  <li class="">
    <a href="#visitaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
        class="icofont-learn mr-3 h4 text-white"></span>Visitas<i class="icofont-rounded-down text-white"></i></a>
    <ul class="collapse list-unstyled" id="visitaSubmenu">
      <li>
        <a href="../visitas/registrar_visitas.php">Registrar</a>
      </li>
      <li>
        <a href="../visitas/visitas.php">Visitas</a>
      </li>
      <li>
        <a onClick='abrirReporte4()' href="#">Reportes</a>
      </li>
    </ul>
  </li>
  <li class="">
    <a href="#prestamoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
        class="icofont-paper mr-3 h4 text-white"></span>Prestamos<i class="icofont-rounded-down text-white"></i></a>
    <ul class="collapse list-unstyled" id="prestamoSubmenu">
      <li>
        <a href="../prestamos/registrar_prestamos.php">Registrar</a>
      </li>
      <li>
        <a href="../prestamos/prestamos.php">Visitas</a>
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
        <a href="../usuarios/usuarios.php">Visitas</a>
      </li>
    </ul>
  </li>
</ul>
</nav>

<div class="container">
  <br><br><br><br>
  <div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Nota:</strong> Si no cuenta con un número de casa colocar 0.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
  <div class="bg-white rounded-lg formulario">
    <form class="p-4 needs-validation" action="registrar_personas.php" method="POST" novalidate>
      <center><label class="mt-2" for="">
          <h4>REGISTRAR PERSONAS</h4>
        </label></center>
      <div class="form-row">
        <div class="col-sm-12 col-md-4 col-lg-6 mb-4">
          <label for="validationCustom01">Nombre completo</label>
          <input type="text" class="form-control" id="validationCustom01" required name="nombre"
            placeholder="Nombre completo"
            pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
            maxlength="40">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
          <label for="validationCustom02">Barrio</label>
          <input type="text" class="form-control" id="validationCustom02" required name="barrio" placeholder="Barrio"
            pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
            maxlength="16">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
          <label for="validationCustom03">Calle</label>
          <input type="text" class="form-control" id="validationCustom03" required name="calle" placeholder="Calle"
            pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
            maxlength="16">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-sm-6 col-md64 col-lg-3 mb-3">
          <label for="validationCustom04">Número de casa</label>
          <input type="text" class="form-control" id="validationCustom04" required name="numero"
            placeholder="Número de casa" pattern="[0-9]+" maxlength="3">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-3">
          <label for="validationCustom05">Estado</label>
          <input type="text" class="form-control" id="validationCustom05" required name="estado" placeholder="Estado"
            pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
            maxlength="18">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-3">
          <label for="validationCustom06">Ciudad</label>
          <input type="text" class="form-control" id="validationCustom06" required name="ciudad" placeholder="Ciudad"
            pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"
            maxlength="18">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-3">
          <label for="validationCustom07">Sexo</label>
          <select class="form-control" id="validationCustom07" required name="sexo">
            <option value="" disabled selected>Elige una opción</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
          </select>
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
          <label for="validationCustom08">Fecha de nacimiento</label>
          <input type="date" class="form-control" id="validationCustom08" required name="fecha">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor Coloca una fecha.
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
          <label for="validationCustom09">Teléfono</label>
          <input type="tel" class="form-control" id="validationCustom09" required name="telefono" placeholder="Teléfono"
            pattern="[0-9]{8,10}">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Profavor rellena el campo.
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
          <label for="validationCustom10">Correo</label>
          <input type="email" class="form-control" id="validationCustom10" name="correo" placeholder="Correo"
            maxlength="50" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Profavor coloca un correo valido.
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
  $nombre = $_POST['nombre'];
  $calle = $_POST['calle'];
  $barrio = $_POST['barrio'];
  $numero = $_POST['numero'];
  $estado = $_POST['estado'];
  $ciudad = $_POST['ciudad'];
  $sexo = $_POST['sexo'];
  $fecha = $_POST['fecha'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];

  $query = "INSERT INTO personas (Nombre,Calle,Barrio,Numero,Estado,Ciudad,Sexo,Fecha_nacimiento,Telefono,Correo) values('$nombre','$calle','$barrio',$numero,'$estado','$ciudad','$sexo','$fecha','$telefono','$correo')";
  $verificar = $conexion->query($query);
  if ($verificar) {
    echo '<script>
                    swal({
                    title: "Operación exitosa",
                    text: "La persona fue registrada correctamente!",
                    type: "success",
                    showCancelButton: true,
                    cancelButtonClass: "btn-warning",
                    cancelButtonText: "Registrar",
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Ver personas",
                    closeOnConfirm: false
                  },
                  function(isConfirm) {
                      if (isConfirm) {
                        window.location="personas.php";
                      } else {
                        window.location="registrar_personas.php";
                      }
                    });
                    </script>';
  } else {
    echo '<script>
                    swal({
                    title: "Operación fallida",
                    text: "Ocurrio un error al registrar a la persona!",
                    type: "error",
                    showCancelButton: true,
                    cancelButtonClass: "btn-warning",
                    cancelButtonText: "Intentar de nuevo",
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Ver personas",
                    closeOnConfirm: false
                  },
                  function(isConfirm) {
                      if (isConfirm) {
                        window.location="personas.php";
                      } else {
                        window.location="registrar_personas.php";
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