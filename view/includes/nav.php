
<?php 
  include("../controller/CategoriesController.php"); 
  include("../controller/CartController.php");
  $cat = new CategoriesController();
  $categories = $cat->getAllCategories();
?>

<section id="menu">
    <div class="container">
      <div class="menu-area">

      <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="navbar-collapse collapse">
           
            <?php getIp(); ?>
            <?php cart(); ?>
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><?php
                  foreach ($categories as $cat) :
                    $cat_id = $cat['cat_id'];
                    $cat_title = $cat['cat_title'];

                    echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>"; ?>



                <?php endforeach; ?></li>


              <li style="float:right"><a>
                  <?php
                  if (isset($_SESSION['customer_email'])) {
                    echo "Welcome " . substr($_SESSION['customer_email'], 0, 5);
                  } else {
                    echo "Welcome Guest";
                  }

                  ?></a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </section>
