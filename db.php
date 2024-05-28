<?php
//Parametros de conexión
$servername="localhost";
$username="andreu";
$password="AndreuMartorell1239";
$dbname="formacion"; 

//Crear la conexión
$conn=new mysqli($servername,$username,$password,$dbname);

//Comprobar la conexión
if ($conn->connect_error) {
    //La conexión ha ido mal
    die("Connection failed: ". $conn->connect_error);
}

//echo "Conexión exitosa";