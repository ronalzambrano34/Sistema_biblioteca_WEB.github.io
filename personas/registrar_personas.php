<?php require_once("../head_files.php") ?>



<ul class="list-unstyled components">
  <li class="Libros">
    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span
        class="icofont-library mr-3 h4 text-white"></span>Libros<i class="icofont-rounded-down text-white"></i></a>
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
        class="icofont-people mr-3 h4 text-white"></span>Asociados<i class="icofont-rounded-down text-white"></i></a>
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
  <br><br><br><br><br>
  <!-- <div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Nota:</strong> Si no cuenta con un número de casa colocar 0.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div> -->
  <?php
  require_once("../conexion/conexion.php");
  $sql = "SELECT MAX(Id_persona) FROM personas WHERE Activo = 1";
  $result = mysqli_query($conexion, $sql);
  $next_id = mysqli_fetch_row($result);
  ?>
  <div class="bg-white rounded-lg formulario">
    <form class="p-4 needs-validation" action="registrar_personas.php" method="POST" novalidate>
      <center><label class="mt-2" for="">
          <h4>REGISTRAR ASOCIADO <sup class="btn color text-white">#
              <?php echo $next_id[0]+1 ?>
            </sup></h4>
        </label></center>
      <div class="form-row">
        <div class="col-sm-6 col-md-4 col-lg-1 mb-3">
          <label for="validationCustom04">ID</label>
          <input type="text" class="form-control" id="validationCustom04" value="<?php echo $next_id[0] +1?>" required
            name="id" placeholder="ID" pattern="[0-9]+">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-4 mb-4">
          <label for="validationCustom01">Nombre completo</label>
          <input type="text" class="form-control" id="validationCustom01" required name="nombre"
            placeholder="Nombre completo"
            pattern="[a-z A-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð]+">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-3">
          <label for="validationCustom04">Carnet de Indentidad</label>
          <input type="text" class="form-control" id="validationCustom04" required name="ci"
            placeholder="Carnet de Indentidad" pattern="[0-9]+" minlength="11" maxlength="11">
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
          <label for="validationCustom08">Fecha de inscripción</label>
          <input type="date" class="form-control" id="validationCustom08" value="" required name="fecha">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor Coloca una fecha.
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-6 mb-4">
          <label for="validationCustom01">Dirección</label>
          <input type="text" class="form-control" id="validationCustom01" name="direccion" placeholder="Opcional"
            pattern="[0-9 a-z A-Z & / % # ,.'-]+" >
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
          <label for="validationCustom09">Teléfono</label>
          <input type="tel" class="form-control" id="validationCustom09" name="telefono" placeholder="Teléfono"
            pattern="[0-9]{8,10}">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Profavor rellena el campo.
          </div>
        </div>
        <!-- <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
          <label for="validationCustom10">Correo</label>
          <input type="email" class="form-control" id="validationCustom10" name="correo" placeholder="Correo"
            maxlength="50" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Profavor coloca un correo valido.
          </div>
        </div> -->
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
  $ci = $_POST['ci'];
  $sexo = $_POST['sexo'];
  $fecha = $_POST['fecha'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $id = $_POST['id'];

  // Validar que el ID no exista en la tabla
  $sql = "SELECT * FROM personas WHERE Id_persona = '$id'";
  $result = mysqli_query($conexion, $sql);
  if (mysqli_num_rows($result) > 0) {
    // El ID ya existe en la tabla, mostrar mensaje de error
    echo '<script>
    swal({
    title: "Operación fallida",
    text: "El ID ya existe en la tabla!",
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
        window.location="personas.php";
      } else {
        window.location="registrar_personas.php";
      }
    });
    </script>';
  } else {
    // Insertar los datos en la tabla
    $query = "INSERT INTO personas (Id_persona,Nombre,CI,Sexo,Fecha_inscripcion,Direccion,Telefono) values('$id','$nombre','$ci','$sexo','$fecha','$direccion','$telefono')";
    $verificar = $conexion->query($query);
    if ($verificar) {
      echo '<script>
                    swal({
                    title: "Operación exitosa",
                    text: "El asociado fue registrado correctamente!",
                    type: "success",
                    showCancelButton: true,
                    cancelButtonClass: "btn-warning",
                    cancelButtonText: "Registrar",
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Ver asociados",
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
                    text: "Ocurrio un error al registrar al asociado!",
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
                        window.location="personas.php";
                      } else {
                        window.location="registrar_personas.php";
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
    window.open("../reporte_personas/index.php", "Reporte de asociados", "directories=no location=no");
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

<script>
  window.onload = function () {
    var fecha = new Date(); //Fecha actual
    var mes = fecha.getMonth() + 1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if (dia < 10)
      dia = '0' + dia; //agrega cero si el menor de 10
    if (mes < 10)
      mes = '0' + mes //agrega cero si el menor de 10
    document.getElementById('validationCustom08').value = ano + "-" + mes + "-" + dia;
  }
</script>


</body>

</html>