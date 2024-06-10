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
                        <?=substr($row["mensaje"],0,51)?>...
                    </div>

                    <div class="btn-borrar">
                        <a href="borrar.php?id=<?=$row['id']?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-backspace" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff4500" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>             
    <path d="M20 6a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-11l-5 -5a1.5 1.5 0 0 1 0 -2l5 -5z" />
    <path d="M12 10l4 4m0 -4l-4 4" />
</svg></a>
                    </div>

                    <div class="btn-borrar">
                        <a href="veura_misatge.php?id=<?=$row['id']?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-check" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff4500" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
    <path d="M11.102 17.957c-3.204 -.307 -5.904 -2.294 -8.102 -5.957c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6a19.5 19.5 0 0 1 -.663 1.032" />
    <path d="M15 19l2 2l4 -4" />
</svg>
</svg></a>
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