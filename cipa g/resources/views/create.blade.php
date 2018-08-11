<!DOCTYPE html>
<html lang="en" >

<head>
  

  
</head>

<body>
<form method="POST" action="/user">
	{{ csrf_field() }}
	<legend> LARAVEL REGISTRATION FORM</legend>
	
	<table>
		<tr><td>
	<label>USERNAME:</label></td><td><input type="text" name="user"></td></tr>
	<tr><td>

	<tr><td><label>EMAIL</label></td><td><input type="text" name="email"></td></tr>
					
					<tr><td><label>Password:</label></td><td><input type="Password" name="Password"></td></tr>
					

					<tr><td><input type="submit" name="submit" value="subimt"></td></tr>
					
</table>
</form>
  




</body>

</html>
