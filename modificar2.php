<?php 
	require_once('dato_persona.php');
    $pers = new Dato_persona();

    $pers -> editar($_GET['id'],$_POST['documento'],$_POST['nombres'],$_POST['apellidos'],$_POST['fecha_nacimiento'],$_POST['email'],$_POST['usuario'],$_POST['clave'],$_POST['estrato'],$_POST['ciudad'],$_POST['roll']);
    

    if($row[10] === 1){
            header('Location: ver_dato_persona.php');
        }else if($row[10] === 0){
            header('Location: index.php');
        }
  

    

 ?>