
<?php
include_once('../../core/GoodsSql.php');

session_start();

if(!isset($_SESSION["user_type"])||$_SESSION["user_type"]!=0){
	die("You have no permission.");
}
$goods_id=$_POST['goods_id'];
$goods_name=$_POST['goods_name'];
$price=$_POST['price'];



$query = new GoodsSql();
$result=$query->modifyMovieByID($goods_id,$goods_name,$price);
if($result==TRUE){
	echo "New goods modified successfully";
}else{
	echo "There is an ERROR !";
}




?>


