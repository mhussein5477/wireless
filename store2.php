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


$category = $_GET['info'];
 $u_produce = $db->query("SELECT * FROM products WHERE category = '$category' ");
 $count = $db->query("SELECT category FROM products WHERE category = 'Accessories' ");
$rowcount=mysqli_num_rows($count);

 $count1 = $db->query("SELECT category FROM products WHERE category = 'Laptops' ");
$rowcount1=mysqli_num_rows($count1);

 $count2 = $db->query("SELECT category FROM products WHERE category = 'Smartphones' ");
$rowcount2=mysqli_num_rows($count2);

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
							<li class="active"><?php echo $category ; ?></li>
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
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">
	
<a href="store2.php?info=Smartphones">
								<div class="input-checkbox">
									
									<label for="category-2">
										<span></span>
									Smartphones
										<small style="color: red">(<?php echo $rowcount2; ?>)</small>
									</label>
								</div></a>
<a href="store2.php?info=Accessories">
								<div class="input-checkbox">
								
									<label for="category-4">
										<span></span>
										Accessories
										<small style="color: red">(<?php echo $rowcount; ?>)</small>
									</label>
								</div>
								</a> 
<a href="store2.php?info=Laptops">
								<div class="input-checkbox">
									
									<label for="category-5">
										<span></span>
										Laptops
										<small style="color: red">(<?php echo $rowcount1; ?>)</small>
									</label>
								</div>
</a>
							</div>
						</div>
						<!-- /aside Widget -->

						
					
						
					</div>
					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							
							
           <?php  while ($rows = mysqli_fetch_assoc($u_produce)): ?>
    			
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
									<a href="product-single.php?info=<?= $rows['id']; ?>">	<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-eye"></i>View</button>
											</div></a>
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
