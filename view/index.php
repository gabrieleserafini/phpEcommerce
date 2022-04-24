<?php
  //use Controller\ProductsController
  include("includes/head.php"); 
  include("includes/nav.php");
  include("../controller/ProductsController.php");


if (isset($_GET['cat'])) {
  $products = new ProductsController();
  $products = $products->getProductByCategory($_GET['cat']);
} else {
  $data = new ProductsController();
  $products = $data->getAllProducts();
}
?>


  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">

        <ul class="seq-canvas">
          <li>
            <div class="seq-model"> <img data-seq src="img/slider/ind9.gif" alt="Men slide img" /> </div>
            <div class="seq-title"> <span data-seq>Save Up to 75% Plus</span>
              <h2 data-seq>Best Fake Ever</h2>
              <p data-seq>Shop at the higher prices.</p>
              <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
            </div>
          </li>
        </ul>

      </div>
    </div>
  </section>

  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">

                <ul class="nav nav-tabs aa-products-tab">

                </ul>

                <div class="tab-content">
                  <div class="tab-pane fade in active" id="men">


                    <ul class="aa-product-catg">
                      <?php
                      foreach ($products as $product) :
                      ?>
                        <?php
                          $pro_id = $product['product_id'];
                          $pro_title = $product['product_title'];
                          $pro_cat = $product['cat_id'];
                          $pro_brand = $product['brand_id'];
                          $pro_desc = $product['product_desc'];
                          $pro_price = $product['price'];
                          $pro_img1 = $product['product_img1'];
                          echo "
                                <li>
                                    <figure> 
                                      <a class='aa-product-img href='#'>
                                        <img src='product_images/$pro_img1' alt='$pro_img1' width='250' height='300' >
                                      </a> 
                                      <a class='aa-add-card-btn' href='index.php?add_cart=$pro_id'>
                                        <span class='fa fa-shopping-cart'></span>Add To Cart
                                      </a>
                                      <figcaption>
                                        <h4 class='aa-product-title'><a href='#'>$pro_title</a></h4>
                                        <span class='aa-product-price'>€ $pro_price</span>   
                                      </figcaption>
                                    </figure>
                                
                                  <div class='aa-product-hvr-content'> 
                                    <a href='#' data-toggle='tooltip' data-placement='top' title='Add to Wishlist'>
                                      <span class='fa fa-heart-o'></span>
                                    </a> 
                                    <a href='#' data-toggle='tooltip' data-placement='top' title='Compare'>
                                    <span class='fa fa-exchange'></span>
                                    </a> 
                                    <a href='modal.php?Id=$pro_id' data-toggle2='tooltip' data-placement='top' title='Quick View' data-toggle='modal'
                                    data-target='#quick-view-modal'>
                                      <span class='fa fa-search'></span>
                                    </a> 
                                  </div>
                                  <span class='aa-badge aa-sale' href='#'>SALE!</span> 
                                </li>
                            "; 
                        ?>

                      <?php endforeach; ?>

                    </ul>
                    <a class="aa-browse-btn" href="index.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                  </div>

                </div>
              </div>

              
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single"> <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING IN YOUR DREAMS</h4>

              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single"> <span class="fa fa-clock-o"></span>
                <h4>NO MONEY BACK</h4>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single"> <span class="fa fa-phone"></span>
                <h4>SUPPORT 0</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="aa-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">

              <li>
                <div class="aa-testimonial-single"> <img class="aa-testimonial-img" src="../view/img/zeinab.png" alt="testimonial img"> <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <div class="aa-testimonial-info">
                    <p>Gabriele</p>
                    <span>WEB DEVELOPER</span> <a href="#">NON ANCORA</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="aa-testimonial-single"> <img class="aa-testimonial-img" src="../view/img/emma.png" alt="testimonial img"> <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <div class="aa-testimonial-info">
                    <p>Gabriele Positivo</p>
                    <span>WEB DEVELOPER</span> <a href="#">DA SEMPRE</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="aa-testimonial-single"> <img class="aa-testimonial-img" src="../view/img/zeinab.png" alt="testimonial img"> <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <div class="aa-testimonial-info">
                    <p>Gabriele Negativo</p>
                    <span>WEB DEVELOPER</span> <a href="#">NEI SOGNI</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
              <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
              <li><a href="#"><img src="img/client-brand-joomla.png" alt="joomla img"></a></li>
              <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
              <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
include ("includes/footer.php");
?>
