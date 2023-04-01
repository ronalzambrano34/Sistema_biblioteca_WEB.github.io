<?php require_once("../head_files.php") ?>

<body>
        <?php 
              require_once ("../conexion/conexion.php");
              $id=$_REQUEST['id'];
              $query = "DELETE FROM consulta WHERE Id_consulta=$id ";
              $verificar=$conexion->query($query);
              if ($verificar) {
                echo '
                <script>
                swal({
                  title: "Operación exitosa",
                  text: "La consulta fue eliminada correctamente!",
                  type: "success",
                  confirmButtonClass: "btn-success",
                  confirmButtonText: "Aceptar",
                  closeOnConfirm: false
                },
                function(){
                 window.location="visitas.php";
                });
                </script>
                ';
              }
              else{
                echo '
                <script
                swal({
                  title: "Operación fallida",
                  text: "Ocurrio un error al eliminar la consulta!",
                  type: "error",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Regresar",
                  closeOnConfirm: false
                },
                function(){
                  window.history.go(-1);
                });>
                </script>
                ';
              }
            ?> 
<script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script> 
<script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
</body>
</html>