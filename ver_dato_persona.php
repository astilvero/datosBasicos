<html>
<head>
  <title>Mi documento básico</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
  function modificar(frm){
    frm.action="modificar.php?id=",frm.submit();
  }
  function eliminar(frm){
    frm.action="eliminar.php",frm.submit();
  }

</script>
</head>
<body>

 <table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Codígo</th>
      <th>Documento</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Fecha Nacimiento</th>
      <th>Email</th>
      <th>Usuario</th>
      <th>Clave</th>
      <th>Estrato</th>
      <th>Ciudad</th>
      <th>Roll</th>
    </tr>
  </thead>
  <tbody>
  <form method="post" name="form1">
  <?php 
  require_once('dato_persona.php');
    $pers = new Dato_persona();
    $stmt = $pers->buscar();

    while ($record = $stmt->fetch()){ ?>
    <tr>
    <td><input type="radio" name="persona" value=<?php echo $record[0] ?>></td>
      <td><?php echo $record[0] ?></td>
      <td><?php echo $record[1] ?></td>
      <td><?php echo $record[3] ?></td>
      <td><?php echo $record[2] ?></td>
      <td><?php echo $record[4] ?></td>
      <td><?php echo $record[5] ?></td>
      <td><?php echo $record[6] ?></td>
      <td><?php echo $record[7] ?></td>
      <td><?php echo $record[8] ?></td>
      <td><?php echo $record[9] ?></td>
      <td><?php
        if($record[10] == 1){
            echo "Administrador"; 
        }else{
            echo "Usuario";
        }?>
        </td>
    </tr>
  <?php } ?>
    </form>
  </tbody>
</table>
  <div class="col-md-4"><a href="index.php">Agregar</a></div>
  <div class="col-md-4"><a href="javascript:modificar(document.forms['form1']);">Modificar</a></div>
  <div class="col-md-4"><a href="javascript:eliminar(document.forms['form1']);">Eliminar</a></div>
  <a href="index.php">Volver ..</a>
</body>
</html>