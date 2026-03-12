<?php

namespace Database\Seeders;

use App\Models\Oferta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Oferta::updateOrCreate(
            ['titulo' => 'Laptop Gamer ASUS'],
            [
                'vigencia' => '2026-03-20',
                'tienda' => 'Amazon',
                'precio_original' => 25000.00,
                'precio_descuento' => 21999.00,
            ]
        );

        Oferta::updateOrCreate(
            ['titulo' => 'Monitor Samsung 24 pulgadas'],
            [
                'vigencia' => '2026-03-25',
                'tienda' => 'Mercado Libre',
                'precio_original' => 4200.00,
                'precio_descuento' => 3599.00,
            ]
        );

        Oferta::updateOrCreate(
            ['titulo' => 'Teclado Mecánico Redragon'],
            [
                'vigencia' => '2026-03-28',
                'tienda' => 'CyberPuerta',
                'precio_original' => 1800.00,
                'precio_descuento' => 1499.00,
            ]
        );
    }
}