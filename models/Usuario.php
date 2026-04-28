<?php

class Usuario {

    private int    $id;
    private string $nombre;
    private string $email;
    private string $password;
    private string $fechaRegistro;
    private string $rol;


    public function __construct(
        string $nombre,
        string $email,
        string $password,
        string $rol = 'lector',
        int    $id = 0,
        string $fechaRegistro = ''
    ) {
        $this->id            = $id;
        $this->nombre        = $nombre;
        $this->email         = $email;
        $this->password      = $password;
        $this->rol           = $rol;
        $this->fechaRegistro = $fechaRegistro ?: date('Y-m-d H:i:s');
    }


    public function getId(): int            { return $this->id; }
    public function getNombre(): string     { return $this->nombre; }
    public function getEmail(): string      { return $this->email; }
    public function getRol(): string        { return $this->rol; }
    public function getFechaRegistro(): string { return $this->fechaRegistro; }


    public function setNombre(string $nombre): void   { $this->nombre = $nombre; }
    public function setEmail(string $email): void     { $this->email  = $email; }
    public function setRol(string $rol): void         { $this->rol    = $rol; }

    public function hashearPassword(): void {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function verificarPassword(string $passwordPlano): bool {
        return password_verify($passwordPlano, $this->password);
    }

    public function validar(): array {
        $errores = [];

        if (empty(trim($this->nombre))) {
            $errores[] = 'El nombre no puede estar vacío.';
        }
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errores[] = 'El correo electrónico no es válido.';
        }
        if (strlen($this->password) < 6) {
            $errores[] = 'La contraseña debe tener al menos 6 caracteres.';
        }

        return $errores;
    }

    public function toArray(): array {
        return [
            'id'            => $this->id,
            'nombre'        => $this->nombre,
            'email'         => $this->email,
            'rol'           => $this->rol,
            'fechaRegistro' => $this->fechaRegistro,
        ];
    }
}
