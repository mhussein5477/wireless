<?php
	
include 'init/config.php';


$user = $_POST['user'];
$password = $_POST['password'];



$userresult = $db->query("SELECT * FROM user WHERE user = '$user' AND password = '$password' ");
$count = mysqli_num_rows($userresult);


if ($count>0) {
    $user_id = mysqli_fetch_assoc($userresult);
    Login($user_id['id']);

}
else{
	?>
	 <script>
        alert('Invalid password or Username / Username exist');   
        window.location.pathname="wireless/login.php";
    </script>
    <?php

}



?>


