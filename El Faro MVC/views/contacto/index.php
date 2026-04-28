<?php
$tituloPagina = 'El Faro - Contacto';
$pagina = 'contacto';
require_once BASE_PATH . '/views/layouts/header.php';
?>

<div class="row justify-content-center">
    <div class="col-lg-7">

        <h2 class="fw-bold mb-1"><i class="bi bi-envelope me-2"></i>Contacto</h2>
        <p class="text-muted mb-4">Envíanos tu consulta o sugerencia y te responderemos a la brevedad.</p>

        <?php if (!empty($this->enviado)): ?>
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <i class="bi bi-check-circle-fill me-2 fs-5"></i>
            <div>
                <strong>¡Mensaje enviado con éxito!</strong><br>
                Gracias <strong><?= htmlspecialchars($this->datos['nombre']) ?></strong>,
                nos pondremos en contacto contigo a través de
                <strong><?= htmlspecialchars($this->datos['email']) ?></strong>.
            </div>
        </div>
        <?php endif; ?>

        <?php if (!empty($this->errores)): ?>
        <div class="alert alert-danger">
            <strong><i class="bi bi-exclamation-triangle me-1"></i>Por favor corrige los siguientes errores:</strong>
            <ul class="mb-0 mt-2">
                <?php foreach ($this->errores as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>

        <?php if (empty($this->enviado)): ?>
        <div class="card shadow-sm border-0 p-4">
            <form method="POST" action="index.php?pagina=contacto" novalidate>

                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">Nombre completo <span class="text-danger">*</span></label>
                    <input type="text" id="nombre" name="nombre" class="form-control"
                           placeholder="Tu nombre" required
                           value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Correo electrónico <span class="text-danger">*</span></label>
                    <input type="email" id="email" name="email" class="form-control"
                           placeholder="tu@correo.com" required
                           value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                </div>

                <div class="mb-3">
                    <label for="asunto" class="form-label fw-bold">Asunto <span class="text-danger">*</span></label>
                    <input type="text" id="asunto" name="asunto" class="form-control"
                           placeholder="Motivo de tu mensaje"
                           value="<?= htmlspecialchars($_POST['asunto'] ?? '') ?>">
                </div>

                <div class="mb-4">
                    <label for="mensaje" class="form-label fw-bold">Mensaje <span class="text-danger">*</span></label>
                    <textarea id="mensaje" name="mensaje" class="form-control" rows="5"
                              placeholder="Escribe tu mensaje aquí..."><?= htmlspecialchars($_POST['mensaje'] ?? '') ?></textarea>
                </div>

                <div class="d-flex gap-2 flex-wrap">
                    <button type="submit" class="btn btn-faro px-4 fw-bold">
                        <i class="bi bi-send me-1"></i>Enviar mensaje
                    </button>
                    <a href="index.php?pagina=home" class="btn btn-outline-secondary px-4">
                        Cancelar
                    </a>
                </div>

            </form>
        </div>
        <?php else: ?>
        <div class="text-center mt-3">
            <a href="index.php?pagina=contacto" class="btn btn-faro fw-bold">
                <i class="bi bi-envelope me-1"></i>Enviar otro mensaje
            </a>
            <a href="index.php?pagina=home" class="btn btn-outline-secondary ms-2 fw-bold">
                Volver al Inicio
            </a>
        </div>
        <?php endif; ?>

    </div>
</div>

<?php require_once BASE_PATH . '/views/layouts/footer.php'; ?>
