<?php

$requette = $db->query("SELECT * FROM article ORDER BY date_publication DESC");
$articles = $requette->fetchAll();

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
                     <div class="row">
                        <div class="col-sm-7">
                           <h1 class="h5">Mes articles (<?= count($articles) ?>) </h1>
                        </div>
                        <div class="col-sm-2 offset-sm-3">
                           <a href="index.php?page=admin-article-ajouter" class="btn btn-primary">Nouvel article</a>
                        </div>
                     </div>
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
                           <th>Actions</th>
                        </tr>
                        <?php foreach ($articles as $article) : ?>
                           <tr>
                              <td><?= $article['id'] ?></td>
                              <td class="w-25"><strong><?= $article['titre'] ?></strong></td>
                              <td>
                                 <?php if ($article['image']) : ?>

                                    <img src="<?= $article['image'] ?>" class="rouded-btn" width="90" alt="">

                                 <?php endif; ?>
                              </td>
                              <td>
                                 <span class="badge bg-<?= $article['online'] == 1 ? 'success' : 'secondary' ?>">
                                    <?= $article['online'] == 1 ? 'En ligne' : 'Hors ligne' ?>
                                 </span>
                              </td>
                              <td><?= $article['date_creation'] ?></td>
                              <td><?= $article['date_publication'] ?></td>
                              <td>
                                 <a href="index.php?page=article-details&id_article=<?= $article['id'] ?>" class="btn btn-light">Détails</a>
                                 <a href="index.php?page=article-modifier&id_article=<?= $article['id'] ?>" class="btn btn-secondary">Modifier</a>
                                 <a href="index.php?page=article-supprimer&id_article=<?= $article['id'] ?>" class="btn btn-danger">Supprimer</a>
                              </td>
                           </tr>
                        <?php endforeach; ?>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require 'partials/_footer.php'; ?>