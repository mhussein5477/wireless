<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="tel://0711392452"><i class="fa fa-phone"></i> +254711392452</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> wirelessworldtechnologies@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Makadara Ground Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> Ksh</a></li>
						<li><a href="login.php"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header" style="padding-top: 0%; padding-bottom: 0%;">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo.png" alt="" style="margin-top: -8% ; margin-left: 10%; " >
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-7" style="margin-top: 5%;">
							<div class="header-search">
								<form action="result.php"  method="post">
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
									<a href="about.php"><i class="fa fa-user-o" style="color: red"></i>
										<span>About</span>
							
									</a>
								</div>
							
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
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
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="store.php">Hot Deals</a></li>
						<li><a href="store2.php?info=Laptops">Laptops</a></li>
						<li><a href="store2.php?info=Smartphones">Smartphones</a></li>
						<li><a href="store2.php?info=Accessories">Accessories</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
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
  background-color: #0096D3;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
   </style>