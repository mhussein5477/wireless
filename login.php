<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log in</title>
  <link rel="icon" type="image/ico" href="img/core-img/logo.png" />
   <link rel="icon" type="image/ico" href="c.png" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100" >
        <form class="login100-form validate-form" action="loginform.php" method="POST" style="background-color: #000;">
          <span class="login100-form-title p-b-43" style="margin-top: -35%;">
            <a href="index.php"><img src="img/logo.png" style="margin-bottom: -10% ; margin-top: 0%;"></a>
         

          </span>
          
          
          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz"  style="background-color: transparent; color: white">
            <input class="input100" type="text" name="user" placeholder="User" style="background-color: transparent; color: white">
          </div>
          
          
          <div class="wrap-input100 validate-input" data-validate="Password is required"  style="background-color: transparent; color: white">
            <input class="input100" type="password" name="password" placeholder="Password"  style="background-color: transparent; color: white">
          </div>

          <div class="flex-sb-m w-full p-t-3 p-b-32">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label>
            </div>

            <div>
              <a href="#" class="txt1">
                Forgot Password?
              </a>
            </div>
          </div>
      

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" style="background: red; border-radius: 30px;">
              Login
            </button>
          </div>
          
          
        </form>



        <div class="login100-more" style="background-image: url('img/login.jpg');">

        </div>
      </div>
    </div>
  </div>
  
  

  
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>