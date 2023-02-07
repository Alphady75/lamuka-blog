<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>
      <?= isset($title) ? $title : 'Bienvenu sur ' . APP_NAME ?>
   </title>
   <link rel="stylesheet" href="assets/bootstrap/5.0.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/front/css/style.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   <header class="bg-light">

      <div class="py-3 bg-white">
         <div class="container">
            <div class="row">
               <div class="col-sm-6" style="margin-left: auto;text-align:right;">
                  <a class="btn btn-primary rouded-btn" href="?page=login">
                     Connexion
                  </a>
               </div>
            </div>
         </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-light">
         <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
               aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="?page=accueil">
               <?= APP_NAME ?>
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
               <ul class="navbar-nav mb-2 mb-lg-0" style="margin-left:auto;">
                  <li class="nav-item">
                     <a class="nav-link <?= $active == 'accueil' ? 'active' : '' ?>" href="?page=accueil"><i
                           class="fa fa-home"></i></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?= $active == 'blog' ? 'active' : '' ?>" href="?page=blog">Blog</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?= $active == 'apropos' ? 'active' : '' ?>" href="?page=apropos">A propos</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?= $active == 'contact' ? 'active' : '' ?>" href="?page=contact">Contact</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
   </header>