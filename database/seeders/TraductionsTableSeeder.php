<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Traduction;
use Illuminate\Database\Seeder;

class TraductionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertion des traductions des cantons
        Traduction::insert([

            // Aargau
            ['canton_id' => 1, 'table' => 'cantons', 'field' => 'aargau', 'language' => 'fr', 'value' => 'Argovie'],
            ['canton_id' => 1, 'table' => 'cantons', 'field' => 'aargau', 'language' => 'it', 'value' => 'Argovia'],
            ['canton_id' => 1, 'table' => 'cantons', 'field' => 'aargau', 'language' => 'de', 'value' => 'Aargau'],
            ['canton_id' => 1, 'table' => 'cantons', 'field' => 'aargau', 'language' => 'en', 'value' => 'Aargau'],

            // Appenzell
            ['canton_id' => 2, 'table' => 'cantons', 'field' => 'appenzell', 'language' => 'fr', 'value' => 'Appenzell'],
            ['canton_id' => 2, 'table' => 'cantons', 'field' => 'appenzell', 'language' => 'it', 'value' => 'Appenzello'],
            ['canton_id' => 2, 'table' => 'cantons', 'field' => 'appenzell', 'language' => 'de', 'value' => 'Appenzell'],
            ['canton_id' => 2, 'table' => 'cantons', 'field' => 'appenzell', 'language' => 'en', 'value' => 'Appenzell'],

            // Basel
            ['canton_id' => 3, 'table' => 'cantons', 'field' => 'basel', 'language' => 'fr', 'value' => 'Bâle'],
            ['canton_id' => 3, 'table' => 'cantons', 'field' => 'basel', 'language' => 'it', 'value' => 'Basilea'],
            ['canton_id' => 3, 'table' => 'cantons', 'field' => 'basel', 'language' => 'de', 'value' => 'Basel'],
            ['canton_id' => 3, 'table' => 'cantons', 'field' => 'basel', 'language' => 'en', 'value' => 'Basel'],

            // Bern
            ['canton_id' => 4, 'table' => 'cantons', 'field' => 'bern', 'language' => 'fr', 'value' => 'Berne'],
            ['canton_id' => 4, 'table' => 'cantons', 'field' => 'bern', 'language' => 'it', 'value' => 'Berna'],
            ['canton_id' => 4, 'table' => 'cantons', 'field' => 'bern', 'language' => 'de', 'value' => 'Bern'],
            ['canton_id' => 4, 'table' => 'cantons', 'field' => 'bern', 'language' => 'en', 'value' => 'Bern'],

            // Fribourg
            ['canton_id' => 5, 'table' => 'cantons', 'field' => 'freiburg', 'language' => 'fr', 'value' => 'Fribourg'],
            ['canton_id' => 5, 'table' => 'cantons', 'field' => 'freiburg', 'language' => 'it', 'value' => 'Friburgo'],
            ['canton_id' => 5, 'table' => 'cantons', 'field' => 'freiburg', 'language' => 'de', 'value' => 'Freiburg'],
            ['canton_id' => 5, 'table' => 'cantons', 'field' => 'freiburg', 'language' => 'en', 'value' => 'Fribourg'],

            // Geneva
            ['canton_id' => 6, 'table' => 'cantons', 'field' => 'geneva', 'language' => 'fr', 'value' => 'Genève'],
            ['canton_id' => 6, 'table' => 'cantons', 'field' => 'geneva', 'language' => 'it', 'value' => 'Ginevra'],
            ['canton_id' => 6, 'table' => 'cantons', 'field' => 'geneva', 'language' => 'de', 'value' => 'Genf'],
            ['canton_id' => 6, 'table' => 'cantons', 'field' => 'geneva', 'language' => 'en', 'value' => 'Geneva'],

            // Glarus
            ['canton_id' => 7, 'table' => 'cantons', 'field' => 'glarus', 'language' => 'fr', 'value' => 'Glaris'],
            ['canton_id' => 7, 'table' => 'cantons', 'field' => 'glarus', 'language' => 'it', 'value' => 'Glarona'],
            ['canton_id' => 7, 'table' => 'cantons', 'field' => 'glarus', 'language' => 'de', 'value' => 'Glarus'],
            ['canton_id' => 7, 'table' => 'cantons', 'field' => 'glarus', 'language' => 'en', 'value' => 'Glarus'],

            // Graubünden
            ['canton_id' => 8, 'table' => 'cantons', 'field' => 'graubunden', 'language' => 'fr', 'value' => 'Grisons'],
            ['canton_id' => 8, 'table' => 'cantons', 'field' => 'graubunden', 'language' => 'it', 'value' => 'Grigioni'],
            ['canton_id' => 8, 'table' => 'cantons', 'field' => 'graubunden', 'language' => 'de', 'value' => 'Graubünden'],
            ['canton_id' => 8, 'table' => 'cantons', 'field' => 'graubunden', 'language' => 'en', 'value' => 'Graubünden'],

            // Jura
            ['canton_id' => 9, 'table' => 'cantons', 'field' => 'jura', 'language' => 'fr', 'value' => 'Jura'],
            ['canton_id' => 9, 'table' => 'cantons', 'field' => 'jura', 'language' => 'it', 'value' => 'Giura'],
            ['canton_id' => 9, 'table' => 'cantons', 'field' => 'jura', 'language' => 'de', 'value' => 'Jura'],
            ['canton_id' => 9, 'table' => 'cantons', 'field' => 'jura', 'language' => 'en', 'value' => 'Jura'],

            // Lucerne
            ['canton_id' => 10, 'table' => 'cantons', 'field' => 'lucerne', 'language' => 'fr', 'value' => 'Lucerne'],
            ['canton_id' => 10, 'table' => 'cantons', 'field' => 'lucerne', 'language' => 'it', 'value' => 'Lucerna'],
            ['canton_id' => 10, 'table' => 'cantons', 'field' => 'lucerne', 'language' => 'de', 'value' => 'Luzern'],
            ['canton_id' => 10, 'table' => 'cantons', 'field' => 'lucerne', 'language' => 'en', 'value' => 'Lucerne'],

            // Neuchâtel
            ['canton_id' => 11, 'table' => 'cantons', 'field' => 'neuchatel', 'language' => 'fr', 'value' => 'Neuchâtel'],
            ['canton_id' => 11, 'table' => 'cantons', 'field' => 'neuchatel', 'language' => 'it', 'value' => 'Neuchâtel'],
            ['canton_id' => 11, 'table' => 'cantons', 'field' => 'neuchatel', 'language' => 'de', 'value' => 'Neuenburg'],
            ['canton_id' => 11, 'table' => 'cantons', 'field' => 'neuchatel', 'language' => 'en', 'value' => 'Neuchâtel'],

            // Nidwalden
            ['canton_id' => 12, 'table' => 'cantons', 'field' => 'nidwalden', 'language' => 'fr', 'value' => 'Nidwald'],
            ['canton_id' => 12, 'table' => 'cantons', 'field' => 'nidwalden', 'language' => 'it', 'value' => 'Nidvaldo'],
            ['canton_id' => 12, 'table' => 'cantons', 'field' => 'nidwalden', 'language' => 'de', 'value' => 'Nidwalden'],
            ['canton_id' => 12, 'table' => 'cantons', 'field' => 'nidwalden', 'language' => 'en', 'value' => 'Nidwalden'],

            // Obwalden
            ['canton_id' => 13, 'table' => 'cantons', 'field' => 'obwalden', 'language' => 'fr', 'value' => 'Obwald'],
            ['canton_id' => 13, 'table' => 'cantons', 'field' => 'obwalden', 'language' => 'it', 'value' => 'Obvaldo'],
            ['canton_id' => 13, 'table' => 'cantons', 'field' => 'obwalden', 'language' => 'de', 'value' => 'Obwalden'],
            ['canton_id' => 13, 'table' => 'cantons', 'field' => 'obwalden', 'language' => 'en', 'value' => 'Obwalden'],

            // St. Gallen
            ['canton_id' => 14, 'table' => 'cantons', 'field' => 'stgallen', 'language' => 'fr', 'value' => 'Saint-Gall'],
            ['canton_id' => 14, 'table' => 'cantons', 'field' => 'stgallen', 'language' => 'it', 'value' => 'San Gallo'],
            ['canton_id' => 14, 'table' => 'cantons', 'field' => 'stgallen', 'language' => 'de', 'value' => 'St. Gallen'],
            ['canton_id' => 14, 'table' => 'cantons', 'field' => 'stgallen', 'language' => 'en', 'value' => 'St. Gallen'],

            // Schaffhausen
            ['canton_id' => 15, 'table' => 'cantons', 'field' => 'schaffhausen', 'language' => 'fr', 'value' => 'Schaffhouse'],
            ['canton_id' => 15, 'table' => 'cantons', 'field' => 'schaffhausen', 'language' => 'it', 'value' => 'Sciaffusa'],
            ['canton_id' => 15, 'table' => 'cantons', 'field' => 'schaffhausen', 'language' => 'de', 'value' => 'Schaffhausen'],
            ['canton_id' => 15, 'table' => 'cantons', 'field' => 'schaffhausen', 'language' => 'en', 'value' => 'Schaffhausen'],

            // Schwyz
            ['canton_id' => 16, 'table' => 'cantons', 'field' => 'schwyz', 'language' => 'fr', 'value' => 'Schwytz'],
            ['canton_id' => 16, 'table' => 'cantons', 'field' => 'schwyz', 'language' => 'it', 'value' => 'Svitto'],
            ['canton_id' => 16, 'table' => 'cantons', 'field' => 'schwyz', 'language' => 'de', 'value' => 'Schwyz'],
            ['canton_id' => 16, 'table' => 'cantons', 'field' => 'schwyz', 'language' => 'en', 'value' => 'Schwyz'],

            // Solothurn
            ['canton_id' => 17, 'table' => 'cantons', 'field' => 'solothurn', 'language' => 'fr', 'value' => 'Soleure'],
            ['canton_id' => 17, 'table' => 'cantons', 'field' => 'solothurn', 'language' => 'it', 'value' => 'Soletta'],
            ['canton_id' => 17, 'table' => 'cantons', 'field' => 'solothurn', 'language' => 'de', 'value' => 'Solothurn'],
            ['canton_id' => 17, 'table' => 'cantons', 'field' => 'solothurn', 'language' => 'en', 'value' => 'Solothurn'],

            // Ticino
            ['canton_id' => 18, 'table' => 'cantons', 'field' => 'ticino', 'language' => 'fr', 'value' => 'Tessin'],
            ['canton_id' => 18, 'table' => 'cantons', 'field' => 'ticino', 'language' => 'it', 'value' => 'Ticino'],
            ['canton_id' => 18, 'table' => 'cantons', 'field' => 'ticino', 'language' => 'de', 'value' => 'Tessin'],
            ['canton_id' => 18, 'table' => 'cantons', 'field' => 'ticino', 'language' => 'en', 'value' => 'Ticino'],

            // Thurgau
            ['canton_id' => 19, 'table' => 'cantons', 'field' => 'thurgau', 'language' => 'fr', 'value' => 'Thurgovie'],
            ['canton_id' => 19, 'table' => 'cantons', 'field' => 'thurgau', 'language' => 'it', 'value' => 'Turgovia'],
            ['canton_id' => 19, 'table' => 'cantons', 'field' => 'thurgau', 'language' => 'de', 'value' => 'Thurgau'],
            ['canton_id' => 19, 'table' => 'cantons', 'field' => 'thurgau', 'language' => 'en', 'value' => 'Thurgau'],

            // Uri
            ['canton_id' => 20, 'table' => 'cantons', 'field' => 'uri', 'language' => 'fr', 'value' => 'Uri'],
            ['canton_id' => 20, 'table' => 'cantons', 'field' => 'uri', 'language' => 'it', 'value' => 'Uri'],
            ['canton_id' => 20, 'table' => 'cantons', 'field' => 'uri', 'language' => 'de', 'value' => 'Uri'],
            ['canton_id' => 20, 'table' => 'cantons', 'field' => 'uri', 'language' => 'en', 'value' => 'Uri'],

            // Vaud
            ['canton_id' => 21, 'table' => 'cantons', 'field' => 'vaud', 'language' => 'fr', 'value' => 'Vaud'],
            ['canton_id' => 21, 'table' => 'cantons', 'field' => 'vaud', 'language' => 'it', 'value' => 'Vaud'],
            ['canton_id' => 21, 'table' => 'cantons', 'field' => 'vaud', 'language' => 'de', 'value' => 'Waadt'],
            ['canton_id' => 21, 'table' => 'cantons', 'field' => 'vaud', 'language' => 'en', 'value' => 'Vaud'],

            // Valais
            ['canton_id' => 22, 'table' => 'cantons', 'field' => 'valais', 'language' => 'fr', 'value' => 'Valais'],
            ['canton_id' => 22, 'table' => 'cantons', 'field' => 'valais', 'language' => 'it', 'value' => 'Vallese'],
            ['canton_id' => 22, 'table' => 'cantons', 'field' => 'valais', 'language' => 'de', 'value' => 'Wallis'],
            ['canton_id' => 22, 'table' => 'cantons', 'field' => 'valais', 'language' => 'en', 'value' => 'Valais'],

            // Zug
            ['canton_id' => 23, 'table' => 'cantons', 'field' => 'zug', 'language' => 'fr', 'value' => 'Zoug'],
            ['canton_id' => 23, 'table' => 'cantons', 'field' => 'zug', 'language' => 'it', 'value' => 'Zugo'],
            ['canton_id' => 23, 'table' => 'cantons', 'field' => 'zug', 'language' => 'de', 'value' => 'Zug'],
            ['canton_id' => 23, 'table' => 'cantons', 'field' => 'zug', 'language' => 'en', 'value' => 'Zug'],

            // Zürich
            ['canton_id' => 24, 'table' => 'cantons', 'field' => 'zurich', 'language' => 'fr', 'value' => 'Zurich'],
            ['canton_id' => 24, 'table' => 'cantons', 'field' => 'zurich', 'language' => 'it', 'value' => 'Zurigo'],
            ['canton_id' => 24, 'table' => 'cantons', 'field' => 'zurich', 'language' => 'de', 'value' => 'Zürich'],
            ['canton_id' => 24, 'table' => 'cantons', 'field' => 'zurich', 'language' => 'en', 'value' => 'Zürich'],


        ]);
    }
}
