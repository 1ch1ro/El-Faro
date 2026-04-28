</main>
<footer class="pt-5 pb-3 footer-faro">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-5">
                <h5 class="text-white fw-bold mb-3">
                    <i class="bi bi-newspaper me-2"></i>El Faro
                </h5>
                <p class="small text-secondary">
                    Periódico Digital Regional. Proyecto de programación orientado a la difusión
                    de noticias locales y cultura de la Región de Coquimbo.
                </p>
            </div>
            <div class="col-md-3">
                <h6 class="text-white fw-bold mb-3">Menú</h6>
                <ul class="list-unstyled small">
                    <li><a href="index.php?pagina=home"     class="text-decoration-none text-secondary">Inicio</a></li>
                    <li><a href="index.php?pagina=contacto" class="text-decoration-none text-secondary">Contacto</a></li>
                    <li><a href="index.php?pagina=registro" class="text-decoration-none text-secondary">Registrarse</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h6 class="text-white fw-bold mb-3">Redes Sociales</h6>
                <div class="d-flex gap-3 fs-4 text-secondary">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-twitter-x"></i>
                    <i class="bi bi-youtube"></i>
                </div>
            </div>
        </div>
        <hr class="mt-4 border-secondary">
        <div class="text-center">
            <p class="small text-secondary mb-0">
                &copy; <?= date('Y') ?> Periódico El Faro. Todos los derechos reservados.
            </p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="public/js/script.js"></script>
</body>
</html>
