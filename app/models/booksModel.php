<?php namespace App\Models\BooksModel;
use \PDO;

function findAll(PDO $connexion): array {
    $sql = "SELECT *, p.id AS bookID, a.id AS authorID
    FROM books p
    INNER JOIN authors a ON p.author_id = a.id
    ORDER BY p.created_at DESC
    LIMIT 3;";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}