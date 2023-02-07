<?php

$title = 'Notre blog';
$active = "blog";

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
         <div class="col-sm-6">
            <div class="shadow rouded-btn my-3 p-3">
               <div class="row">
                  <div class="col-sm-12 col-md-5">
                     <img src="assets/img/blog1.jpg" class="img-fluid rouded-btn" alt="">
                  </div>
                  <div class="col-sm-12 col-md-7">
                     <small class="text-muted"><i class="fa fa-calendar"></i> <?= date('d/m/Y') ?></small>
                     <h4>Lorem ipsum dolor sit amet consectetur adipisicing.</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quas</p>
                     <a href="" class="btn btn-primary rouded-btn">En savoir plus</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="shadow rouded-btn my-3 p-3">
               <div class="row">
                  <div class="col-sm-12 col-md-5">
                     <img src="assets/img/blog2.jpg" class="img-fluid rouded-btn" alt="">
                  </div>
                  <div class="col-sm-12 col-md-7">
                     <small class="text-muted"><i class="fa fa-calendar"></i> <?= date('d/m/Y') ?></small>
                     <h4>Lorem ipsum dolor sit amet consectetur adipisicing.</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quas</p>
                     <a href="" class="btn btn-primary rouded-btn">En savoir plus</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="shadow rouded-btn my-3 p-3">
               <div class="row">
                  <div class="col-sm-12 col-md-5">
                     <img src="assets/img/blog3.jpg" class="img-fluid rouded-btn" alt="">
                  </div>
                  <div class="col-sm-12 col-md-7">
                     <small class="text-muted"><i class="fa fa-calendar"></i> <?= date('d/m/Y') ?></small>
                     <h4>Lorem ipsum dolor sit amet consectetur adipisicing.</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quas</p>
                     <a href="" class="btn btn-primary rouded-btn">En savoir plus</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="shadow rouded-btn my-3 p-3">
               <div class="row">
                  <div class="col-sm-12 col-md-5">
                     <img src="assets/img/blog1.jpg" class="img-fluid rouded-btn" alt="">
                  </div>
                  <div class="col-sm-12 col-md-7">
                     <small class="text-muted"><i class="fa fa-calendar"></i> <?= date('d/m/Y') ?></small>
                     <h4>Lorem ipsum dolor sit amet consectetur adipisicing.</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quas</p>
                     <a href="" class="btn btn-primary rouded-btn">En savoir plus</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require 'partials/_footer.php'; ?>