<?php

$articleId = $_GET['id_article'];

$requette = $db->prepare("SELECT * FROM article WHERE id = :id");
$requette->execute([
   'id' => $articleId,
]);

$article = $requette->fetch();

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
                     <h1 class="h5">Details article</h1>
                  </div>

                  <table class="table">
                     <tbody>
                        <tr>
                           <th>#ID</th>
                           <td><?= $article['id'] ?></td>
                        </tr>
                        <tr>
                           <th>Titre</th>
                           <td><?= $article['titre'] ?></td>
                        </tr>
                        <tr>
                           <th>Contenu</th>
                           <td><?= $article['contenu'] ?></td>
                        </tr>
                        <tr>
                           <th>Statut</th>
                           <td>
                              <span class="badge bg-<?= $article['online'] == 1 ? 'success' : 'secondary' ?>">
                                 <?= $article['online'] == 1 ? 'En ligne' : 'Hors ligne' ?>
                              </span>
                           </td>
                        </tr>
                        <tr>
                           <th>Date</th>
                           <td>
                              <p class="text-muted"> Crée le <?= $article['date_creation'] ?></p>
                              <i class="timeago" datetime="<?= $article['date_publication'] ?>"> <?= $article['date_publication'] ?></i>
                           </td>
                        </tr>
                        <tr>
                           <th>Action</th>
                           <td>
                              <a href="index.php?page=article-modifier&id_article=<?= $article['id'] ?>" class="btn btn-secondary">Modifier</a>
                              <a href="index.php?page=article-supprimer&id_article=<?= $article['id'] ?>" class="btn btn-danger">Supprimer</a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require 'partials/_footer.php'; ?>