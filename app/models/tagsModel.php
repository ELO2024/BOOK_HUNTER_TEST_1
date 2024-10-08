<?php namespace App\Models\TagsModel;

use \PDO;

function findAll(PDO $connexion): array {
    $sql = "SELECT *
    FROM tags
    ORDER BY created_at DESC
    LIMIT 4;";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}