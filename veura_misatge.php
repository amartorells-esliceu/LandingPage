<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM contactos WHERE id=?";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $id);
        
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $contacto = $result->fetch_assoc();
            
            echo "ID: " . $contacto['id'] . "<br>";
            echo "Nombre: " . $contacto['nombre'] . "<br>";
            echo "Correo: " . $contacto['correo'] . "<br>";
            echo "Teléfono: " . $contacto['telefono'] . "<br>";
        } else {
            echo "No s'ha trobat cap contacte amb aquest ID.";
        }
        
        $stmt->close();
    } else {
        echo "Error en la preparació de la declaració SQL.";
    }
    
    $conn->close();
}
?>