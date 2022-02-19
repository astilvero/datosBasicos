<?php 
	require_once('dato_persona.php'); 
    $pers = new Dato_persona();
    $pers->borrar($_POST['persona']);
    header("Location: index3.php");
 ?>