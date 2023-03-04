<?php

$articleId = $_GET['article_id'];

$requette = $db->prepare("SELECT * FROM article WHERE id = :id");
$requette->execute([
   'id' => $articleId,
]);

$article = $requette->fetch();

$title = $article['titre'];
$active = "blog";

require 'partials/_header.php'; ?>

<section class="py-5">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h6>Blog / <?= $article['titre'] ?></h6>
         </div>
      </div>
   </div>
</section>

<!-- Section blog -->
<section class="">
   <div class="container">
      <div class="row">
         <div class="col-sm-9">
            <div class="card border-0">
               <div class="card-header border-0 bg-white">
                  <h1 class="h3"><?= $article['titre'] ?></h1>
                  <span class="text-muted"><i class="fa fa-clock"></i> Date publication: <?= $article['date_publication'] ?></span>
               </div>
               <div class="card-body">

                  <?php if ($article['image']) : ?>

                     <img src="<?= $article['image'] ?>" class="rouded-btn img-fluid" alt="">

                  <?php endif; ?>

                  <div class="py-4">
                     <?= $article['contenu'] ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require 'partials/_footer.php'; ?>