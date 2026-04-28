<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tituloPagina ?? 'El Faro - Periódico Digital' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<div class="bg-faro text-white py-2 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <span class="small fw-bold">
            <i class="bi bi-megaphone-fill me-2"></i>AVISO: Importante actualización en el cronograma regional.
        </span>
        <div id="reloj-contenedor" class="small d-none d-md-block">
            <span id="fecha-actual"></span> | <span id="reloj-vivo" class="fw-bold"></span>
        </div>
    </div>
</div>

<header class="py-4 bg-white border-bottom">
    <div class="container text-center">
        <a href="index.php?pagina=home">
            <img src="public/img/01248_mh_04101_a-2.jpg" alt="Logotipo El Faro" class="mb-2 logo-img">
        </a>
        <h1 class="display-4 fw-bold text-faro mb-0">El Faro</h1>
        <p class="text-muted small">Periódico Digital Regional</p>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-faro sticky-top shadow-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navFaro"
                aria-controls="navFaro" aria-expanded="false" aria-label="Abrir menú">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navFaro">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-bold <?= (($pagina ?? '') === 'home')     ? 'active' : '' ?>"
                       href="index.php?pagina=home">
                        <i class="bi bi-house-fill me-1"></i>Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="index.php?pagina=home#multimedia">
                        <i class="bi bi-play-circle me-1"></i>Multimedia
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold <?= (($pagina ?? '') === 'contacto') ? 'active' : '' ?>"
                       href="index.php?pagina=contacto">
                        <i class="bi bi-envelope me-1"></i>Contacto
                    </a>
                </li>
            </ul>
            <div class="d-flex gap-2">
                <a href="index.php?pagina=registro" class="btn btn-faro btn-sm fw-bold">
                    <i class="bi bi-person-plus me-1"></i>Registrarse
                </a>
            </div>
        </div>
    </div>
</nav>

<main class="container my-5">
