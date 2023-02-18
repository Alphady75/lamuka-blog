<?php

$title = "M'inscrire";
$active = "inscription";

if (isset($_POST['envoyer'])) {
   extract($_POST);

   $erreurs = [];

   // Traitements des erreurs
   if (empty($pseudo)) {
      $erreurs['pseudo'] = champObligatoir();
   } elseif (strlen($pseudo) < 2) {
      $erreurs['pseudo'] = champTropCourt(2);
   }

   if (empty($email)) {
      $erreurs['email'] = champObligatoir();
   } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $erreurs['email'] = badEmailFormat();
   }
   if (empty($password)) {
      $erreurs['password'] = champObligatoir();
   } elseif (strlen($password) < 6) {
      $erreurs['password'] = champTropCourt(6);
   }
   if (empty($terms)) {
      $erreurs['terms'] = champObligatoir("Veuillez accepter nos terms et conditions d'utilisation");
   }

   // Verifions si un utilisateur s'est déjà inscrit avec une adresse email
   $query = $db->prepare("SELECT * FROM user WHERE email = :email");

   $query->execute([
      'email' => $email
   ]);

   $user = $query->fetchAll();

   if (count($user) > 0) {
      $erreurs['email'] = "L'adresse email $email est déjà utilisaée par un autre compte";
   }

   // Enregistrement dans la base de données
   if (empty($erreurs)) {

      $requette = $db->prepare("INSERT INTO user (pseudo, email, password) VALUES (:pseudo, :email, :password)");
         $requette->execute([
            'pseudo' => $pseudo,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT)
         ]);

         header('Location: index.php?page=inscription_reussi');
   }
}

require 'partials/_header.php';

?>

<section class="py-5">
   <div class="container">
      <div class="row">
         <div class="col-sm-5 mx-auto">
            <div class="card">
               <div class="card-body">
                  <form method="post">
                     <legend>Inscription</legend>
                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam dolor iusto voluptatibus, molestiae, modi dolorum dolore ut iste temporibus nemo</p>
                     <table class="table table-borderless">
                        <tbody>
                           <tr>
                              <th>Nom d'utilisateur</th>
                              <td>
                                 <div class="form-floating <?= isset($erreurs['pseudo']) ? 'border rounded border-danger' : '' ?>">
                                    <input type="text" class="form-control" id="floatingInput" name="pseudo" placeholder="Pseudo">
                                    <label for="floatingInput">Pseudo</label>
                                 </div>

                                 <span class="text-danger"><?= isset($erreurs['pseudo']) ? $erreurs['pseudo'] : '' ?></span>
                              </td>
                           </tr>
                           <tr>
                              <th>Adresse email</th>
                              <td>
                                 <div class="form-floating <?= isset($erreurs['email']) ? 'border rounded border-danger' : '' ?>">
                                    <input type="text" class="form-control" id="floatingInput" name="email" placeholder="Email">
                                    <label for="floatingInput">Email</label>
                                 </div>
                                 <span class="text-danger"><?= isset($erreurs['email']) ? $erreurs['email'] : '' ?></span>
                              </td>
                           </tr>
                           <tr>
                              <th>Mot de passe</th>
                              <td>
                                 <div class="form-floating <?= isset($erreurs['password']) ? 'border rounded border-danger' : '' ?>">
                                    <input type="password" class="form-control" id="floatingInput" name="password" placeholder="Password">
                                    <label for="floatingInput">Mot de passe</label>
                                 </div>
                                 <span class="text-danger"><?= isset($erreurs['password']) ? $erreurs['password'] : '' ?></span>

                                 <div class="form-group mt-3">
                                    <label for="terms">
                                       <input type="checkbox" id="terms" name="terms"> J'accepte les <a href="">Termes</a> et <a href="">conditions d'utilisation</a>
                                    </label>
                                    <span class="text-danger"><?= isset($erreurs['terms']) ? $erreurs['terms'] : '' ?></span>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <th></th>
                              <td>
                                 <button type="submit" name="envoyer" class="btn btn-primary btn-lg rouded-btn"><i class="fa fa-paper-plane"></i> M'inscrire</button>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require 'partials/_footer.php'; ?>