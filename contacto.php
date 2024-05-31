<?php 
    include 'header.php';
?>

<h1>Contacto</h1>
<main>
</section>
        <section>
            <form class="formulario" action="create_contact.php" method="POST">
                <fieldset>
                    <legend>Contáctame enviando tus datos</legend>
                    <div class="contededor-campos">
                        <div class="campo">
                            <div>
                                <label for="">Nombre:</label>
                                <input class="input-text" type="text" name="nombre" placeholder="Tu Nombre">
                            </div>
                        </div>
                        <div class="campo">
                            <div>
                                <label for="">Teléfono:</label>
                                <input class="input-text" type="tel" name="telefono" placeholder="Tu Teléfono">
                            </div>
                        </div>
                        <div class="campo">
                            <div>
                                <label for="">Correo:</label>
                                <input class="input-text" type="email" name="correo" placeholder="Tu Correo">
                            </div>
                        </div>
                        <div class="campo">
                            <div>
                                <label for="">Mensaje:</label>
                                <textarea class="input-text" name="mensaje" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div>
                            <input class="boton" type="submit" value="Enviar">
                        </div>
                    </div>
                </fieldset>
            </form>
        </section>
</main>

<?php
    include 'footer.php';
?>