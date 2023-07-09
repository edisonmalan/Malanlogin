@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios registrados</h1>
@stop

@section('content')
    <p>Bienvenido.</p>
    <?php 

$conexion=mysqli_connect('localhost','root','','edisonlogin');

?>


<!DOCTYPE html>
<html>
<head>
<title>mostrar datos</title>
</head>
<body>
    
<div class="users-form">
         <form action="registrar.php" method="post">
         <h1>Crear usuario</h1>
       
            <input type="text" name="name" placeholder="Nombre">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Agregar">
        </form>
    </div> 
<br>

<table border="1" >
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>email_verified_at</td>
        <td>password</td>	
    </tr>

    <?php 
    $sql="SELECT * from users";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
     ?>

    <tr>
        <td><?= $mostrar['id'] ?></td>
        <td><?= $mostrar['name'] ?></td>
        <td><?= $mostrar['email'] ?></td>
        <td><?= $mostrar['email_verified_at'] ?></td>
        <td><?= $mostrar['password'] ?></td>
       
        <th> <a href ="edit.php"> Editar</a></th>
        <th> <a href =""> Eliminar</a></th>
        
    </tr>
<?php 
}
 ?>
</table>

</body>
</html>
    
@stop

@section('css')
<link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
@stop

@section('js')
 
@stop