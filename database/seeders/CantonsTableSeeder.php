<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Canton;
use Illuminate\Database\Seeder;

class CantonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Canton::insert([


            // Aargau
            [
                'image_url' => 'http://localhost/public/images/cantons/aargauBadge.png',
                'name' => 'aargau'
            ],

            // Appenzell
            [
                'image_url' => 'http://localhost/public/images/cantons/appenzellBadge.png',
                'name' => 'appenzell'
            ],

            // Basel
            [
                'image_url' => 'http://localhost/public/images/cantons/baselBadge.png',
                'name' => 'basel'
            ],

            // Bern
            [
                'image_url' => 'http://localhost/public/images/cantons/bernBadge.png',
                'name' => 'bern'
            ],

            // Fribourg
            [
                'image_url' => 'http://localhost/public/images/cantons/fribourgBadge.png',
                'name' => 'freiburg'
            ],

            // Geneva
            [
                'image_url' => 'http://localhost/public/images/cantons/genevaBadge.png',
                'name' => 'geneva'
            ],

            // Glarus
            [
                'image_url' => 'http://localhost/public/images/cantons/glarusBadge.png',
                'name' => 'glarus'
            ],

            // Graubünden
            [
                'image_url' => 'http://localhost/public/images/cantons/graubündenBadge.png',
                'name' => 'graubunden'
            ],

            // Jura
            [
                'image_url' => 'http://localhost/public/images/cantons/juraBadge.png',
                'name' => 'jura'
            ],

            // Lucerne
            [
                'image_url' => 'http://localhost/public/images/cantons/lucerneBadge.png',
                'name' => 'lucerne'
            ],

            // Neuchâtel
            [
                'image_url' => 'http://localhost/public/images/cantons/neuchatelBadge.png',
                'name' => 'neuchatel'
            ],

            // Nidwalden
            [
                'image_url' => 'http://localhost/public/images/cantons/nidwaldenBadge.png',
                'name' => 'nidwalden'
            ],

            // Obwalden
            [
                'image_url' => 'http://localhost/public/images/cantons/obwaldenBadge.png',
                'name' => 'obwalden'
            ],

            // St. Gallen
            [
                'image_url' => 'http://localhost/public/images/cantons/stgallenBadge.png',
                'name' => 'stgallen'
            ],

            // Schaffhausen
            [
                'image_url' => 'http://localhost/public/images/cantons/schaffhausenBadge.png',
                'name' => 'schaffhausen'
            ],

            // Schwyz
            [
                'image_url' => 'http://localhost/public/images/cantons/schwyzBadge.png',
                'name' => 'schwyz'
            ],

            // Solothurn
            [
                'image_url' => 'http://localhost/public/images/cantons/solothurnBadge.png',
                'name' => 'solothurn'
            ],

            // Ticino
            [
                'image_url' => 'http://localhost/public/images/cantons/ticinoBadge.png',
                'name' => 'ticino'
            ],

            // Thurgau
            [
                'image_url' => 'http://localhost/public/images/cantons/thurgauBadge.png',
                'name' => 'thurgau'
            ],

            // Uri
            [
                'image_url' => 'http://localhost/public/images/cantons/uriBadge.png',
                'name' => 'uri'
            ],

            // Vaud
            [
                'image_url' => 'http://localhost/public/images/cantons/vaudBadge.png',
                'name' => 'vaud'
            ],

            // Valais
            [
                'image_url' => 'http://localhost/public/images/cantons/valaisBadge.png',
                'name' => 'valais'
            ],

            // Zug
            [
                'image_url' => 'http://localhost/public/images/cantons/zugBadge.png',
                'name' => 'zug'
            ],

            // Zürich
            [
                'image_url' => 'http://localhost/public/images/cantons/zurichBadge.png',
                'name' => 'zurich'
            ],

        ]);
    }
}
