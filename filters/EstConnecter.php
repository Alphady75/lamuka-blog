<?php

function EstConnecter(){

   if (isset($_SESSION['user_id'])) {
      return true;
   }

}