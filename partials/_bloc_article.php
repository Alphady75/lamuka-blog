<div class="shadow rouded-btn my-3 p-3">
   <div class="row">
      <?php if ($article['image']):?>

      <div class="col-sm-12 col-md-5">
         <img src="<?= $article['image'] ?>" class="img-fluid rouded-btn" alt="">
      </div>

      <?php endif; ?>

      <div class="col-sm-12 col-md-7">
         <small class="text-muted"><i class="fa fa-calendar-alt"></i> <?= $article['date_publication'] ?></small>
         <h4><?= $article['titre'] ?></h4>
         <a href="index.php?page=blog-details&article_id=<?= $article['id'] ?>" class="btn btn-primary rouded-btn">En savoir plus</a>
      </div>
   </div>
</div>