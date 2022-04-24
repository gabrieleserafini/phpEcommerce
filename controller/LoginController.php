<?php

    //namespace Controller;
    //use Database\DB;
    //use Models\log;

    include("../models/log.php");
    include("../database/DB.php");

    class LoginController{
        public function getAuth(){
            $user=log::Authentification();
            return $user;
        }
    
    }
?>
