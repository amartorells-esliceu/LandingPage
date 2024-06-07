<?php 
include 'db.php';
    include 'header.php';
    $sql = "SELECT id, nombre, telefono, correo, mensaje FROM contactos";
    $conn ->QUERY($sql);
    $result=$conn ->query($sql);

?>
<h1>Leer mensajes</h1>

<div class="contenedor listado">
    <div class="fila cabecera">
        <div class="campoCabecera">
            id
        </div>
        <div class="campoCabecera">
            Nombre
        </div>
        <div class="campoCabecera">
            Telefono
        </div>
        <div class="campoCabecera">
            Correo
        </div>
        <div class="campoCabecera">
            Mensaje
        </div>
        <div class="campoCabecera">
            Acción
        </div>
    </div>
    <?php
        $num=0;
        while($row = $result->fetch_assoc()){
            $num++;
            $paridad="impar";
            if($num%2==0){
                $paridad="par";
            }
            ?>
            <div class="fila <?=$paridad?>">
                    <div class="campo"><?=$row['id']?></div>
                    <div class="campo"><?=$row['nombre']?></div>
                    <div class="campo"><?=$row['telefono']?></div>
                    <div class="campo"><?=$row['correo']?></div>
                    <div class="campo">
                        <?=$row['mensaje']?>
                        <?=substr($row{"mensaje"},0,51)?>...
                    </div>
                    <div class="btn-borrar">
                        <a href="borrar.php?id=<?=$row['id']?>">Borrar</a>
                    </div>
            </div>
                <?php
        }

        if($num==0){
            echo "<p>No hay mensajes</p>";
        }
    ?>
</div>

<?php
    include 'footer.php';
?>