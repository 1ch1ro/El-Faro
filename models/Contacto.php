<?php
class Contacto {
    private string $nombre;
    private string $email;
    private string $asunto;
    private string $mensaje;
    private string $fecha;

    public function __construct(
        string $nombre,
        string $email,
        string $asunto,
        string $mensaje
    ) {
        $this->nombre  = $nombre;
        $this->email   = $email;
        $this->asunto  = $asunto;
        $this->mensaje = $mensaje;
        $this->fecha   = date('Y-m-d H:i:s');
    }

    public function getNombre(): string  { return $this->nombre; }
    public function getEmail(): string   { return $this->email; }
    public function getAsunto(): string  { return $this->asunto; }
    public function getMensaje(): string { return $this->mensaje; }
    public function getFecha(): string   { return $this->fecha; }

    public function validar(): array {
        $errores = [];

        if (empty(trim($this->nombre))) {
            $errores[] = 'El nombre es obligatorio.';
        }
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errores[] = 'El correo electrónico no es válido.';
        }
        if (empty(trim($this->asunto))) {
            $errores[] = 'El asunto es obligatorio.';
        }
        if (strlen(trim($this->mensaje)) < 10) {
            $errores[] = 'El mensaje debe tener al menos 10 caracteres.';
        }

        return $errores;
    }

    public function toArray(): array {
        return [
            'nombre'  => $this->nombre,
            'email'   => $this->email,
            'asunto'  => $this->asunto,
            'mensaje' => $this->mensaje,
            'fecha'   => $this->fecha,
        ];
    }
}
