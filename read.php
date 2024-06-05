<?php 
include 'db.php';
    include 'header.php';
    $sql = "SELECT id, nombre, telefono, correo, mensaje FROM contactos";
    $conn ->QUERY($sql);
    $result=$conn ->query($sql);

?>
<h1>Leer mensajes</h1>

<div class="contenedor listado">
    <div class="fila.cabecera">
        <div class="campo.Cabecera">
            id
        </div>
        <div class="campo.Cabecera">
            Nombre
        </div>
        <div class="campo.Cabecera">
            Telefono
        </div>
        <div class="campo.Cabecera">
            Correo
        </div>
        <div class="campo.Cabecera">
            Mensaje
        </div>

    </div>
    <?php
        while($row = $result->fetch_assoc()){
            ?>
            <div class="fila">
                    <div class="campo"><?=$row['id']?></div>
                    <div class="campo"><?=$row['nombre']?></div>
                    <div class="campo"><?=$row['telefono']?></div>
                    <div class="campo"><?=$row['correo']?></div>
                    <div class="campo"><?=['mensaje']?></div>
            </div>

        <?php
        }
    ?>
</div>

<?php
    include 'footer.php';
?>