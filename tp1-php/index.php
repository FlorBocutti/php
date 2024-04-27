<?php
$rutas = [
    'inicio' => [
        'titulo' => 'iTechB&B',
    ],
    'productos' => [
        'titulo' => 'iTechB&B Productos',
    ],
    'contacto' => [
        'titulo' => 'iTechB&B Contacto',
    ],
    '404' => [
        'titulo' => 'iTechB&B 404',
    ],
];

$vista = $_GET['seccion'] ?? 'inicio';

if (!isset($rutas[$vista])) {
    $vista = '404';
}

$vistaConfig = $rutas[$vista];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubre el mundo Apple Mac. Productos innovadores para una vida digital extraordinaria.">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title><?= $vistaConfig['titulo']; ?></title>
</head>

<body class="bg-black">
    <header>
        <nav class="navbar navbar-expand-lg body-tertiary rounded-5">
            <div class="container-fluid">
                <img src="img/logo-apple.png" class="logo" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav active">
                        <a class="nav-link" aria-current="page" href="index.php?seccion=inicio">Inicio</a>
                        <a class="nav-link" href="index.php?seccion=productos">Productos</a>
                        <a class="nav-link" href="index.php?seccion=contacto">Contacto</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div>
        <?php
        require __DIR__ . "/vistas/" . $vista . ".php";
        ?>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top">
        <p class="col-md-4 mb-0 ms-3">© 2024 iTechB&B Company, Inc</p>

        <img src="img/logo-apple.png" class="logo" alt="">

        <ul class="nav col-md-4 justify-content-end me-3">
            <li class="nav-item"><a href="index.php?seccion=inicio" class="nav-link px-2">Inicio</a></li>
            <li class="nav-item"><a href="index.php?seccion=productos" class="nav-link px-2">Productos</a></li>
            <li class="nav-item"><a href="index.php?seccion=contacto" class="nav-link px-2">Contacto</a></li>
        </ul>
    </footer>

    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>