<?php 

    require_once "Conexion.php";
    

    $c= new conectar();
	$conexion=$c->conexion();


    $usuario=$_POST['txtusuario'];
    $pass=$_POST['txtpassword'];

    $sql="SELECT * FROM tablacrud (nombre,apellido) WHERE nombre='$usuario' and apellido='$pass'";
    $result=mysqli_query($conexion,$sql);
   
    echo "Bienvenido ".$usuario;
?>