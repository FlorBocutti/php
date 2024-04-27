<?PHP
require_once __DIR__ . '/../clases/Productos.php';


function productosTodos(): array
{
    
    $productos = [];

    $JSON = file_get_contents(__DIR__ . '/../json/productos.json');
    $JSONData = json_decode($JSON, true);

    foreach($JSONData as $value) {

        $producto = new Productos;

        $producto->producto_id = $value['producto_id'];
        $producto->titulo = $value['titulo'];
        $producto->precio = $value['precio'];
        $producto->imagen = $value['imagen'];
        $producto->imagen_descripcion = $value['imagen_descripcion'];
        $producto->detalles = $value['detalles'];

        $productos[] = $producto;
    }

    return $productos;
}


function productosPorId(int $producto_id): ?Productos
{
    $productos = productosTodos();

    foreach($productos as $producto) {
        if($producto->producto_id == $producto_id) {
            return $producto;
        }
    }

    return null;
}
