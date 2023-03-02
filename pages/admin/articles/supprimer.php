<?php

$articleId = $_GET['id_article'];

$requette = $db->prepare("DELETE FROM article WHERE id = :id");
$requette->execute([
   'id' => $articleId,
]);

header('Location: index.php?page=admin-article-liste');
