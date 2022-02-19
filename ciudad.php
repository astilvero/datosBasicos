
<?php 
 // crear una clase
 require_once('conexion.php');
 class Ciudad{
     
    public function buscar(){
        $conn = new Conexion();
        $llamarMetodo = $conn->Conectar();
        $sql = "SELECT * FROM ciudad";
        $stmt = $llamarMetodo->prepare($sql);
        $stmt ->execute();
        return $stmt; 
    }

    public function buscarid($id){
        $conn = new Conexion();
        $llamarMetodo = $conn->Conectar();
        $sql = "SELECT * FROM ciudad WHERE id = '$id'";
        $stmt = $llamarMetodo->prepare($sql);
        $stmt ->execute();
        return $stmt; 
    }
     
 }

?>                           