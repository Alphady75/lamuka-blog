<?php 

function champObligatoir($message = null){

   $resultat = isset($message) ? $message : "Ce champs est obligatoir";

   return $resultat;
}

function champTropCourt($max){
   return "Ce champs est trop court, maximum " . $max . " caractères";
}

function badEmailFormat(){
   return "Mauvais format d'adresse email";
}

?>