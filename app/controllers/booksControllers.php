<?php
namespace App\Controllers\BooksController;

use \PDO;

function indexAction(PDO $connexion) {
    // Demande des données au modèle
    include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findAll($connexion, 6);

    // Chargement de la vue 'home' dans $content
    global $content, $title;
    $title = "Books";
    ob_start();
    include '../app/views/books/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $connexion, string $id) {
    // Demande des données au modèle
    include_once '../app/models/booksModel.php';
    $book = \App\Models\BooksModel\findOnById($connexion, $id);  // Correction ici

    // Vérifier si le livre existe
    if (!$book) {
        // Gérer l'absence de livre
        global $content, $title;
        $title = "Livre introuvable";
        $content = "Le livre demandé n'est pas disponible.";
        return;
    }

    // Chargement de la vue 'show' dans $content
    global $content, $title;
    $title = $book['title'];  // S'assurer que cette clé existe dans le résultat
    ob_start();
    include '../app/views/books/show.php';
    $content = ob_get_clean();
}
