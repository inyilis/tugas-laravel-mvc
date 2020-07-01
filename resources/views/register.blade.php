<!DOCTYPE html>
<html>
	<head>
		<title>HTML</title>
	</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sing Up Form</h3>
	<form action="/welcome" method="POST">
		@csrf
		<p>First name:</p>	<input type="text" name="firstName"><br>
		<p>Last name:</p>	<input type="text" name="lastName"><br>
		<p>Gender:</p>
			<input type="radio" name="Gender" value="Male"> Male <br>
			<input type="radio" name="Gender" value="Female"> Female <br>
			<input type="radio" name="Gender" value="Other"> Other <br>
		<p>Nationality:</p>
			<select>
				<option>Indonesia</option>
				<option>Korea</option>
				<option>Japan</option>
			</select>
		<p>Language Spoken:</p>
			<input type="checkbox" name="languageSpoken"> Bahasa Indonesia <br>
			<input type="checkbox" name="languageSpoken"> English <br>
			<input type="checkbox" name="languageSpoken"> Other <br>
		<p>Bio:</p>
			<textarea class="input" style="resize: none; width: 200px; height: 100px;"></textarea> <br>
		<input type="submit" value="Sing Up">
	</form>
</body>
</html>