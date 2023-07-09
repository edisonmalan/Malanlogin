<?php

$conexion=mysqli_connect('localhost','root','','edisonlogin');

$id=$_POST["id"];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql="UPDATE users SET name='$name', email='$email'password='$password' WHERE id='$id'";

$result=mysqli_query($conexion,$sql);
if($query){
    Header("Location: users");
};

?>