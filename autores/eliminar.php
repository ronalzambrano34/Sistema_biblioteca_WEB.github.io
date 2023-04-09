<?php require_once("../head_files.php") ?>

<body>
        <?php 
              require_once ("../conexion/conexion.php");
              $id=$_REQUEST['id'];
              $query = "UPDATE autores SET Activo=0 WHERE Id_autor=$id ";
              $verificar=$conexion->query($query);
              if ($verificar) {
                echo '
                <script>
                swal({
                  title: "Operación exitosa",
                  text: "El autor fue eliminado correctamente!",
                  type: "success",
                  confirmButtonClass: "btn-success",
                  confirmButtonText: "Aceptar",
                  closeOnConfirm: false
                },
                function(){
                 window.location="autores.php";
                });
                </script>
                ';
              }
              else{
                echo '
                <script
                swal({
                  title: "Operación fallida",
                  text: "Ocurrio un error al eliminar el autor!",
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