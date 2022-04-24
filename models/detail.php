<?php

    // namespace Models;

    class detail{
	    static public function showDetail(){
		    $prod_Id = $_GET['Id'];
		    $get_products = "SELECT * FROM products JOIN categories ON (products.cat_id=categories.cat_id) WHERE product_id='$prod_Id'";
            $run_products=DB::connect()->query($get_products);
		    $run_products->execute();
		
			return $run_products->fetchAll();
		
			$stmt->close();
		    $stmt=null;
	    } 
    }
?>