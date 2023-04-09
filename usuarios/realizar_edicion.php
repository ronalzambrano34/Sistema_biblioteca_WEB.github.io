<?php require_once("../head_files.php") ?>

<body>
  
  <?php 
                require_once ("../conexion/conexion.php");
                $id=$_REQUEST['id'];
                $usuario = $_POST['usuario'];
                $activo = $_POST['activo'];

                $query = "UPDATE usuarios SET Nombre_usuario='$usuario',Activo=$activo WHERE Id_usuario=$id ";
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
                    window.location="usuarios.php";
                  });
                    </script>';
                }else{
                    echo '<script>
                    swal({
                    title: "Operación Fallida",
                    text: "Ocurrio un error al actualizar los datos del usuario!",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Regresar",
                  },
                  function(){
                    window.location="usuarios.php";
                  });
                    </script>';
                }
        ?>      
<script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script> 
<script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
</body>
</html>