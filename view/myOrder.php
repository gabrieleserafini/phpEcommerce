<?php  
   
    //use Database\DB;
    //use Controller\{ProductsController,payementController}; 
    require_once("../database/DB.php");
    include("../controller/ProductsController.php");
    include("../controller/payementController.php");
    include ("includes/head.php");
    include("includes/nav.php");

?>
    <section id="aa-catg-head-banner">
      <img src="img/cart.jpg" alt="fashion img" height="20%" width="100%">
      <div class="aa-catg-head-banner-area">
        <div class="container">
          <div class="aa-catg-head-banner-content">
            <h2>Cart Page</h2>
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>                   
              <li class="active">Cart</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section id="cart-view">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="cart-view-area">
              <div class="cart-view-table">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th></th>
                            <th></th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                          </tr>
                        </thead>
                        <tbody>
    <?php
      
      $ip=getIp();
      $pay= new payementController();
      $payment=$pay->getPayer($ip);
      var_dump($payment)
     
     /* foreach($payment as $p){
        
        $p_id = $p['p_id'];
        $qty = $p_price['qty'];
        $products=;
        $products=$products->
        
          foreach($products as $pp_price){
              //$product_price = array($pp_price['price']);
              $product_title = $pp_price['product_title'];
              $product_image = $pp_price['product_img1'];
              $single_price = $pp_price['price'];
              $qty_price = $single_price * $qty;
              $total+=$qty_price;*/
          
	  ?>
                    
?>
<?php
  include ("includes/footer.php");
?>