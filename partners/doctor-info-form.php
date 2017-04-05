<!DOCTYPE html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    
	</head>

	<body>

		<form action="insert.php" method="post">
			<label>Dentist's name:</label>
			<input class="input" name="dentist_name" type="text" value="">
			<label>Dentist's speciality:</label>
			<input class="input" name="dentist_speciality1" type="text" value="">
			<label>Additional speciality:</label>
			<input class="input" name="dentist_speciality2" type="text" value="">
			<label>Address:</label>
			<textarea cols="25" name="dentist_address" rows="5"></textarea><br>
			<input class="submit" name="submit" type="submit" value="Insert">
		</form>

	</body>

</html>