<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
		<title>Registro</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body style="background-color: #121E12">
	<div class="container mt-5 card px-5 py-5 bg-dark text-white">
    <div id="app" class="form-group align-content-around">
        <h2 class="h3 text-center fw-semibold">Registro</h2>
        <p class="text-center">Por favor complete este formulario para crear una cuenta.</p>
        {{error}}
        <form class="card border-0 px-5 py-3 bg-dark text-white">
                <h3 class="h4 text-center">Usuario</h3>
                <input type="text" name="username" v-model="user.username" class="form-control form-inputs mb-3">
            
                <h3 class="h4 text-center">Contraseña</h3>
                <input type="password" name="password" v-model="user.password" class="form-inputs form-control mb-3">
            
                <h3 class="h4 text-center">Confirmar contraseña</h3>
                <input type="password" name="confirm_password" v-model="user.confirm_password" class="form-inputs form-control mb-3">
            
                <input type="submit" @click.prevent="register"  value="Ingresar" class="btn btn-success mb-3">
                <input type="reset"  value="Borrar" class="btn btn-danger"><br>
            
            <p class="text-center">¿Ya tienes una cuenta? <a href="login.php">Ingresa aquí</a>.</p>
        </form>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> 
    <script src="main.js"></script>
</body>
</html>
