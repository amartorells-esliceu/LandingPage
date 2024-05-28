<?php 
    include 'db.php';
    include 'header.php';
?>
    <section class="hero">
        <div class="contenido-hero">
            <h2>Descubre el mundo de los videojuegos</h2>
            <div class="informacion">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple-arcade" 
                        width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#48cae4" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M20 12.5v4.75a.734 .734 0 0 1 -.055 .325a.704 .704 0 0 1 -.348 .366l-5.462 2.58a5 5 0 0 1 -4.27 0l-5.462 -2.58a.705 .705 0 0 1 -.401 -.691l0 -4.75" />
                        <path d="M4.431 12.216l5.634 -2.332a5.065 5.065 0 0 1 3.87 0l5.634 2.332a.692 .692 0 0 1 .028 1.269l-5.462 2.543a5.064 5.064 0 0 1 -4.27 0l-5.462 -2.543a.691 .691 0 0 1 .028 -1.27z" />
                        <path d="M12 7l0 6" />
                      </svg>
                <p>Toda las categorias</p>
            </div>
            <a class="boton" href="juega.php">juega</a>
        </div>
    </section>
    <main class="contenedor sombra">
        <h2>Categorias populares</h2>
        <div class="micontenido">
            <section class="contenido">
                <h3>Mundo abierto</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" 
                    width="84" height="84" viewBox="0 0 24 24" stroke-width="2" stroke="#009988" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                    <path d="M3.6 9h16.8" />
                    <path d="M3.6 15h16.8" />
                    <path d="M11.5 3a17 17 0 0 0 0 18" />
                    <path d="M12.5 3a17 17 0 0 1 0 18" />
                </svg>
                </div>
            <p>Descubre increíbles juegos de exploración en mundo abierto</p>
            </section>
            <section class="contenido">
                <h3>Carreras</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-car" 
                    width="84" height="84" viewBox="0 0 24 24" stroke-width="2" stroke="#009988" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M5 17h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
                </svg>
                </div>
            <p>Descubre increíbles juegos de carreras a motor</p>
        </section>
        <section class="contenido">
            <h3>Online</h3>
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wifi" 
                width="84" height="84" viewBox="0 0 24 24" stroke-width="2" stroke="#009988" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 18l.01 0" />
                <path d="M9.172 15.172a4 4 0 0 1 5.656 0" />
                <path d="M6.343 12.343a8 8 0 0 1 11.314 0" />
                <path d="M3.515 9.515c4.686 -4.687 12.284 -4.687 17 0" />
            </svg>
            </div>
        <p>Descubre increíbles juegos multijugador para jugar con amigos</p>
    </main>
<?php
    include 'footer.php';
?>