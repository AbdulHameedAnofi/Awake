<!DOCTYPE html>
<html>
<head>
<style>
	label #fname {
	background: cyan;
}
</style>
	<title>My Form</title>
</head>
<body>
<form action='submit.php' method='POST'>
	<label for="fname"><b>First</b> name:</label><br>
	<input type="text" id="fname" name="fname"><br>
	<label for="lname"><i>Last</i> name:</label><br>
	<input type="lname" name="lname"><br>
	<input type="submit" name='submit' value="Submit">
</form>
</body>
</html>