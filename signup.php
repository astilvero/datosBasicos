<!DOCTYPE html>
<html>
<head>
	<title>Mi documento básico</title>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
<br>
<br>
<h1>sign in/<a href="index.php">login</a></h1>
<br>
 <form class="form-horizontal" method="POST">
 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Documento</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="documento">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nombres</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nombres">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Apellidos</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="apellidos">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Fecha Nacimiento</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="fecha_nacimiento">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email">
    </div>
   </div>
     <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="usuario">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Clave</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="clave">
    </div>
  </div> <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Estrato</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="estrato">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ciudad</label>
    <div class="col-sm-10">
    <select class="form-control" name="ciudad">
	  <?php 
	  	require_once('ciudad.php');
	  	$ciudad = new Ciudad();
        $stmt = $ciudad->buscar();

        while ($row = $stmt->fetch()){
	  	echo "<option value=$row[0]>$row[1]</option>";
	  	}
	   ?>
	</select>
	</div>
  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Roll</label>
    <div class="col-sm-10">
      <select class="form-control" name="roll">
	  	<option value="0">Usuario</option>
	  	<option value="1">Administrador</option>
	</select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">ENVIAR</button>
    </div>
  </div>
</form>
<?php 
	require_once('dato_persona.php');
    $pers = new Dato_persona();

    $pers -> agregar($_POST['documento'],$_POST['nombres'],$_POST['apellidos'],$_POST['fecha_nacimiento'],$_POST['email'],$_POST['usuario'],$_POST['clave'],$_POST['estrato'],$_POST['ciudad'],$_POST['roll']);

 ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>