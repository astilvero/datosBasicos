
<?php 
 // crear una clase
 require_once('conexion.php');
 class Dato_persona{
          
    public function agregar($documento,$nombres,$apellidos,$fecha_nacimiento,$email,$usuario,$clave,$estrato,$idciudad){
        $conn = new Conexion();
        $llamarMetodo = $conn->Conectar();
        $sql = "INSERT INTO datos_personales VALUES ('','$documento','$nombres','$apellidos','$fecha_nacimiento','$email','$usuario','$clave','$estrato','$idciudad')";
        $stmt = $llamarMetodo->prepare($sql);
        $stmt ->execute();
    }
     
    public function buscar(){
        $conn = new Conexion();
        $llamarMetodo = $conn->Conectar();
        $sql = "SELECT * FROM datos_personales";
        $stmt = $llamarMetodo->prepare($sql);
        $stmt ->execute();
        return $stmt; 
    }
    
    public function borrar($id){
        $conn = new Conexion();
        $llamarMetodo = $conn->Conectar();
        $sql = "DELETE FROM datos_personales WHERE id = '$id'";
        $stmt = $llamarMetodo->prepare($sql);
        $stmt ->execute();
    }
     
    public function editar($id,$documento,$nombres,$apellidos,$fecha_nacimiento,$email,$usuario,$clave,$estrato,$idciudad){
        $conn = new Conexion();
        $llamarMetodo = $conn->Conectar();
        $sql = "UPDATE datos_personales SET documento='$documento',nombres='$nombres',apellidos='$apellidos',fecha_nacimiento='$fecha_nacimiento',email='$email', usuario ='$usuario', clave ='$clave', estrato ='$estrato',idciudad='$idciudad' WHERE id = '$id'";    
        $stmt = $llamarMetodo->prepare($sql);
        $stmt ->execute();
    }
     
    public function buscarid($id){
        $conn = new Conexion();
        $llamarMetodo = $conn->Conectar();
        $sql = "SELECT * FROM datos_personales WHERE id = '$id'";
        $stmt = $llamarMetodo->prepare($sql);
        $stmt ->execute();
        return $stmt; 
    }
    public function login($user,$password){
        $conn = new Conexion();
        $llamarMetodo = $conn->Conectar();
        $sql = "SELECT * FROM datos_personales WHERE usuario = '$user'";
        $stmt = $llamarMetodo->prepare($sql);
        $stmt ->execute();
        $row = $stmt->fetch();
        $count = $stmt->rowCount();
        if($count > 0){
            if ($password === $row[7]) {
            echo "<h1>Hello $row[2]</h1>";
            }
            else {
            echo '<script type="text/javascript">'; 
            echo 'alert("Usuario o contraseña invalidos");'; 
            echo 'window.location.href = "login.php";';
            echo '</script>';
            }
        }else{
            echo '<script type="text/javascript">'; 
            echo 'alert("El usuario no existe");'; 
            echo 'window.location.href = "login.php";';
            echo '</script>';
        }
    }
     
 }

?>                           