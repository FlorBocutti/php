<?php
require __DIR__ . '/../clases/Productos.php';

$producto = (new Productos)->porId($_GET['id']);

?>
<main class="container">
    <article class="card">
        <div>
            <div class="card-body">
                <h1><?= $producto->getTitulo(); ?></h1>
                <p><?= $producto->getDetalles(); ?></p>
            </div>
            <picture class="noticias-item_imagen">
                <source srcset="imgs/big-<?= $producto->getImagen(); ?>" media="all and (min-width: 46.875em)">
                <img src="imgs/<?= $producto->getImagen(); ?>" alt="<?= $producto->getImagenDescripcion(); ?>">
            </picture>
        </div>

        <h2 class="mb-1">Detalles:</h2>
        <div><?= $producto->getDetalles(); ?></div>
    </article>
</main>