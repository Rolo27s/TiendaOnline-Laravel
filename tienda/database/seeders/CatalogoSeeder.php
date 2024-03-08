<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalogo;

class CatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    use WithoutModelEvents;
    public function run(): void
    {
        Catalogo::create([
            'producto' => 'Aromatizador Difusor "Bosque Encantado"',
            'detalles' => 'Disfruta de una fragancia fresca y relajante con aceites esenciales naturales. Ideal para crear un ambiente acogedor en cualquier espacio.',
            'precio' => '25.99',
        ]);
        
        Catalogo::create([
            'producto' => 'Manta Suave "Nube de Algodón"',
            'detalles' => 'Envuélvete en un cálido abrazo con esta manta de textura aterciopelada. Perfecta para noches frías o para acurrucarse en el sofá.',
            'precio' => '49.99',
        ]);

        Catalogo::create([
            'producto' => 'Juego de Jarrones Decorativos "Terracota"',
            'detalles' => 'Aporta un toque de elegancia y estilo a tu hogar con estos jarrones de cerámica artesanal. Disponibles en diferentes tamaños y colores.',
            'precio' => '39.99',
        ]);
        
        Catalogo::create([
            'producto' => 'Reloj de Pared "Vintage"',
            'detalles' => 'Dale un toque retro a tu decoración con este reloj de diseño clásico. Funciona con pilas y es ideal para cualquier habitación.',
            'precio' => '29.99',
        ]);
        
        Catalogo::create([
            'producto' => 'Lámpara de Mesa "Luz de Luna"',
            'detalles' => 'Crea una atmósfera tenue y romántica con esta lámpara de diseño minimalista. Incluye bombilla LED de bajo consumo.',
            'precio' => '35.99',
        ]);
        
        Catalogo::create([
            'producto' => 'Set de Jardinería "Huerto Urbano"',
            'detalles' => 'Cultiva tus propias hierbas aromáticas y vegetales frescos con este kit completo. Incluye macetas, semillas, tierra y herramientas.',
            'precio' => '45.99',
        ]);
        
        Catalogo::create([
            'producto' => 'Organizador Multiusos "Espacio Práctico"',
            'detalles' => 'Ordena y optimiza el espacio en tu cocina, baño o escritorio con este organizador modular. Fabricado en material resistente y de fácil limpieza.',
            'precio' => '19.99',
        ]);
        
        Catalogo::create([
            'producto' => 'Juego de Sábanas "Sueño Profundo"',
            'detalles' => 'Disfruta de un descanso placentero con estas sábanas de algodón transpirable. Suave al tacto y disponible en diversos colores y estampados.',
            'precio' => '69.99',
        ]);
        
        Catalogo::create([
            'producto' => 'Cuadro Decorativo "Abstracción Vibrante"',
            'detalles' => 'Dale vida a tus paredes con este cuadro de estilo moderno y colorido. Impreso en lienzo de alta calidad y listo para colgar.',
            'precio' => '59.99',
        ]);
        
        Catalogo::create([
            'producto' => 'Humidificador "Oasis Refrescante"',
            'detalles' => 'Mejora la calidad del aire en tu hogar con este humidificador ultrasónico. Ideal para combatir la sequedad ambiental y crear un ambiente más saludable.',
            'precio' => '39.99',
        ]);
    }
}
