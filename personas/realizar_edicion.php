<?php require_once ("../head_files.php") ?>

<body>

  <?php
  require_once ("../conexion/conexion.php");
  $id = $_REQUEST['id'];
  $nombre = $_POST['nombre'];
  $ci = $_POST['ci'];
  $sexo = $_POST['sexo'];
  $fecha_inscripcion = $_POST['fecha_inscripcion'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $query = "UPDATE personas SET Nombre='$nombre',CI='$ci',Sexo='$sexo',Fecha_inscripcion='$fecha_inscripcion',Direccion='$direccion',Telefono='$telefono' WHERE Id_persona=$id ";
  $verificar = $conexion->query($query);
  if ($verificar) {
    echo '<script>
                    swal({
                    title: "Operación exitosa",
                    text: "La actualización se realizo con exitó!",
                    type: "success",
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "Regresar",
                  },
                  function(){
                    window.location="personas.php";
                  });
                    </script>';
  } else {
    echo '<script>
                    swal({
                    title: "Operación Fallida",
                    text: "Ocurrio un error al actualizar los datos del asociado!",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Regresar",
                  },
                  function(){
                    window.location="personas.php";
                  });
                    </script>';
  }
  ?>
  <script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>