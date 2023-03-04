<?php

$title = APP_NAME . ' Blog';
$active = "blog";

$requette = $db->query("SELECT * FROM article WHERE online = 1 ORDER BY date_publication DESC");
$articles = $requette->fetchAll();

require 'partials/_header.php'; ?>

<section class="py-5">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1>Blog</h1>
         </div>
      </div>
   </div>
</section>

<!-- Section blog -->
<section class="py-5">
   <div class="container">
      <h2>Dernières news</h2>
      <div class="row">
         <?php foreach ($articles as $article): ?>
            <div class="col-sm-6">

               <?php include('partials/_bloc_article.php'); ?>
               
            </div>
         <?php endforeach; ?>
      </div>
   </div>
</section>

<?php require 'partials/_footer.php'; ?>