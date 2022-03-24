<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if( isset($_POST['car_no']) && isset ($_POST['model']) && isset($_POST['manufacturer']) && isset($_POST['features']) && isset($_POST['price']) && isset($_POST['key_word'])){
	// write the query to check if this username and password exists in our database
	$b = $_POST['car_no'];
	$u = $_POST['model'];
	$p = $_POST['manufacturer'];
	$c = $_POST['features'];
	$a = $_POST['price'];
	$d = $_POST['key_word'];
	
	$sql = " INSERT INTO car VALUES( '$b', '$u', '$p', '$c', '$a', '$d' ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_cars.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add.php");
	}
	
}


?>