<?php require("../head_files.php") ?>

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
        <a href="registrar_visitas.php">Registrar</a>
      </li>
      <li>
        <a href="visitas.php">Consultar</a>
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
  <div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Nota:</strong> Dar clic en buscar personas para saber el ID de la persona. <a class="text-dark"
        data-toggle="modal" data-target="#staticBackdrop" href=""><b> Ver personas</b></a>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
  <div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Nota:</strong> Dar clic en buscar libros para saber el ID del libro. <a class="text-dark"
        data-toggle="modal" data-target="#staticBackdrop1" href=""><b> Ver libros</b></a>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
  <div class="bg-white rounded-lg formulario">
    <form class="p-4 needs-validation" action="registrar_visitas.php" method="POST" novalidate>
      <center><label for="">
          <h4>REGISTRAR VISITAS</h4>
        </label></center>
      <div class="form-row">
        <div class="col-sm-6 col-md-4 col-lg-2 mb-4">
          <label for="validationCustom01">ID de persona</label>
          <input type="number" class="form-control" id="validationCustom01" required name="id_per" placeholder="ID"
            maxlength="11">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-sm-6 col-md-8 col-lg-4 mb-4" id="caja">

        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 mb-4">
          <label for="validationCustom02">ID del libro</label>
          <input type="number" class="form-control" id="validationCustom02" required name="id_lib" placeholder="ID"
            maxlength="11">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-sm-6 col-md-8 col-lg-4 mb-3" id="caja1">

        </div>
      </div>
      <div class="form-row">
        <div class="col-sm-6 col-md-4 mb-3">
          <label for="validationCustom05">Fecha de visita</label>
          <input type="date" class="form-control" id="validationCustom05" required name="fecha">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-3">
          <label for="validationCustom06">Hora de entrada</label>
          <input type="time" class="form-control" id="validationCustom06" name="entrada">
          <div class="valid-feedback">
            Correcto!
          </div>
          <div class="invalid-feedback">
            Porfavor rellena el campo.
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-3">
          <label for="validationCustom07">Hora de salida</label>
          <input type="time" class="form-control" id="validationCustom07" name="salida">
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
  $id_per = $_POST['id_per'];
  $id_lib = $_POST['id_lib'];
  $fecha = $_POST['fecha'];
  $entrada = $_POST['entrada'];
  $salida = $_POST['salida'];

  $query = "INSERT INTO consulta (Id_persona,Id_libro,Fecha_visita,Hora_entrada,Hora_salida) values($id_per,$id_lib,'$fecha','$entrada','$salida')";
  $verificar = $conexion->query($query);
  if ($verificar) {
    echo '<script>
                    swal({
                    title: "Operación exitosa",
                    text: "La consulta fue registrada correctamente!",
                    type: "success",
                    showCancelButton: true,
                    cancelButtonClass: "btn-warning",
                    cancelButtonText: "Registrar",
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Ver visitas",
                    closeOnConfirm: false
                  },
                  function(isConfirm) {
                      if (isConfirm) {
                        window.location="visitas.php";
                      } else {
                        window.location="registrar_visitas.php";
                      }
                    });
                    </script>';
  } else {
    echo '<script>
                    swal({
                    title: "Operación fallida",
                    text: "Ocurrio un error al registrar la consulta!",
                    type: "error",
                    showCancelButton: true,
                    cancelButtonClass: "btn-warning",
                    cancelButtonText: "Intentar de nuevo",
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Ver visitas",
                    closeOnConfirm: false
                  },
                  function(isConfirm) {
                      if (isConfirm) {
                        window.location="visitas.php";
                      } else {
                        window.location="registrar_visitas.php";
                      }
                    });
                    </script>';
  }
}
?>

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
            <input type="search" class="form-control" name="buscar" id="buscar" placeholder="Miguel López López">
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
  $(document).on('keyup', '#validationCustom02', function () {
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
    document.getElementById('validationCustom05').value = ano + "-" + mes + "-" + dia;
  }
</script>
</body>

</html>