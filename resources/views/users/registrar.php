<?php

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


$conexion=mysqli_connect("localhost","root","","edisonlogin");

$consulta= "insert into users values($codigo,'$name',$email,'$password')";
$result=mysqli_query($conexion,$sql);


if($result)
{

    echo "Datos agregados correctamente";

}

else
{

    echo "Error al ingresar los datos";
}

mysqli_close($conexion);