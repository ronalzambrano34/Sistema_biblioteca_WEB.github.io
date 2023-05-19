<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<!-- para los mensajes de alerta -->
<!-- <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">
<script src="js/sweetalert2.all.min.js" type="text/javascript"></script> -->

<?php
session_start();
if (!empty($_SESSION['active'])) {
	header('location: inicio.php');
} else {
	if (!empty($_POST)) {
		$alert = '';
		if (empty($_POST['usuario']) || empty($_POST['pass'])) {

			$alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
						Hay Campos Vacios.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>';

			// SOLO FUNCION DENTRO DEL <body>
			// echo '<script>
			//         swal({
			//         title: "Operación Fallida",
			//         text: "Datos incorrectos, intente nuevamnte!",
			//         type: "error",
			//         confirmButtonClass: "btn-danger",
			//         confirmButtonText: "Aceptar",
			//       },
			//       function(){
			//         window.location="index.php";
			//       });
			//         </script>';
		} else {
			require('conexion/conexion.php');
			$user = mysqli_real_escape_string($conexion, $_POST['usuario']);
			$pass = mysqli_real_escape_string($conexion, $_POST['pass']);
			$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Nombre_usuario = '$user' AND Password = '$pass' AND Activo=1");
			mysqli_close($conexion);
			$resultado = mysqli_num_rows($query);
			if ($resultado > 0) {
				$dato = mysqli_fetch_array($query);
				$_SESSION['active'] = true;
				$_SESSION['Id_usuario'] = $dato['Id_usuario'];
				$_SESSION['Nombre_usuario'] = $dato['Nombre_usuario'];
				#$_SESSION['user'] = $dato['usuario'];
				header('Location: inicio.php');
			} else {

				$alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
				    		    Credenciales incorrectas.
				    		    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    		        <span aria-hidden="true">&times;</span>
				    		    </button>
				    		</div>';
				session_destroy();
			}
		}
	}
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Inicio de Sección</title>

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
	<link rel="stylesheet" type="text/css" href="icofont/icofont.min.css">

	<!-- <script src="js/jquery-3.3.1.min.js"></script>  -->
	<!-- <script src="js/bootstrap-4.3.1.js"></script>  -->
	<script src="js/all.min.js"></script>

	<!-- para los mensajes de alerta -->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/sweetalert.css">
	<script src="vendor/bootstrap/js/sweetalert.js" type="text/javascript"></script>

	<!-- <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">
	<script src="js/sweetalert2.all.min.js" type="text/javascript"></script> -->

</head>


<body>
	<div class="container">
		<div class="d-flex justify-content-center align-content-center flex-wrap h-100">
			<div class="card">
				<div class="p-5 d-none d-lg-block">
					<!-- <img class="img-profile" href="index.php" src="images/logo1.png" alt="" width="400"> -->
					<a class="img-profile" href="index.php"><img width="320" height="300" src="images/logo1.png"
							alt="logo"></a>
				</div>
			</div>
			<div class="card">
				<form class="validate-form p-5" method="POST" action="">
					<div class="card-header">
						<h3>Inicio de Sección.</h3>
						<?php echo (isset($alert)) ? $alert : ''; ?>
						<!-- <div class="d-flex justify-content-between social_icon">
							<span><i class="fab fa-facebook-square"></i></span>
							<span><i class="fab fa-google-plus-square"></i></span>
							<span><i class="fab fa-twitter-square"></i></span>
						</div> -->
					</div>
					<div class="card-body">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text icofont-user"></span>
							</div>
							<input type="text" class="form-control" name="usuario" placeholder="Usuario">
						</div>

						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text icofont-key"></span>
							</div>
							<input type="password" class="form-control" name="pass" placeholder="Contraseña">
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
					</div>
					<div class="card-footer">
						<!-- <div class="d-flex justify-content-center links">
							Don't have an account?<a href="#">Sign Up</a>
						</div>
						<div class="d-flex justify-content-center">
							<a href="#">Forgot your password?</a>
						</div> -->
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
	// echo '<script>
	// 		Swal.fire({
	// 		toast: true,
	// 		timerProgressBar: true,
	// 		position: "bottom-end",
	// 		icon: "success",
	// 		title: "Your work has been saved",
	// 		showConfirmButton: false,
	// 		timer: 1500
	//   		});
	// 	</script>';
	?>

</body>



</html>