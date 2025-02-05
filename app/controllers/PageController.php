<?php
class PageController {

    // Tableau associant le nom de la page (passé dans l'URL) au nom du fichier de vue
    private $pages = [
        'accueil'       => 'accueil',
        'horaire'       => 'horaire',
        'hagakure'   => 'hagakure',
        'gallery'       => 'gallery',
        'booking'       => 'booking',
        'contact'       => 'contact',
        'shop'       => 'shop',
        'information'       => 'information'
    ];

    public function render($page) {
        // Si la page demandée n'existe pas dans le tableau, utiliser la vue 404
        if (!array_key_exists($page, $this->pages)) {
            $this->pages[$page] = '404';
        }
        
        // Définir le chemin complet vers le fichier de vue
        $viewFile = __DIR__ . '/../views/pages/' . $this->pages[$page] . '.php';

        // Vérifier que le fichier existe, sinon afficher une erreur (ou rediriger vers 404)
        if (!file_exists($viewFile)) {
            $viewFile = __DIR__ . '/../views/pages/404.php';
        }
        
        // On peut également préparer des données spécifiques à la page ici, par exemple :
        // $data = $this->getDataForPage($page);
        // Puis les rendre disponibles à la vue
        
        // Inclure le layout qui lui-même inclura la vue (la variable $viewFile est accessible dans le layout)
        require_once __DIR__ . '/../views/layout.php';
    }
}