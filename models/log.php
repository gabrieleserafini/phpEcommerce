<?php

  // namespace Models;

  class log{
    //private $sel_c = "SELECT * FROM customers WHERE customer_email='c_email' AND customer_pass='c_pass'";
    static public function Authentification(){
        $sel_c = "SELECT * FROM customers WHERE customer_email='c_email' AND customer_pass='c_pass'";
        $run_c=DB::connect()->query($sel_c);
        return $run_c->fetchAll();
        //$check_customer = $run_c->rowCount();
        //return $check_customer->fetchAll();
        
    }
  }

