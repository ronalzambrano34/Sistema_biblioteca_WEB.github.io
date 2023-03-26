<?php
// session_cache_expire(1);
// $cache_expire = session_cache_expire();
session_start();

$id = $_SESSION['Id_usuario'];
$usuario = $id;
if ($id == null || $id = '') {
  header("location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Librería Catedral</title>

  <!--ICO-->
  <link rel="icon" href="../images/logo.png" sizes="32x32" />
  <link rel="icon" href="../images/logo.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="../images/logo.png" />

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="../vendor/bootstrap/css/style.css">
  <link rel="stylesheet" type="text/css" href="../icofont/icofont.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">

  <!-- Alertas -->
  <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/sweetalert.css">
  <script src="../vendor/bootstrap/js/sweetalert.min.js" type="text/javascript"></script>
</head>

<body>

  <!-- Page Content  -->
  <?php require("../header_files.php") ?>

  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <img width="55" height="45" src="../images/logo.png" alt="">
        <small>Librería <b>Catedral</b></small>
      </div>