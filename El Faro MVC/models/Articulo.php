<?php

class Articulo {
    private int    $id;
    private string $titulo;
    private string $contenido;
    private string $categoria;
    private string $autor;
    private string $fechaPublicacion;
    private string $imagen;

    public function __construct(
        string $titulo,
        string $contenido,
        string $categoria   = 'General',
        string $autor       = 'Redacción',
        string $imagen      = '',
        int    $id          = 0,
        string $fechaPublicacion = ''
    ) {
        $this->id               = $id;
        $this->titulo           = $titulo;
        $this->contenido        = $contenido;
        $this->categoria        = $categoria;
        $this->autor            = $autor;
        $this->imagen           = $imagen;
        $this->fechaPublicacion = $fechaPublicacion ?: date('Y-m-d H:i:s');
    }

    public function getId(): int              { return $this->id; }
    public function getTitulo(): string       { return $this->titulo; }
    public function getContenido(): string    { return $this->contenido; }
    public function getCategoria(): string    { return $this->categoria; }
    public function getAutor(): string        { return $this->autor; }
    public function getFecha(): string        { return $this->fechaPublicacion; }
    public function getImagen(): string       { return $this->imagen; }

    public function setTitulo(string $t): void    { $this->titulo    = $t; }
    public function setContenido(string $c): void { $this->contenido = $c; }
    public function setCategoria(string $c): void { $this->categoria = $c; }

    public function getResumen(int $longitud = 150): string {
        return mb_substr($this->contenido, 0, $longitud) . '...';
    }

    public function validar(): array {
        $errores = [];
        if (empty(trim($this->titulo))) {
            $errores[] = 'El título no puede estar vacío.';
        }
        if (empty(trim($this->contenido))) {
            $errores[] = 'El contenido no puede estar vacío.';
        }
        return $errores;
    }

    public function toArray(): array {
        return [
            'id'        => $this->id,
            'titulo'    => $this->titulo,
            'contenido' => $this->contenido,
            'categoria' => $this->categoria,
            'autor'     => $this->autor,
            'fecha'     => $this->fechaPublicacion,
            'imagen'    => $this->imagen,
        ];
    }
}
