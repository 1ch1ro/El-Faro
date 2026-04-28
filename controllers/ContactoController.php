<?php
require_once BASE_PATH . '/models/Contacto.php';

class ContactoController {

    private array  $errores  = [];
    private bool   $enviado  = false;
    private ?array $datos    = null;


    public function index(): void {
        require_once BASE_PATH . '/views/contacto/index.php';
    }

    public function procesar(): void {

        $nombre  = htmlspecialchars(trim($_POST['nombre']  ?? ''));
        $email   = htmlspecialchars(trim($_POST['email']   ?? ''));
        $asunto  = htmlspecialchars(trim($_POST['asunto']  ?? ''));
        $mensaje = htmlspecialchars(trim($_POST['mensaje'] ?? ''));

        $contacto = new Contacto($nombre, $email, $asunto, $mensaje);

        $this->errores = $contacto->validar();

        if (empty($this->errores)) {

            $this->enviado = true;
            $this->datos   = $contacto->toArray();
        }

        require_once BASE_PATH . '/views/contacto/index.php';
    }
}
