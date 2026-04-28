<?php
require_once BASE_PATH . '/models/Articulo.php';


class HomeController {


    public function index(): void {

        $articulos = $this->obtenerArticulos();

        require_once BASE_PATH . '/views/home/index.php';
    }

    private function obtenerArticulos(): array {
        return [
            new Articulo(
                'Plaza de Armas: Historia y Turismo',
                'El Faro Monumental y la Plaza de Armas de La Serena se mantienen como los puntos clave de nuestra identidad regional. En esta edición revisamos los cambios históricos y su impacto en el turismo local a lo largo de los años.',
                'Cultura',
                'Redacción El Faro',
                'public/img/01248_mh_04101_a-2.jpg',
                1
            ),
            new Articulo(
                'Reporte Alcaldía: Gestión Municipal',
                'Resumen de las últimas gestiones municipales en la zona típica. La administración local presentó su balance semestral con importantes avances en infraestructura y servicios ciudadanos.',
                'Política',
                'Reportero Especial',
                '',
                2
            ),
            new Articulo(
                'Deportes La Serena: Próximos Encuentros',
                'Preparativos para el próximo encuentro en el estadio local. El equipo de fútbol regional alista sus filas para el campeonato regional que comenzará el próximo mes.',
                'Deportes',
                'Sección Deportiva',
                '',
                3
            ),
            new Articulo(
                'Tecnología y Comunidad Digital',
                'El acceso a internet en regiones ha mejorado notablemente. Nuevos programas gubernamentales buscan cerrar la brecha digital en zonas rurales de la región de Coquimbo.',
                'Tecnología',
                'Redacción El Faro',
                '',
                4
            ),
        ];
    }
}
