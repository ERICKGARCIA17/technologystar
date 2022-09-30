<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <p align="right">
                <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Salir</a>
                </li>
            </ul></p>
        </div>
    </div>
</div>


	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				
				<p align="center"><img src="imagenes/usuario.png"></p>
				<form action="validar.php" name="login" method="get">
					
					<div class="form-group">
						<label for="usuario">Usuario</label>
						<input type="email" class="form-control" id="usuario" name="usuario" placeholder="ejemplo@hotmail.com" required>
					</div>

					<div class="form-group">
						<label for="clave">Clave</label>
						<input type="password" class="form-control" id="clave" name="clave" maxlength="10" required>
					</div>

					<p align="center"><input type="submit" class="btn btn-primary" name="enviar" value="Loguearse"></p>

				</form>
				<center>

					<a href="recuperar.php">¿Olvidaste tu contraseña?</a> <br>
					<a href="index.php">Inicio</a>
				</center>
			</div>
		</div>
	</div>
</body>
</html>
