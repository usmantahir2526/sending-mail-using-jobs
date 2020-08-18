<!DOCTYPE html>
<html>
<head>
	<title>Email Template</title>
</head>
<body>
<form method="post" action="/index">
	@csrf
	<input type="text" name="name"><br><br>
	<input type="email" name="email"><br><br>
	<input type="password" name="password"><br><br>
	<button type="submit">Submit</button>
</form>
</body>
</html>