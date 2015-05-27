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

//Set default timezone
date_default_timezone_set('Europe/London');

// if form is submitted 
if ($_POST["submit"]) {

	//Change string to time value
	$startDateTime = strtotime($_POST["start-date"]);
	$endDateTime = strtotime($_POST["end-date"]);
	//Format date for returned message
	$startDate = date("D d M Y",$startDateTime);
	$endDate = date("D d M Y",$endDateTime);
	//Calculate difference between dates
	$calcDays = abs($startDateTime - $endDateTime)/(60*60*24);
	$calcHours = abs($startDateTime - $endDateTime)/(60*60);
	$calcMinutes = abs($startDateTime - $endDateTime)/60;
	$calcSeconds = abs($startDateTime - $endDateTime);
	//Compile return message
	$message = "Total time between " . $startDate . " and " . $endDate ." is: <br /><br />";
	$message .= $calcDays . " Day(s)<br />" . $calcHours . " Hour(s)<br />";
	$message .= $calcMinutes . " Minute(s)<br />" . $calcSeconds . " Second(s)<br />";

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
<p class="intro">Please pick a start date and an end date.</p>
<div class="form-wrap">
	<form class="date-form" role="form" method="post" action="">
		<label for="start-date">Start Date:</label><br />
		<input type="date" name="start-date" value="<?php echo date("Y-m-d"); ?>"><br />
		<label for="end-date">End Date:</label><br />
		<input type="date" name="end-date" value="<?php if(isset($endDateTime)){echo date("Y-m-d",$endDateTime);} ?>"><br />
		<input class="submit" name="submit" type="submit" value="submit">
	</form>
</div>
<div class="message">
	<?php
		//output message if set
		if(isset($message)){
			echo $message;
		}
	?>
</div>
</body>
</html>