<?php

	
	include 'init/config.php';




move_uploaded_file($_FILES['mybooks']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/wireless/img/'.$_FILES['mybooks']['name']);
$tmp = 'img/'.$_FILES['mybooks']['name'];

move_uploaded_file($_FILES['mybooks1']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/wireless/img/'.$_FILES['mybooks1']['name']);
$tmp1 = 'img/'.$_FILES['mybooks1']['name'];

move_uploaded_file($_FILES['mybooks2']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/wireless/img/'.$_FILES['mybooks2']['name']);
$tmp2 = 'img/'.$_FILES['mybooks2']['name'];

move_uploaded_file($_FILES['mybooks3']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/wireless/img/'.$_FILES['mybooks3']['name']);
$tmp3 = 'img/'.$_FILES['mybooks3']['name'];

$user = $_SESSION['SBUser'];
$name = $_POST['name'];
$category = $_POST['category'];
$sub_category = $_POST['sub_category'];
$color = $_POST['color'];
$price = $_POST['price'];
$pprice = $_POST['pprice'];
$bdescription = $_POST['bdescription'];
$summary = $_POST['summary'];




if (isset($_GET['adding'])) {

$sql = $db->query("INSERT INTO products(  name  ,   category ,   sub_category  ,  color  , price , pprice , sold_available , brief_description , 													summary  , product_img  ) 
                    		  VALUES(   '$name' , '$category' , '$sub_category', '$color'  , '$price' , '$pprice' , 'Available' , '$bdescription' , 
                    		  			'$summary' , '$tmp' ) ");



$j = $db->insert_id;
$sql1 = $db->query("INSERT INTO productimg( img_id , img ) 
							VALUES( '$j' , '$tmp1' )");
$sql2 = $db->query("INSERT INTO productimg( img_id , img ) 
							VALUES( '$j' , '$tmp2' )");
$sql3 = $db->query("INSERT INTO productimg( img_id , img ) 
							VALUES( '$j' , '$tmp3' )");

$product_id = $_GET['info'];
$product_info = $db->query("UPDATE products SET sold_available ='Available' WHERE id = '$product_id'");

header('Location: shop_profile.php');
}

if (isset($_GET['delete'])) {
$product_id = $_GET['info'];
$product_info = $db->query("DELETE FROM products WHERE id = $product_id");
$product_info1 = $db->query("DELETE FROM productimg WHERE img_id = $product_id");

header('Location: shop_profile.php');
}

if (isset($_GET['sold'])) {

$product_id = $_GET['info'];
$product_info = $db->query("UPDATE products SET sold_available ='Sold out' WHERE id = '$product_id'");
header('Location: shop_profile.php');
}

if (isset($_GET['available'])) {

$product_id = $_GET['info'];
$product_info = $db->query("UPDATE products SET sold_available ='Available' WHERE id = '$product_id'");
header('Location: shop_profile.php');
}











?>