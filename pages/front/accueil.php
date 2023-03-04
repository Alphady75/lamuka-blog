<?php

$active = 'accueil';

require 'partials/_header.php';

$requette = $db->query("SELECT * FROM article WHERE online = 1 ORDER BY date_publication DESC LIMIT 2");
$articles = $requette->fetchAll();

?>

<!-- Section a propos -->
<section class="bg-light py-5">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-7">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="assets/img/blog1.jpg" class="d-block w-100  rouded-btn" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="assets/img/blog2.jpg" class="d-block w-100  rouded-btn" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="assets/img/blog3.jpg" class="d-block w-100  rouded-btn" alt="...">
                  </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Précédent</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Suivant</span>
               </button>
            </div>
         </div>
         <div class="col-sm-12 col-md-5">
            <div class="card rouded-btn border-0 shadow-sm">
               <div class="card-body">
                  <img src="assets/img/auteur.jpg" class="img-fluid rouded-btn" alt="">
                  <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum odit, autem officiis voluptatum consectetur similique repudiandae enim corporis natus, aut quam neque voluptate deserunt nostrum iure libero, quos tenetur quidem!</p>
                  <a href="?page=apropos" class="btn btn-primary rouded-btn">En savoir plus</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Section blog -->
<section class="py-5">
   <div class="container">
      <h2>Dernières news</h2>
      <div class="row">
         <?php foreach ($articles as $article) : ?>
            <div class="col-sm-6">

               <?php include('partials/_bloc_article.php'); ?>

            </div>
         <?php endforeach; ?>
      </div>
   </div>
</section>

<?php require 'partials/_footer.php'; ?>