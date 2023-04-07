<?php require_once("../head_files.php") ?>

<body>
  
  <?php 
                require_once ("../conexion/conexion.php");
                $id=$_REQUEST['id'];
                $nombre=$_POST['nombre'];
                $Nacimiento=$_POST['Nacimiento'];
                $Muerte=$_POST['Muerte'];
                $query = "UPDATE autores SET Nombre='$nombre',Nacimiento='$Nacimiento',Muerte='$Muerte' WHERE Id_autor=$id ";
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
                    window.location="autores.php";
                  });
                    </script>';
                }else{
                    echo '<script>
                    swal({
                    title: "Operación Fallida",
                    text: "Ocurrio un error al actualizar los datos del autor!",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Regresar",
                  },
                  function(){
                    window.location="autores.php";
                  });
                    </script>';
                }
        ?>      
<script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script> 
<script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
</body>
</html>