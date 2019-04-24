<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<!--
Project      : Datos de empleados con PHP, MySQLi y Bootstrap CRUD  (Create, read, Update, Delete) 
Author		 : Obed Alvarado
Website		 : http://www.obedalvarado.pw
Blog         : http://obedalvarado.pw/blog/
Email	 	 : info@obedalvarado.pw
-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan MySQLi</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="content" style="border: solid 1px #80808038; padding: 10px; border-radius: 5px">
					<img src="http://colegionacional.cl/wp-content/uploads/2017/03/images.png" alt="" width="100%" style="padding: 30px; border-radius: 50%">
					<div class="card" style="">
					  <div class="card-body">
					    <h3 class="card-title" style="text-align: center">Card title</h3>
					    <p class="card-text" style="text-align: center">
					    	Some quick example text to build on the card title and make up the bulk of the card's content.
					    	<br>
					    	<br>
					    	<a href="#" class="btn btn-primary">Go somewhere</a>
					    </p>
					  </div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="content">
					<h3>Datos &raquo; Agregar Categoria</h3>
					<hr />

					<?php
					if(isset($_POST['addCategoria'])){
						$codigo = mysqli_real_escape_string($con,(strip_tags($_POST["codigo"],ENT_QUOTES)));//Escanpando caracteres 
						$categoria		     = mysqli_real_escape_string($con,(strip_tags($_POST["categoria"],ENT_QUOTES)));//Escanpando caracteres 
						$descripcion	 = mysqli_real_escape_string($con,(strip_tags($_POST["descripcion"],ENT_QUOTES)));//Escanpando caracteres 
						$estado			 = mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));//Escanpando caracteres 


						$cek = mysqli_query($con, "SELECT * FROM categorias WHERE codigo='$codigo'");
						if(mysqli_num_rows($cek) == 0){
								$insert = mysqli_query($con, "INSERT INTO categorias (codigo, categoria, descripcion, estado)
									VALUES('$codigo','$categoria', '$descripcion', '$estado')") or die(mysqli_error());
								if($insert){
									echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
								}else{
									echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
								}
							 
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. código exite!</div>';
						}
					}
					?>

					<form class="form-horizontal" action="" method="post">
						<div class="form-group">
							<label class="col-sm-3 control-label">Codigo</label>
							<div class="col-sm-4">
								<input type="text" name="codigo" class="form-control" placeholder="codigo" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Categoría</label>
							<div class="col-sm-4">
								<input type="text" name="categoria" class="form-control" placeholder="Nombres" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Descripción</label>
							<div class="col-sm-3">
								<input type="text" name="descripcion" class="form-control" placeholder="Puesto" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Estado</label>
							<div class="col-sm-3">
								<select name="estado" class="form-control">
									<option value=""> ----- </option>
		                           	<option value="0">No Visible</option>
									<option value="1">Visible</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">&nbsp;</label>
							<div class="col-sm-6">
								<input type="submit" name="addCategoria" class="btn btn-sm btn-primary" value="Guardar Categoria">
								<a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'dd-mm-yyyy',
	})
	</script>
</body>
</html>
