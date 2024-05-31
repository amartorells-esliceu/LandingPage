<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    echo "CREANDO CONTACTO NUEVO <BR>";
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];
    
    
    echo "NOMBRE: " .$nombre. "<br>";
    echo "TELEFONO: " .$telefono. "<br>";
    echo "CORREO: " .$correo. "<br>";
    echo "MENSAJE: " .$mensaje. "<br>";
}else{
    echo "ERROR EN METODO POST";
}
