<?php

$title = 'Nous contacter';
$active = "contact";

require 'partials/_header.php'; ?>

<section class="py-5">
   <div class="container">
      <div class="row">
         <div class="col-sm-6">
            <div class="bloc-auteur">
               <img src="assets/img/auteur.jpg" class="img-fluid rouded-btn" alt="">
            </div>
         </div>
         <div class="col-sm-5">
            <form method="post">
               <legend>M'envoyer un méssage</legend>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam dolor iusto voluptatibus, molestiae, modi dolorum dolore ut iste temporibus nemo</p>

               <div class="row">
                  <div class="col-sm-6">
                     <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nom" placeholder="Nom(s)">
                        <label for="floatingInput">Nom(s)</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="prenom" placeholder="Prénom(s)">
                        <label for="floatingInput">Prénom(s)</label>
                     </div>
                  </div>
               </div>
               
               <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="sujet" placeholder="Sujet">
                  <label for="floatingInput">Sujet</label>
               </div>

               <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" id="" class="form-control form-control-lg" placeholder="Ecrire votre message..."></textarea>
               </div>

               <div class="form-group py-4">
                  <button type="submit" class="btn btn-primary btn-lg rouded-btn"><i class="fa fa-paper-plane"></i> Envoyer votre message</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>

<?php require 'partials/_footer.php'; ?>