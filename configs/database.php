<?php

try {
 
   $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root' , '');
   //echo 'connexion établie';

}catch (PDOException $exception) {
 
   die('Erreur: impossible de se connecter à la base de données ' . $exception->getMessage());
 
}
