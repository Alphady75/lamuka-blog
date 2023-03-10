<?php

session_start();
require_once('filters/EstConnecter.php');

define('APP_NAME', 'Blog');

require_once('fonctions/form_messages.php');
require_once('configs/database.php');

$page = $_GET['page'];

if(!isset($page)){

   header('Location: index.php?page=accueil');

}elseif($page == 'accueil'){

   require_once('pages/front/accueil.php');

}elseif($page == 'apropos'){

   require_once('pages/front/apropos.php');

}elseif($page == 'blog'){

   require_once('pages/front/blog.php');

}elseif($page == 'blog-details'){

   require_once('pages/front/blog_details.php');

}elseif($page == 'contact'){

   require_once('pages/front/contact.php');

}elseif($page == 'connexion'){

   require_once('pages/front/connexion.php');

}elseif($page == 'inscription'){

   require_once('pages/front/inscription.php');

}elseif($page == 'inscription_reussi'){

   require_once('pages/front/inscription_success.php');

}elseif($page == 'profil'){

   require_once('pages/front/profil.php');

}elseif($page == 'admin-article-liste'){

   require_once('pages/admin/articles/liste.php');

}elseif($page == 'admin-article-ajouter'){

   require_once('pages/admin/articles/ajouter.php');
   
}elseif($page == 'article-details'){

   require_once('pages/admin/articles/details.php');

}elseif($page == 'article-modifier'){

   require_once('pages/admin/articles/modifier.php');

}elseif($page == 'article-supprimer'){

   require_once('pages/admin/articles/supprimer.php');

}elseif($page == 'deconnexion'){

   //session_destroy();

   unset($_SESSION['user_id']);

   header('Location: index.php');

}else{
   
   require_once('pages/front/404.php');

}

require_once('partials/_user_sidebare.php');