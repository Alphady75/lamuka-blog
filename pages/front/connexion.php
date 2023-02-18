<?php

$title = "Se connecter";
$active = "connextion";

require 'partials/_header.php';

?>

<section class="py-5">
   <div class="container">
      <div class="row">
         <div class="col-sm-5 mx-auto">
            <div class="card">
               <div class="card-body">
                  <form method="post">
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
                              </td>
                           </tr>
                           <tr>
                              <th>Mot de passe</th>
                              <td>
                                 <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="password" placeholder="Password">
                                    <label for="floatingInput">Mot de passe</label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <th></th>
                              <td>
                                 <button type="submit" class="btn btn-primary btn-lg rouded-btn"><i class="fa fa-glod"></i> Connexion</button>
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