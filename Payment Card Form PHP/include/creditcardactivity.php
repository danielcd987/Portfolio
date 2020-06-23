<?php

  if(isset($_POST['submitcardinfo'])){ //if button was clicked
	
	require 'dbconnection.php'; //gets the file that connects to the database

//these get the values from the form in index_creditcards
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$cardtype = $_POST['cardtype'];
	$card_num = hash( 'ripemd160', $_POST['cardnum']); // to hash this i used the link https://www.php.net/manual/en/function.hash.php which gave different methods to hashing uses the ripemd160 
	$cardnumdate = $_POST['cardnumdate'];
	$csc =  hash( 'ripemd160', $_POST['csc']);;

	if(empty($firstname) || empty($lastname) || empty($cardtype) || empty($card_num) || empty($cardnumdate) || empty($csc)) { //if any of the fields are empty
		header("Location: ../index_creditcards.php?error=emptyinput."); //produce the error in the header that there there were empty fields
		exit();
	}
	
	else{
	$sql = "INSERT INTO creditcard_activity (firstname, lastname, cardtype, cardnum, cardnum_date, csc) 
			VALUES ('$firstname', '$lastname', '$cardtype', '$card_num', '$cardnumdate', '$csc') ;";
			
	
	mysqli_query($connection,$sql); //sends two parameters. One for connection and one for DB

	header("Location: ../index_creditcards.php?payment=submitted");

	
	
	}
}



