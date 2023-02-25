<?php

require_once('filters/PeutVisiter.php');
$title = 'Mes articles';

require 'partials/_header.php'; ?>

<section>
   <div class="container">
      <div class="row">
         <div class="col-sm-12 mx-auto">
            <div class="card my-5">
               <div class="card-body">
                  <div class="py-4">
                     <h1 class="h5">Mes articles</h1>
                     <a href="index.php?page=admin-artile-ajouter" class="btn btn-primary">Ajouter</a>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-borderless table-striped">
                        <tr>
                           <th>#ID</th>
                           <th>Titre</th>
                           <th>Image</th>
                           <th>Statut</th>
                           <th>Date création</th>
                           <th>Date publication</th>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require 'partials/_footer.php'; ?>