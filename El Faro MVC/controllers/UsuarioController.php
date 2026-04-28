<?php
require_once BASE_PATH . '/models/Usuario.php';


class UsuarioController {

    private array  $errores  = [];
    private bool   $enviado  = false;
    private ?array $datos    = null;

    public function index(): void {
        require_once BASE_PATH . '/views/registro/index.php';
    }

    public function registrar(): void {

        $nombre    = htmlspecialchars(trim($_POST['nombre']    ?? ''));
        $email     = htmlspecialchars(trim($_POST['email']     ?? ''));
        $password  = $_POST['password']  ?? '';
        $password2 = $_POST['password2'] ?? '';


        if ($password !== $password2) {
            $this->errores[] = 'Las contraseñas no coinciden.';
        }


        $usuario = new Usuario($nombre, $email, $password);


        $erroresModelo = $usuario->validar();
        $this->errores = array_merge($this->errores, $erroresModelo);

        if (empty($this->errores)) {

            $usuario->hashearPassword();

            $this->enviado = true;
            $this->datos   = $usuario->toArray();
        }

        require_once BASE_PATH . '/views/registro/index.php';
    }
}
