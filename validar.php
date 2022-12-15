<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();

$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","roles");

$consulta="SELECT*FROM usuario where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);
error_reporting(0);
if($filas['id_cargo'==1]){
    header("location:superv.php");

}else 
if($filas['id_cargo'==2]){
    header("location:profes.php");

}else
if($filas['id_cargo'==3]){
    header("location:alumn.php");

}else
{
    ?>
    <?php
    include("index.html");
    ?>
    
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);
