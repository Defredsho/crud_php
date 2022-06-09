<?php

session_start();
 
/* Verifique si el usuario ya ha iniciado sesión, si es así, 
rediríjalo a la página de bienvenida (index.php)*/
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

		<title>Inicio de sesión</title>
	</head>
<body style="background-color: #121E12">
	<div class="container mt-5 card px-5 py-5 bg-dark text-white">	
    <div id="app">
      <h2 class=" h3 text-center fw-semibold">Inicio de sesión</h2>
      <p class="fw-normal text-center">Por favor, introduzca usuario y contraseña para iniciar sesión.</p>
      <form class="card border-0 px-5 py-3 bg-dark text-white">
        <h3 class="h4 text-center">Usuario</h3>
        <input type="text" name="username" v-model="user.username" class="form-inputs form-control mb-3">

           
        <h3 class="h4 text-center">Contraseña</h3>
        <input type="password" name="password" v-model="user.password" class="form-inputs form-control mb-3">
    
        <button class="btn btn-primary" @click.prevent="login">Ingresar</button>
        <p class="text-center py-3">¿No tienes una cuenta? <a href="register.php">Regístrate ahora</a>.</p>
      </form>
			<div class="text-center"><p>{{error}}</p></div>
    </div>
    
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> 
    <script src="main.js"></script>
</body>
</html>
