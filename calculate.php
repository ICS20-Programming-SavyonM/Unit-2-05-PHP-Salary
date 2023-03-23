<!DOCTYPE html>
<html>
<head>
	<title>Calculate Pay</title>
</head>
<body>
	<h1>Calculate Pay, with PHP!</h1>
	<form method="post" action="calculate.php">
		<label for="hours_worked">Hours worked:</label>
		<input type="text" id="hours_worked" name="hours_worked"><br><br>
		<label for="hourly_rate">Hourly rate:</label>
		<input type="text" id="hourly_rate" name="hourly_rate"><br><br>
		<input type="submit" value="Calculate">
	</form>
<link rel="stylesheet" href="./css/style.css" />
	<?php
	if(isset($_POST['hours_worked']) && isset($_POST['hourly_rate'])) {
		// Retrieve the hours worked and hourly rate from the form
		$hours_worked = $_POST['hours_worked'];
		$hourly_rate = $_POST['hourly_rate'];

		// Calculate the gross pay
		$gross_pay = $hours_worked * $hourly_rate;

		// Calculate the tax amount (20.05% of the gross pay)
		$tax_amount = $gross_pay * 0.2005;

		// Calculate the net pay (gross pay minus tax amount)
		$net_pay = $gross_pay - $tax_amount;

		// Display the results in an HTML table
		echo "<h2>Results:</h2>";
		echo "<table>";
		echo "<tr><td>Gross pay:</td><td>$" . number_format($gross_pay, 2) . "</td></tr>";
		echo "<tr><td>Government will take:</td><td>$" . number_format($tax_amount, 2) . "</td></tr>";
		echo "<tr><td>Net pay:</td><td>$" . number_format($net_pay, 2) . "</td></tr>";
		echo "</table>";
	}
	?>
</body>
</html>
