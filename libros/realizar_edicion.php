<?php require_once("../header_files.php") ?>
<body>
  
  <?php 
                require_once ("../conexion/conexion.php");
                $id=$_REQUEST['id'];
                $titulo = $_POST['titulo'];
                $copias = $_POST['copias'];
                $editorial = $_POST['editorial'];
                $fecha = $_POST['fecha'];
                $cate = $_POST['cate'];
                $estante = $_POST['estante'];

                $query = "UPDATE libros SET Titulo='$titulo',Copias=$copias,Editorial='$editorial',Fecha_edicion='$fecha',Categoria='$cate',Estante='$estante' WHERE Id_libro=$id ";
                $verificar=$conexion->query($query);
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
                    window.location="libros.php";
                  });
                    </script>';
                }else{
                    echo '<script>
                    swal({
                    title: "Operación Fallida",
                    text: "Ocurrio un error al actualizar los datos del libro!",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Regresar",
                  },
                  function(){
                    window.location="libros.php";
                  });
                    </script>';
                }
        ?>      
<script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script> 
<script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
</body>
</html>