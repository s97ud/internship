<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>hello git</h1>
	<form action="{{url('insertApple')}}" method="POST">
		@csrf
		<input type="color" name="color"><br>
		<input type="number" name="apple_id"><br>
		<input type="text" name="shape"><br>
		<input type="number" name="size"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>