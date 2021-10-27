<?php
 $conectar = mysqli_connect('localhost','sena','', 'registro');

 if(!$conectar){
     echo "No conectado";
 }

 $Nombre = $_POST["Nombre"];
 $Apellidos = $_POST["Apellidos"];
 $Sexo = $_POST["Sexo"];
 $Correo_Electronico = $_POST["Correo_Electronico"];

 $sql = "INSERT INTO aprendices (Nombre, Apellidos, Sexo, Correo_Electronico) VALUES ('$Nombre', '$Apellidos', '$Sexo', '$Correo_Electronico')";

 $ejecutar = mysqli_query($conectar, $sql);

 if(!$ejecutar){
     echo "Hay algun error";
 }else{
     echo "Datos almacenados correctamente";
 }
?>