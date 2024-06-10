<?php 
    include 'header.php'

?>

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
        ?>
        <div class="contenedor">
        <?php
        
        if ($result->num_rows > 0) {
            $contacto = $result->fetch_assoc();
            ?>
            <div class="info"><strong>ID: </strong><?=$contacto['id']?></div>
            <div class="info"><strong>Nombre: </strong><?=$contacto['nombre']?></div>
            <div class="info"><strong>Correo: </strong><?=$contacto['correo']?></div>
            <div class="info"><strong>Teléfono: </strong><?=$contacto['telefono']?></div>
            <div class="info"><strong>Mensaje: </strong><?=$contacto['mensaje']?></div>
        <?php
        } else {
            echo "No s'ha trobat cap contacte amb aquest ID.";
        }
        ?>
        </div>
        <?php
        $stmt->close();
    } else {
        echo "Error en la preparació de la declaració SQL.";
    }
    
    $conn->close();
}
?>

<?php
    include 'footer.php';
?>