<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
	<title>Inicio de Sección</title>
	<!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" type="text/css" href="css/login_bootstrap.min.css">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" type="text/css" href="css/login_all.css">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login.css">

	<!-- <script src="js/jquery-3.3.1.min.js"></script>  -->
	<!-- <script src="js/bootstrap-4.3.1.js"></script>  -->
	<script src="js/all.min.js"></script>


	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/sweetalert.css">
	<script src="vendor/bootstrap/js/sweetalert.js" type="text/javascript"></script>


</head>

<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<form class=" validate-form p-5" method="POST" action="">
					<div class="card-header">
						<h3>Inicio de Sección.</h3>
						<div class="d-flex justify-content-end social_icon">
							<span><i class="fab fa-facebook-square"></i></span>
							<span><i class="fab fa-google-plus-square"></i></span>
							<span><i class="fab fa-twitter-square"></i></span>
						</div>
					</div>
					<div class="card-body">
						<form>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" class="form-control" name="usuario" placeholder="username">
							</div>

							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" class="form-control" name="pass" placeholder="password">
							</div>

							<div class="row align-items-center remember">
								<input type="checkbox">Recuérdame
							</div>
							<div class="form-group">
								<!-- <input type="button" value="Acceder" name="acceder" class="btn float-right login_btn"> -->
								<button class="btn float-right login_btn" name="acceder">
									Acceder
								</button>
							</div>
						</form>
					</div>
					<!-- <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div> -->
				</form>
			</div>
		</div>
	</div>


	<?php
	if (isset($_POST['acceder'])) {
		require_once("conexion/conexion.php");
		$usuario = $_POST['usuario'];
		$pass = $_POST['pass'];
		$query = "SELECT * FROM usuarios WHERE Nombre_usuario='$usuario' AND Password='$pass' AND Activo=1";
		$resultado = $conexion->query($query);
		$fila = $resultado->fetch_assoc();
		session_start();
		$_SESSION['Id_usuario'] = $fila['Id_usuario'];
		if ($resultado->num_rows > 0) {
			header("location:inicio.php");
		} else {
			echo '<script>
                    swal({
                    title: "Operación Fallida",
                    text: "Datos incorrectos, intente nuevamnte!",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Aceptar",
                  },
                  function(){
                    window.location="index.php";
                  });
                    </script>';
		}
	}
	?>


</body>



</html>