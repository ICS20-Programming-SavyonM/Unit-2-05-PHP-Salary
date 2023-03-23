<!DOCTYPE html>
<html>
<head>
	<title>Calculate Pay</title>
</head>
<body>
  <!--For Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
	
  <h1>Calculate Pay, with PHP!</h1>
	<form method="post" action="calculate.php">
		<label for="hours_worked">Hours worked:</label>
		<input type="text" id="hours_worked" name="hours_worked"><br><br>
		<label for="hourly_rate">Hourly rate:</label>
		<input type="text" id="hourly_rate" name="hourly_rate"><br><br>
		<input type="submit" value="Calculate">
	</form>
</body>
</html>
