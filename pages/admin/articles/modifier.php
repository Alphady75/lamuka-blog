<?php

$articleId = $_GET['id_article'];

$requette = $db->prepare("SELECT * FROM article WHERE id = :id");
$requette->execute([
   'id' => $articleId,
]);

$article = $requette->fetch();

if (isset($_POST['enregistrer'])) {

   extract($_POST);

   $fichierImage = $_FILES["image"];
   $fichierImageNom = $_FILES["image"]["name"];
   $fichierImageType = $_FILES["image"]["type"];

   $image = $article['image'];

   //var_dump($_FILES);

   $fileUrl = "uploads/images/" . $fichierImage["name"];

   if (isset($fichierImage)) {
      
      move_uploaded_file(
         // Temp image location
         $fichierImage["tmp_name"],

         // New image location, __DIR__ is the location of the current PHP file
         $fileUrl
      );

      if (!empty($fichierImageNom)) {
         $image = $fileUrl;
      }
      
   }

   $request = $db->prepare("UPDATE article SET titre = :titre, image = :image, contenu = :contenu, online = :online WHERE id = :id");
   $request->execute([
      'titre' => $titre,
      'image' => $image,
      'contenu' => $contenu,
      'online' => isset($online) ? true : false,
      'id' => $articleId,
   ]);

   header('Location: index.php?page=admin-article-liste');
}

require_once('filters/PeutVisiter.php');
$title = 'Details article';

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
                  <form method="post" enctype="multipart/form-data">

                     <div class="form-floating mb-4">
                        <input name="titre" value="<?= $article['titre'] ?>" type="text" class="form-control" id="floatingInput" placeholder="Titre de l'article">
                        <label for="floatingInput">Titre de l'article</label>
                     </div>

                     <div class="row mb-4">
                        <div class="col-sm-6">
                           <div class="mb-4">
                              <label for="formFile" class="form-label">Joindre une image</label>
                              <input name="image" class="form-control" type="file" id="formFile">
                           </div>

                           <?php if ($article['image']) : ?>

                              <img src="<?= $article['image'] ?>" class="rouded-btn img-fluid" width="200" alt="">

                           <?php endif; ?>
                        </div>
                     </div>

                     <div class="form-group mb-4">
                        <label for="contenu">Contenu de l'article</label>
                        <textarea name="contenu" class="form-control" id="editor"><?= $article['contenu'] ?></textarea>
                     </div>

                     <div class="form-check mb-4">
                        <input name="online" <?= $article['online'] == 1 ? 'checked' : '' ?> class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
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