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

		$sql = $db ->query("SELECT * FROM products");
		$sql1 = $db ->query("SELECT * FROM products WHERE category LIKE 'Smartphones' ");
		$sql2 = $db ->query("SELECT * FROM products WHERE category LIKE 'Smartphones' ");
				$sql3 = $db ->query("SELECT * FROM products WHERE category LIKE 'Accessories' ");
								$sql4 = $db ->query("SELECT * FROM products WHERE category LIKE 'Laptops' ");

	 ?>
    </head>
	<body>
		
<?php

include 'topnav.php';

?>
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="store2.php?info=Laptops" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="store2.php?info=Accessories" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/smartphone.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Smartphones<br>Collection</h3>
								<a href="store2.php?info=Smartphones" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">

									<li class="active">	<a href="store2.php?info=Smartphones">Smartphones</a></li>
									<li><a  href="store2.php?info=Laptops">Laptops</a></li>
									<li><a  href="store2.php?info=Accessories">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
								
  <?php  while ($rows = mysqli_fetch_assoc($sql1)): ?>
										<!-- product -->
								
											<div class="product">
														<a href="product-single.php?info=<?= $rows['id']; ?>">
											<div class="product-img">
												<img src="<?= $rows['product_img']; ?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category"><?= $rows['category']; ?></p>
												<h3 class="product-name"><a href="#"><?= $rows['name']; ?></a></h3>
												<h4 class="product-price">ksh <?= $rows['price']; ?>  <del class="product-old-price"><?= $rows['pprice']; ?> </del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												
											</div>
											<a href="product-single.php?info=<?= $rows['id']; ?>">	<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-eye"></i>View</button>
											</div></a>
										</a></div>
										<!-- /product -->

	 <?php endwhile; ?>

									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="store.php">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li  class="active"><a  href="store.php">All</a></li>
									<li><a href="store2.php?info=Smartphones">Smartphones</a></li>
									<li><a  href="store2.php?info=Laptops">Laptops</a></li>
									<li><a  href="store2.php?info=Accessories">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										

  <?php  while ($rows = mysqli_fetch_assoc($sql)): ?>
										<!-- product -->
										<div class="product">
											<a href="product-single.php?info=<?= $rows['id']; ?>">
											<div class="product-img">
												<img src="<?= $rows['product_img']; ?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category"><?= $rows['category']; ?></p>
												<h3 class="product-name"><a href="#"><?= $rows['name']; ?></a></h3>
												<h4 class="product-price">ksh <?= $rows['price']; ?>  <del class="product-old-price"><?= $rows['pprice']; ?> </del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												
											</div>
											<a href="product-single.php?info=<?= $rows['id']; ?>">	<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-eye"></i>View</button>
											</div></a>
										</a>
										</div>
										<!-- /product -->

			
	 <?php endwhile; ?>							
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<h3 class="title" style="margin-top: -2%;">More items</h3>
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Phones</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
	<?php  while ($rows = mysqli_fetch_assoc($sql2)): ?>
								<div>

								<!-- product widget -->
								<div class="product-widget">
													<a href="product-single.php?info=<?= $rows['id']; ?>">
									<div class="product-img">
										<img src="<?= $rows['product_img']; ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?= $rows['sub_category']; ?></p>
										<h3 class="product-name"><a href="#"><?= $rows['name']; ?></a></h3>
										<h4 class="product-price">ksh <?= $rows['price']; ?> <del class="product-old-price"><?= $rows['pprice']; ?> </del></h4>
									</div>
								</a></div>
								<!-- product widget -->
	

							</div>
								 <?php endwhile; ?>	
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Accessories</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
					<?php  while ($rows = mysqli_fetch_assoc($sql3)): ?>
							<div>
									

								<!-- product widget -->
								<div class="product-widget">
													<a href="product-single.php?info=<?= $rows['id']; ?>">
									<div class="product-img">
										<img src="<?= $rows['product_img']; ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?= $rows['sub_category']; ?></p>
										<h3 class="product-name"><a href="#"><?= $rows['name']; ?></a></h3>
										<h4 class="product-price">ksh <?= $rows['price']; ?> <del class="product-old-price"><?= $rows['pprice']; ?> </del></h4>
									</div>
								</a></div>
								<!-- product widget -->

							</div>	 <?php endwhile; ?>	
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Laptops</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<?php  while ($rows = mysqli_fetch_assoc($sql4)): ?>
								<div>
								

								<!-- product widget -->
								<div class="product-widget">
													<a href="product-single.php?info=<?= $rows['id']; ?>">
									<div class="product-img">
										<img src="<?= $rows['product_img']; ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?= $rows['sub_category']; ?></p>
										<h3 class="product-name"><a href="#"><?= $rows['name']; ?></a></h3>
										<h4 class="product-price">ksh <?= $rows['price']; ?> <del class="product-old-price"><?= $rows['pprice']; ?> </del></h4>
									</div>
								</a></div>
								<!-- product widget -->

							</div>
								 <?php endwhile; ?>	
						</div>
					</div>

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
