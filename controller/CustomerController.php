<?php

  //namespace Controller;
  //use Database\DB;
  //use Models\Customer;

  include("../models/Customer.php");
  require_once("../database/DB.php");
  require_once("../view/funcs/funcs.php");
  class CustomerController{
    public function getCustommer($data){
        
      $cust=Customer::getCustomer($data);
      return $cust;
    }
  }

?>