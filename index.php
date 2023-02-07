<?php

define('APP_NAME', 'Blog');

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

}else{
   
   require_once('pages/front/404.php');

}