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

$product_id = $_GET['info'];

$product_info = $db->query("SELECT * FROM products WHERE id = $product_id");
$details = mysqli_fetch_assoc($product_info);

$sub_category = $details['sub_category'];

$product_info1 = $db->query("SELECT * FROM productimg WHERE img_id = $product_id");

$product_info2 = $db->query("SELECT * FROM productimg WHERE img_id = $product_id");

$related = $db->query("SELECT * FROM products WHERE sub_category ='$sub_category' LIMIT 4; ");




?>
    </head>
	<body>
		<?php 
			include 'topnav.php'; ?>

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li><a href="#"><?= $details['category']; ?> </a></li>
							<li><a href="#"><?= $details['sub_category']; ?> </a></li>
							<li class="active"><?= $details['name']; ?></li>
					
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
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="<?= $details['product_img']; ?>" alt="">
							</div>

						<?php  while ($rows1 = mysqli_fetch_assoc($product_info1)): ?>
							<div class="product-preview">
								<img src="<?= $rows1['img']; ?>" alt="">
							</div>
						<?php endwhile; ?>
    		
							
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="<?= $details['product_img']; ?>" alt="">
							</div>

						<?php  while ($rows2 = mysqli_fetch_assoc($product_info2)): ?>
							<div class="product-preview">
								<img src="<?= $rows2['img']; ?>" alt="">
							</div>
						<?php endwhile; ?>

						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"> <?= $details['name']; ?></h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class="product-price">ksh. <?= $details['price']; ?><del class="product-old-price"> <?= $details['pprice']; ?></del></h3>
								<span class="product-available"> <?= $details['sold_available']; ?></span>
							</div>
							<p> <?= $details['brief_description']; ?>.</p>

							<div class="product-options">
							
								<h4 style="color: #D10024;">Colors : <font style="color: grey"><?= $details['color']; ?> </font>  </h4>
							</div>

							<div class="add-to-cart">
								
							<a href="tel://0711392452"><button class="add-to-cart-btn"><i class="fa fa-phone"></i>Contact me</button></a>	
							</div>

						

							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#"><?= $details['category']; ?></a></li>
								<li><a href="#"><?= $details['sub_category']; ?></a></li>
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="https://www.facebook.com/WirelessWorldtechnologies-101641198065785/?ref=search&__tn__=%2Cd%2CP-R&eid=ARBNYk7oYd2DZgqL8wD62ao6yxK34upHqjsmPdqy7LdQ1yK5io7S3vVkfyjGqa9FTCcFXAEkapC5yuNI"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/wirelessworld001/?hl=en"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p><?= $details['summary']; ?></p>
										</div>
									</div>
								</div>
								
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>



					<div class="clearfix visible-sm visible-xs"></div>

  <?php  while ($rows3 = mysqli_fetch_assoc($related)): ?>
						<a href="product-single.php?info=<?= $rows3['id']; ?>"><!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="<?= $rows3['product_img']; ?>" alt="">
							</div>
							<div class="product-body">
								<p class="product-category"><?= $rows3['category']; ?></p>
								<h3 class="product-name"><a href="#"><?= $rows3['name']; ?></a></h3>
								<h4 class="product-price">ksh <?= $rows3['price']; ?> <del class="product-old-price"><?= $rows3['pprice']; ?></del></h4>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
							
							</div>
									<a href="product-single.php?info=<?= $rows['id']; ?>">	<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-eye"></i>View</button>
											</div></a>
						</div>
					</div></a>
					<!-- /product -->

			 <?php endwhile; ?>


				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

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
									<a href="https://www.facebook.com/WirelessWorldtechnologies-101641198065785/?ref=search&__tn__=%2Cd%2CP-R&eid=ARBNYk7oYd2DZgqL8wD62ao6yxK34upHqjsmPdqy7LdQ1yK5io7S3vVkfyjGqa9FTCcFXAEkapC5yuNI"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.instagram.com/wirelessworld001/?hl=en"><i class="fa fa-instagram"></i></a>
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
