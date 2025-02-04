<?php
// Démarrer la session et éventuellement charger un autoloader
session_start();

// Charger le controller (ajuste le chemin si nécessaire)
require_once __DIR__ . '/../app/controllers/PageController.php';

// Récupérer la page demandée via l'URL (par exemple : ?page=accueil)
// Par défaut, afficher l'accueil
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

// Créer une instance du controller et afficher la page
$controller = new PageController();
$controller->render($page);