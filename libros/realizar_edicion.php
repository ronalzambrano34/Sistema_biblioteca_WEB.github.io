<?php require_once("../head_files.php") ?>
<body>
  
  <?php 
                require_once ("../conexion/conexion.php");
                $id=$_REQUEST['id'];
                $Clasificacion = $_POST['clasificacion'];
                $Id_autor = $_POST['autor'];
                $Titulo = $_POST['titulo'];
                $Edicion = $_POST['edicion'];
                $Editorial = $_POST['editorial'];
                $Anno = $_POST['anno'];
                $Lugar = $_POST['lugar'];
                $Cant_pag = $_POST['cant_pag'];
                $Materia = $_POST['materia'];

                $query = "UPDATE libros SET Clasificacion='$Clasificacion',Id_autor=$Id_autor,Titulo='$Titulo',Edicion='$Edicion',Editorial='$Editorial',Anno='$Anno',Lugar='$Lugar',Cant_pag='$Cant_pag',Materia='$Materia' WHERE Id_libro=$id ";
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