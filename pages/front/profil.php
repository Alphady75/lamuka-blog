<?php

// Inclusion des filtres pour savoir savoir si un utilisateur peut visiter une page ou non
require_once('filters/PeutVisiter.php');

$title = 'Profil de ' . $_SESSION['pseudo'];

require 'partials/_header.php'; ?>

<section>
   <div class="container">
      <div class="row">
         <div class="col-sm-5 mx-auto">
            <h1 class="text-center pt-4"><?= 'Profil de ' . $_SESSION['pseudo'] ?></h1>
            
         </div>
      </div>
   </div>
</section>

<?php require 'partials/_footer.php'; ?>