<?php
$tituloPagina = 'El Faro - Crear cuenta';
$pagina = 'registro';
require_once BASE_PATH . '/views/layouts/header.php';
?>

<div class="row justify-content-center">
    <div class="col-lg-6">

        <h2 class="fw-bold mb-1"><i class="bi bi-person-plus me-2"></i>Crear cuenta</h2>
        <p class="text-muted mb-4">Regístrate gratis y accede a contenido exclusivo de El Faro Digital.</p>

        <?php if (!empty($this->enviado)): ?>
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <i class="bi bi-check-circle-fill me-2 fs-5"></i>
            <div>
                <strong>¡Cuenta creada exitosamente!</strong><br>
                Bienvenido/a <strong><?= htmlspecialchars($this->datos['nombre']) ?></strong>.
                Tu cuenta ha sido registrada con el correo
                <strong><?= htmlspecialchars($this->datos['email']) ?></strong>.
            </div>
        </div>
        <?php endif; ?>

        <?php if (!empty($this->errores)): ?>
        <div class="alert alert-danger">
            <strong><i class="bi bi-exclamation-triangle me-1"></i>Corrige los siguientes errores:</strong>
            <ul class="mb-0 mt-2">
                <?php foreach ($this->errores as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>

        <?php if (empty($this->enviado)): ?>
        <div class="card shadow-sm border-0 p-4">
            <form method="POST" action="index.php?pagina=registro" novalidate>

                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">Nombre completo <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" id="nombre" name="nombre" class="form-control"
                               placeholder="Tu nombre completo" required
                               value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Correo electrónico <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" id="email" name="email" class="form-control"
                               placeholder="tu@correo.com" required
                               value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Contraseña <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" id="password" name="password" class="form-control"
                               placeholder="Mínimo 6 caracteres" required minlength="6">
                    </div>
                    <div class="form-text">La contraseña debe tener al menos 6 caracteres.</div>
                </div>

                <div class="mb-4">
                    <label for="password2" class="form-label fw-bold">Confirmar contraseña <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" id="password2" name="password2" class="form-control"
                               placeholder="Repite tu contraseña" required>
                    </div>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="terminos" required>
                    <label class="form-check-label small" for="terminos">
                        Acepto los <a href="#" class="text-faro">términos y condiciones</a>
                        de El Faro Digital.
                    </label>
                </div>

                <div class="d-flex gap-2 flex-wrap">
                    <button type="submit" class="btn btn-faro px-4 fw-bold">
                        <i class="bi bi-person-check me-1"></i>Crear cuenta
                    </button>
                    <a href="index.php?pagina=home" class="btn btn-outline-secondary px-4">
                        Cancelar
                    </a>
                </div>

            </form>
        </div>

        <p class="text-center mt-3 small text-muted">
            ¿Ya tienes cuenta? <a href="index.php?pagina=home" class="text-faro fw-bold">Inicia sesión aquí</a>
        </p>

        <?php else: ?>
        <div class="text-center mt-3">
            <a href="index.php?pagina=home" class="btn btn-faro fw-bold px-4">
                <i class="bi bi-house me-1"></i>Ir al Inicio
            </a>
        </div>
        <?php endif; ?>

    </div>
</div>

<?php require_once BASE_PATH . '/views/layouts/footer.php'; ?>
