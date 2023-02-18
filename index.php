<?php

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

}elseif($page == 'contact'){

   require_once('pages/front/contact.php');

}elseif($page == 'connexion'){

   require_once('pages/front/connexion.php');

}elseif($page == 'inscription'){

   require_once('pages/front/inscription.php');

}elseif($page == 'inscription_reussi'){

   require_once('pages/front/inscription_success.php');

}else{
   
   require_once('pages/front/404.php');

}