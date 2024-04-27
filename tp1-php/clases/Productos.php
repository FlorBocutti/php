<?php

class Productos
{
    public int $productos_id;
    public string $titulo;
    public int $precio;
    public string $imagen;
    public string $imagen_descripcion;
    public string $detalles;


    public function pasarDatos(array $productoData): void 
    {
        $this->productos_id = $productoData['productos_id'];
        $this->titulo = $productoData['titulo'];
        $this->precio = $productoData['precio'];
        $this->imagen = $productoData['imagen'];
        $this->imagen_descripcion = $productoData['imagen_descripcion'];
        $this->detalles = $productoData['detalles'];
    }
    
    public function productosTodos(): array
    {

        $contenidoJSON = file_get_contents(__DIR__ . '/../json/productos.json');
        $productosArray = json_decode($contenidoJSON, true);

        $productos = [];

        foreach ($productosArray as $productoData) {
            $producto = new self;
            $producto->pasarDatos($productoData);

            $productos[] = $producto;
        }

        return $productos;
    }


    public function porId(int $productos_id): ?self
    {
        $productos = $this->productosTodos();

        foreach ($productos as $producto) {
            if ($producto->productos_id === $productos_id) {
                return $producto;
            }
        }
        return null;
    }

    // Getter y Setter 
    // Id
    public function getProductosId(): int
    {
        return $this->productos_id;
    }

    public function setProductosId(int $productos_id ): void
    {
        $this->productos_id = $productos_id;
    }

    // Titulo
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    // Precio
    public function getPrecio(): string
    {
        return $this->precio;
    }

    public function setPrecio(string $precio): void
    {
        $this->precio = $precio;
    }

    // Imagen
    public function getImagen(): string
    {
        return $this->imagen;
    }

    public function setImagen(string $imagen): void
    {
        $this->imagen = $imagen;
    }

    // Imagen descripcion
    public function getImagenDescripcion(): string
    {
        return $this->imagen_descripcion;
    }

    public function setImagenDescripciom(string $imagen_descripcion): void
    {
        $this->imagen_descripcion = $imagen_descripcion;
    }

    // Detalles
    public function getDetalles(): string
    {
        return $this->detalles;
    }

    public function setDetalles(string $detalles): void
    {
        $this->detalles = $detalles;
    }
}