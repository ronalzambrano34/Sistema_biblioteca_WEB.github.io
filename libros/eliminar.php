<?php require_once("../header_files.php") ?>

<body>
        <?php 
              require_once ("../conexion/conexion.php");
              $id=$_REQUEST['id'];
              $query = "UPDATE libros SET Activo=0 WHERE Id_libro=$id ";
              $verificar=$conexion->query($query);
              if ($verificar) {
                echo '<script>
                swal({
                title: "Operación exitosa",
                text: "La eliminación se realizo con exitó!",
                type: "success",
                confirmButtonClass: "btn-success",
                confirmButtonText: "Regresar",
              },
              function(){
                window.location="libros.php";
              });
                </script>';
              }
              else{
                echo '
                <script
                swal({
                  title: "Operación fallida",
                  text: "Ocurrio un error al eliminar el libro!",
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

</body>
</html>