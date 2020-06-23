<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Credit Card Activity</title>
  <meta name="Daniel DeCarlo" >
  <link rel="stylesheet" type = "text/css" href="creditcard_activity_style.css">
</head>
<script></script>
<body>
<div class = "credit_header">
<h1 class = "credit_heading">Credit Card Hashing Activity:</h1> <br>
</div>

<div class = "creditform">
	<form method = "POST" action = "include/creditcardactivity.php">
		<label>First name:<label>
		<input type = "text" name = "firstname" placeholder = "Enter First Name"> <br> <br>
		
		<label>Last name:<label>
		<input type = "text" name = "lastname" placeholder = "Enter Last Name"> <br> <br>

		<label>Card type:<label>
		<select name = "cardtype">
			<option name = "credit" value = "credit">Credit</option>
			<option name = "debit" value = "debit">Debit</option>
		</select>
		
		<label>Card Number:<label>
		<input type = "text" name = "cardnum" placeholder = "1234 5678 8900 0000" maxlength = "20"> <br> <br>
		
		<label>Expiration Date:<label>
		<input type = "month" name = "cardnumdate" min = "<?php echo date('M Y'); ?>" > <br> <br> <!--I tried limiting the year in the month element so the min year you can put is the current year-->
		
		<label>CSC Number:<label>
		<input type = "text" name = "csc" placeholder = "CSC" size = "3" maxlength="3"> <br>  
		<h5>This is the three digit number located on the back of your payment card.</h5>
		<br>
		
		<input type = "submit" name = "submitcardinfo" value = "Submit">
		<input type = "reset">
	</form>
</div>

<?php
if(isset($_GET['error'])){
	if($_GET['error']=="emptyinput"){
	echo"<p>Fill in all fields</p>";
	}
}



?>
</body>
</html>