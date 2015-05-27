<?php

/*
*
* Date Picker
*
* Created by Darren Williams
* for XIBO Ltd
*
* Date: 27/05/15
*
*
*/

include("inc/functions.php");

// if form is submitted 
if ($_POST["submit"]) {

$startDate = strtotime($_POST["start-date"]);
$endDate = strtotime($_POST["end-date"]);

$message = "Difference between two dates is " . abs($startDate - $endDate)/(60*60) . " hour(s)";

// echo $startDate;
// $startDate = explode("-",$startDate);
// echo $startDate[1];

}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Date Picker</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="form-wrap">
	<p>Please pick a start date and an end date.</p>
	<form class="date-form" role="form" method="post" action="">
		<label for="start-date">Start Date:</label><br />
		<input type="date" name="start-date" value="2015-05-27"><br />
		<label for="end-date">End Date:</label><br />
		<input type="date" name="end-date" value="2015-05-28"><br />
		<input id="submit" name="submit" type="submit" value="submit">
	</form>
	<div class="message">
	<?php
		if(isset($message)){
			echo $message;
		}
	?>
	</div>
</div>
</body>
</html>