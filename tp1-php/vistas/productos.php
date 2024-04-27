<?php
// foreach ($productos as $producto);
?>
<!--
<main>
    <div class="card" style="width: 18rem;">
        <h5 class="card-title text-center mt-3">MacBook Air 13-inch with M2 chip</h5>
        <img src="img/MacBook Air de 13”.jpg" class="card-img-top" alt="Mac Book Air 13">
        <div class="card-body">
            <p class="text-center mb-3">$999</p>
            <a href="#" class="btn btn-secondary d-flex justify-content-center">Ver detalles</a>
        </div>
    </div>
</main>
-->


<?php
require_once __DIR__ . '/../clases/Productos.php';

$productos = (new Productos)->productosTodos();
?>

<main class="container">
    <section>
        <div>
            <h1>Productos</h1>
        </div>
        <?php
        foreach ($productos as $producto) :
        ?>
            <div class="card">
                <div class="card-body">
                    <a href="index.php?seccion=detalles&id=<?= $producto->getProductosId(); ?>">
                        <h2><?= $producto->getTitulo(); ?></h2>
                    </a>
                    <p><?= $producto->getDetalles(); ?></p>
                </div>
                <picture class="">
                    <source srcset="imgs/big-<?= $producto->getImagen(); ?>" media="all and (min-width: 46.875em)">
                    <img src="imgs/<?= $producto->getImagen(); ?>" alt="<?= $producto->getImagenDescripcion(); ?>">
                </picture>
            </div>
        <?php
        endforeach;
        ?>
    </section>
</main>
