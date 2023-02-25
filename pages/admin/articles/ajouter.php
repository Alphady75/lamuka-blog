<?php

require_once('filters/PeutVisiter.php');

$title = 'Ajouter un article';

require 'partials/_header.php'; ?>

<section>
   <div class="container">
      <div class="row">
         <div class="col-sm-12 mx-auto">
            <div class="card my-5">
               <div class="card-body">
                  <div class="py-4">
                     <h1 class="h5">Ajouter un article</h1>
                  </div>
                  <form method="post">

                     <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Titre de l'article">
                        <label for="floatingInput">Titre de l'article</label>
                     </div>

                     <div class="row">
                        <div class="col-sm-6">
                           <div class="mb-4">
                              <label for="formFile" class="form-label">Joindre une image</label>
                              <input name="image" class="form-control" type="file" id="formFile">
                           </div>
                        </div>
                     </div>

                     <div class="form-group mb-4">
                        <label for="contenu">Contenu de l'article</label>
                        <textarea name="contenu" class="form-control" id="editor"></textarea>
                     </div>

                     <div class="form-check mb-4">
                        <input name="online" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                           Mettre en ligne
                        </label>
                     </div>

                     <div class="form-group">
                        <button type="submit" name="enregistrer" class="btn btn-primary">Enregistrer</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require 'partials/_footer.php'; ?>