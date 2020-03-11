<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="icon" href="img/logo2.png"/>
		<title>Profile</title>
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
 		 	<link rel="stylesheet" type="text/css" href="addproduct.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->
<?php

include 'init/config.php';
 $u_produce = $db->query("SELECT * FROM products ");

?>
    </head>
	<body>
		<!-- HEADER -->
		<header>
			

			
			<!-- MAIN HEADER -->
			<div id="header" style="padding-top: 0%; padding-bottom: 0%;">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<h2 style="color: #D10024; margin-top: 20%;">Shop profile</h2>
								</a>
							</div>
						</div>
						<!-- /LOGO -->
		<!-- SEARCH BAR -->
						<div class="col-md-7" style="margin-top: 5%;">
							<div class="header-search">
								<form action="result1.php"  method="post">
									<select class="input-select" name="criteria">
										<option value="Phones">Phones</option>
										<option value="Accessories">Accessories</option>
										<option value="Laptops">Laptops</option>
									</select>
									<input class="input" placeholder="Search here" name="entry" required>
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->


						<!-- ACCOUNT -->
						<div class="col-md-2 clearfix" style="margin-top: 5%;">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="index.php">
									<button style="border: none; background-color: #D10024; padding:15px 15px;">Log out</button>
								</a>
								</div>
						

								
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
		</header>
		<!-- /HEADER -->
<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="shop_profile.php">Home</a></li>
						<li><a href="shop_profile2.php?info=Laptops">Laptops</a></li>
						<li><a href="shop_profile2.php?info=Smartphones">Smartphones</a></li>
						<li><a href="shop_profile2.php?info=Accessories">Accessories</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
	


 <center>
    <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary py-3 px-5" style=" margin-top: 1%; 
    background: #D10024; border-radius: 20px; padding: 10px 70px; ">Add products</button>
    <?php include 'addproduct.php'; ?>
</center>

		<!-- my pics -->
    <section class="ftco-section">
    
    	<div class="container">
    		<div class="row">


           <?php  while ($rows = mysqli_fetch_assoc($u_produce)): ?>
    			

    				<!-- product -->			<div class="col-md-6 col-lg-4  ">
										<div class="product">
											<a href="product-single.php?info=<?= $rows['id']; ?>">
												<div class="product-img">
												<img src="<?= $rows['product_img']; ?>" alt="">
												<div class="product-label">
													
													<span class="new"><?= $rows['sold_available']; ?></span>
												</div>
											</div>
											</a>
											<div class="product-body" style="z-index: 0;">
												<p class="product-category"><?= $rows['category']; ?></p>
												<h3 class="product-name"><a href="#"><?= $rows['name']; ?></a></h3>
												<!--<h4 class="product-price">Ksh <?= $rows['price']; ?><del class="product-old-price">$990.00</del></h4> -->
												<div class="product-btns">
													<button class="add-to-compare"><a href="addproductdb.php?available&info=<?= $rows['id']; ?>"><i class="fa fa-battery-full"></i></a><span class="tooltipp">Available</span></button>

													<button class="add-to-wishlist"><a href="addproductdb.php?sold&info=<?= $rows['id']; ?>"><i class="fa fa-battery-quarter"></i></a><span class="tooltipp">Sold out</span></button>

													<button class="quick-view"><a href="addproductdb.php?delete&info=<?= $rows['id']; ?>"><i class="fa fa-trash"></i></a><span class="tooltipp">Delete</span></button>
												</div>
											</div>
											
										</div>
									</div>

           <?php endwhile; ?>
    		
   			
    			
    		</div>
    	</div>
    </section>


		<!-- /NEWSLETTER -->

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
