<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Inicio de Sección</title>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!--ICO-->
	<link rel="icon" href="images/logo.png" sizes="32x32" />
	<link rel="icon" href="images/logo.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="images/logo.png" />
	
	
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

	<!-- iconos redes sociales -->
	<link rel='stylesheet' id='fontawesome-css' href='css/redes_sociales.css?ver=5.8.3' type='text/css' media='all' />

	<!-- para los mensajes de alerta -->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/sweetalert.css">
	<script src="vendor/bootstrap/js/sweetalert.js" type="text/javascript"></script>


</head>

<body>

	<!-- <nav class="social-navigation" role="navigation" aria-label="Social Navigation">
		<ul class="social-links-menu">
			<li id="menu-item-93" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-93">
				<a target="_blank"
					href="https://www.facebook.com/Centro-de-Gestión-del-Conocimiento-246319862953801/"><span
						class="screen-reader-text">facebook</span></a>
			</li>
			<li id="menu-item-94" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-94">
				<a target="_blank" rel="noopener" href="https://twitter.com/cgc_cuba"><span
						class="screen-reader-text">twitter</span></a>
			</li>
		</ul>
	</nav> -->

	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<!-- <div class="card">
				<div class="card-body d-flex justify-content-center align-content-center flex-wrap">
					<div class="">
						<img width="300" height="300" src="images/logo11.png" alt="logo">
					</div>
				</div>
			</div> -->

			<div class="card">
				<!-- <div class="card-header">
					<div class="d-flex justify-content-end social_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
					</div> -->

				<div class="card-body">
					<form class="p-5" method="POST" action="">
						<div class="text-center justify-content-center text-light">
							<h3>Inicio de Sección.</h3>
						</div>

						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" name="usuario" placeholder="Usuario">
						</div>

						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" name="pass" placeholder="Contraseña">
						</div>

						<div class="row align-items-center remember">
							<input type="checkbox">Recuérdame
						</div>

						<div class="form-group">
							<!-- <input type="submit" value="Acceder" name="acceder" class="btn float-right login_btn"> -->
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
                    text: "Datos ",
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

	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="vendor/jquery/main.js"></script>

</body>

</html>