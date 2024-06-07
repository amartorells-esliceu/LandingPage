<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "GET"); {
    $id=$_GET['id'];
    $sql="DELETE FROM contactos WHERE id=?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);
    $result = $stmt->execute();

    $msg="Registro borrado con exito";
    header("Location: read.php?status=success&msg=".$msg);
    
}