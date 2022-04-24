<?php

    //namespace Controller;
    //use Database\DB;
    //use Models\Cart;

    include("../models/payement.php");
    include("../database/DB.php");

    class payementController{
        public function gopayer($total,$c_id,$pro_id){
    
            payement::payer($total,$c_id,$pro_id);
        
        }

        public function getPayer($data){
        
            $pay=Customer::getCustomer($data);

            return $pay;
        }
    }