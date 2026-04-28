<?php
$tituloPagina = 'El Faro - Inicio';
$pagina = 'home';
require_once BASE_PATH . '/views/layouts/header.php';
?>

<div class="row g-4 mb-5" id="inicio">

    <div class="col-lg-8">
        <?php $principal = $articulos[0] ?? null; ?>
        <?php if ($principal): ?>
        <div class="card shadow-sm h-100 border-0">
            <?php if ($principal->getImagen()): ?>
            <img src="<?= htmlspecialchars($principal->getImagen()) ?>"
                 class="card-img-top noticia-principal-img" alt="<?= htmlspecialchars($principal->getTitulo()) ?>">
            <?php endif; ?>
            <div class="card-body">
                <span class="badge bg-faro mb-2"><?= htmlspecialchars($principal->getCategoria()) ?></span>
                <h2 class="card-title fw-bold"><?= htmlspecialchars($principal->getTitulo()) ?></h2>
                <p class="card-text text-secondary"><?= htmlspecialchars($principal->getContenido()) ?></p>
                <hr>
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <small class="text-muted">
                        <i class="bi bi-person-fill me-1"></i><?= htmlspecialchars($principal->getAutor()) ?>
                        &nbsp;|&nbsp;
                        <i class="bi bi-calendar3 me-1"></i><?= $principal->getFecha() ?>
                    </small>
                    <span class="fw-bold">
                        Artículos publicados:
                        <span class="badge bg-danger fs-6"><?= count($articulos) ?></span>
                    </span>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="col-lg-4">
        <h4 class="fw-bold mb-4 border-bottom pb-2">Otras Noticias</h4>
        <?php foreach (array_slice($articulos, 1) as $art): ?>
        <div class="card mb-3 shadow-sm border-0">
            <div class="card-body">
                <span class="badge bg-secondary mb-1 small"><?= htmlspecialchars($art->getCategoria()) ?></span>
                <h6 class="fw-bold"><?= htmlspecialchars($art->getTitulo()) ?></h6>
                <p class="small text-muted mb-1"><?= htmlspecialchars($art->getResumen(100)) ?></p>
                <small class="text-muted">
                    <i class="bi bi-person me-1"></i><?= htmlspecialchars($art->getAutor()) ?>
                </small>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<section id="multimedia" class="py-5 bg-white rounded shadow-sm mb-5 px-4">
    <h3 class="fw-bold mb-4"><i class="bi bi-play-circle me-2"></i>Sección Multimedia</h3>
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card h-100 border-0 bg-light">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Video: Plaza de Armas</h5>
                    <div class="ratio ratio-16x9">
                        <video controls poster="public/img/01248_mh_04101_a-2.jpg">
                            <source src="public/img/Download.mp4" type="video/mp4">
                            Tu navegador no soporta video HTML5.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 border-0 bg-light">
                <div class="card-body d-flex flex-column justify-content-center text-center">
                    <h5 class="fw-bold mb-3">Audio: Reporte Alcaldesa</h5>
                    <i class="bi bi-volume-up display-1 text-secondary mb-3"></i>
                    <audio controls class="w-100">
                        <source src="public/img/ReelAudio-45931.mp3" type="audio/mpeg">
                        Tu navegador no soporta audio HTML5.
                    </audio>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <h3 class="fw-bold mb-4 border-bottom pb-2">
        <i class="bi bi-grid me-2"></i>Todas las Noticias
    </h3>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($articulos as $art): ?>
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <span class="badge bg-faro mb-2"><?= htmlspecialchars($art->getCategoria()) ?></span>
                    <h5 class="card-title fw-bold"><?= htmlspecialchars($art->getTitulo()) ?></h5>
                    <p class="card-text text-secondary small"><?= htmlspecialchars($art->getResumen(120)) ?></p>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <small class="text-muted">
                        <i class="bi bi-person me-1"></i><?= htmlspecialchars($art->getAutor()) ?>
                    </small>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="py-4 bg-faro rounded text-white text-center mb-3 px-4">
    <h4 class="fw-bold mb-2">¿Quieres ser parte de nuestra comunidad?</h4>
    <p class="mb-3">Regístrate gratis y accede a contenido exclusivo del Faro Digital.</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="index.php?pagina=registro" class="btn btn-light fw-bold">
            <i class="bi bi-person-plus me-1"></i>Crear cuenta
        </a>
        <a href="index.php?pagina=contacto" class="btn btn-outline-light fw-bold">
            <i class="bi bi-envelope me-1"></i>Contáctanos
        </a>
    </div>
</section>

<?php require_once BASE_PATH . '/views/layouts/footer.php'; ?>
