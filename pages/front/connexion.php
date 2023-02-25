<?php

$title = "Se connecter";
$active = "connextion";

if (isset($_POST['connexion'])) {
   
   extract($_POST);

   $message = 'Email ou mot de passe incorrect';

   $erreurs = [];

   // Traitements des erreurs
   if (empty($email)) {
      $erreurs['email'] = champObligatoir();
   } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $erreurs['email'] = badEmailFormat();
   }

   if (empty($password)) {
      $erreurs['password'] = champObligatoir();
   }

   if (empty($erreurs)) {
      
      // Verifions si un utilisateur l'utilisateur a déjà un
      $query = $db->prepare("SELECT * FROM user WHERE email = :email");

      $query->execute([
         'email' => $email
      ]);

      $user = $query->fetch();

      if ($user) {

         // Verification de la validité du mot de passe
         if (password_verify($password, $user['password'])) {

            // On connecte l'utilisateur
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['pseudo'] = $user['pseudo'];
            $_SESSION['email'] = $user['email'];

            header('Location: index.php?page=profil');
         }

         $erreurs['message'] = $message;

      } else {

         $erreurs['message'] = $message;
      }
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

                     <?php if(isset($erreurs['message'])): ?>
                     <div class="alert alert-danger">
                        <?= $erreurs['message'] ?>
                     </div>
                     <?php endif; ?>

                     <table class="table table-borderless">
                        <tbody>
                           <tr>
                              <th></th>
                              <td>
                                 <legend class="font-weight-bold py-4">Connexion</legend>
                              </td>
                           </tr>
                           <tr>
                              <th>Adresse email</th>
                              <td>
                                 <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="email" placeholder="Email">
                                    <label for="floatingInput">Email</label>
                                 </div>
                                 <span class="text-danger"><?= isset($erreurs['email']) ? $erreurs['email'] : '' ?></span>
                              </td>
                           </tr>
                           <tr>
                              <th>Mot de passe</th>
                              <td>
                                 <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingInput" name="password" placeholder="Password">
                                    <label for="floatingInput">Mot de passe</label>
                                 </div>
                                 <span class="text-danger"><?= isset($erreurs['password']) ? $erreurs['password'] : '' ?></span>
                              </td>
                           </tr>
                           <tr>
                              <th></th>
                              <td>
                                 <button name="connexion" type="submit" class="btn btn-primary btn-lg rouded-btn"><i class="fa fa-glod"></i> Connexion</button>
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