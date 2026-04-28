<?php
define('BASE_PATH', __DIR__);

spl_autoload_register(function ($clase) {
    $rutas = [
        BASE_PATH . '/models/' . $clase . '.php',
        BASE_PATH . '/controllers/' . $clase . '.php',
    ];
    foreach ($rutas as $ruta) {
        if (file_exists($ruta)) {
            require_once $ruta;
            return;
        }
    }
});

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

switch ($pagina) {
    case 'home':
        require_once BASE_PATH . '/controllers/HomeController.php';
        $ctrl = new HomeController();
        $ctrl->index();
        break;

    case 'contacto':
        require_once BASE_PATH . '/controllers/ContactoController.php';
        $ctrl = new ContactoController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ctrl->procesar();
        } else {
            $ctrl->index();
        }
        break;

    case 'registro':
        require_once BASE_PATH . '/controllers/UsuarioController.php';
        $ctrl = new UsuarioController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ctrl->registrar();
        } else {
            $ctrl->index();
        }
        break;

    default:
        http_response_code(404);
        echo "<h1>404 - Página no encontrada</h1>";
        break;
}
