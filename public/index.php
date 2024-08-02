<?php


// DISPATCHER
// Charger l'initialisation
require_once '../app/core/init.php';

// Vérifier la connexion
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Charger le router
require_once '../app/routers/index.php';

// Charger le template
require_once '../app/views/templates/index.php';
?>
