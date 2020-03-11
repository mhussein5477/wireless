<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

			<link rel="icon" href="img/logo2.png"/>
		<title>Wireless World Technology</title>


 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

	<?php 

include 'init/config.php';

 $criteria = $_POST['criteria'];
    $entry = trim($_POST['entry']);

    switch($criteria){

      case 'Phones':
        $result_array = explode(' ', $entry);

        foreach ($result_array as $key => $value) {
          $sql = $db->query("SELECT * FROM products WHERE name LIKE  '%$value%' OR category LIKE  '%$value%' OR sub_category LIKE  '%$value%' OR brief_description LIKE  '%$value%' OR summary LIKE  '%$value%' ");
        }
        break;

           case 'Accessories':
        $result_array = explode(' ', $entry);

        foreach ($result_array as $key => $value) {
          $sql = $db->query("SELECT * FROM products WHERE name LIKE  '%$value%' OR category LIKE  '%$value%' OR sub_category LIKE  '%$value%' OR brief_description LIKE  '%$value%' OR summary LIKE  '%$value%' ");
        }
        break;

           case 'Laptops':
        $result_array = explode(' ', $entry);

        foreach ($result_array as $key => $value) {
          $sql = $db->query("SELECT * FROM products WHERE name LIKE  '%$value%' OR category LIKE  '%$value%' OR sub_category LIKE  '%$value%' OR brief_description LIKE  '%$value%' OR summary LIKE  '%$value%' ");
        }
        break;
    }

	 ?>

    </head>
	<body>
	<?php  include 'topnav.php'; ?>
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active"><?php echo $entry ; ?></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							
							
           <?php  while ($rows = mysqli_fetch_assoc($sql)): ?>
    			
							<!-- product -->
							<a href="product-single.php?info=<?= $rows['id']; ?>">
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="<?= $rows['product_img']; ?>" alt="">
										<div class="product-label">
											
											<span class="new"><?= $rows['sold_available']; ?></span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category"><?= $rows['category']; ?></p>
										<h3 class="product-name"><a href="#"><?= $rows['name']; ?></a></h3>
										<h4 class="product-price">ksh. <?= $rows['price']; ?> <del class="product-old-price"><?= $rows['pprice']; ?> </del></h4>
										
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>View</button>
									</div>
								</div>
							</div></a>
							<!-- /product -->							

							<div class="clearfix visible-sm visible-xs"></div>

		 <?php endwhile; ?>
						
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

	<?php include 'footer.php'; ?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		<!-- /NAVIGATION -->
<script>

$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#myBtn').fadeIn();
            } else {
                $('#myBtn').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#myBtn').click(function () {
            $('#myBtn').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#myBtn').tooltip('show');

});
</script>

<style type="text/css">
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #D10024;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
   </style>
	</body>
</html>
