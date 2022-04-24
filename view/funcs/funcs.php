<?php

    // namespace Funcs


	function getIp() {
		$ip = $_SERVER['REMOTE_ADDR'];
	
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];  
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
		}
	
		return $ip;
	}

	function cart(){
		
		if(isset($_GET['add_cart'])){
			
			
			$ip=getIp();
			$pro_id = $_GET['add_cart'];
			$cat=new CartController();
		
				$cat->insertionpanier($pro_id,$ip);
				
				echo "
					<script>window.open('index.php','_self')</script>"
				;
			
		}
	}


	function total_price(){
		
		$total=0;
		$ip=getIp();
		$cat=new CartController();
		$cart=$cat->getPanier($ip);
		
		foreach($cart as $p_price){
				
			$pro_id = $p_price['p_id'];
			
			$prod=$prod->getProductByPanier($pro_id);
			
			
			
			foreach($prod as $pp_price){
				$pro_price = array($pp_price['price']);
				
				$values = array_sum($pro_price);
						
				$total+=$values;
				}
		echo "€".$total;
	}}
