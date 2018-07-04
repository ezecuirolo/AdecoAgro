<?php
include('../../setup/config.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

$consulta_login = "SELECT * FROM usuarios";
$query = mysqli_query($conexion, $consulta_login);
$datos = mysqli_fetch_assoc($query);

if($datos['EMAIL'] == $user || $datos['USUARIO'] == $user && $datos['PASSWORD'] == $pass) {
  $_SESSION['EMAIL'] = $datos['EMAIL'];
  header("Location: ../panel.php");
} else {
  header("Location: ../index.php?info=error");
}
