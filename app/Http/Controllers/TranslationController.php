<?php

namespace App\Http\Controllers;
use App\Models\Traduction;



class TranslationController extends Controller
{
    public function getTranslations($locale)
    {
        // Chemin vers le fichier JSON de traductions
        $translationPath = base_path("lang/{$locale}.json");

        // Initialiser les traductions des fichiers JSON
        $fileTranslations = [];

        // Vérifier si le fichier existe
        if (file_exists($translationPath)) {
            // Lire le fichier JSON
            $fileData = file_get_contents($translationPath);
            // Décoder le contenu JSON en tableau associatif
            $fileTranslations = json_decode($fileData, true);
        }


        // Récupérer les traductions de la base de données
        // FONCTIONNE
        $dbTranslations = Traduction::where('language', $locale)->pluck('value', 'field')->toArray();

        // // Fusionner les deux ensembles de traductions
        $translations = array_merge($fileTranslations, $dbTranslations);


        // return response()->json($translations);
        return response($translations);
    }
}
