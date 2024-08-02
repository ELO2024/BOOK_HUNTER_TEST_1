<?php
namespace App\Controllers\BooksController;


use \PDO;
function indexAction (PDO $connexion)
{
// Je vais demandé des données au modèles
include_once '../app/models/booksModel.php';
$books = \App\Models\BooksModel\findAll($connexion, 6);

// Je charge la vue 'home' dans $content
global $content, $title;
$title ="Books";
ob_start();
include '../app/views/books/index.php';
$content= ob_get_clean();
}

function showAction (PDO $connexion, string $id){
    // Je vais demandé des données au modèles
    include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findOnById($connexion, $id);
    
    // Je charge la vue 'home' dans $content
    global $content, $title;
    $title =$book['title'];
    ob_start();
    include '../app/views/books/show.php';
    $content= ob_get_clean();}
