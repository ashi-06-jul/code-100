<!DOCTYPE html>
<html lang="en" >

<head>
  

  
</head>

<body>
<form method="POST" action="/index11">
	<?php echo e(csrf_field()); ?>

	<legend> LARAVEL REGISTRATION FORM</legend>
	
	<table>
		<tr><td>
	<label>USERNAME:</label></td><td><input type="text" name="user"></td></tr>
	<tr><td>

	<label>FIRSTNAME:</label></td><td><input type="text" name="first"></td></tr>
	<tr><td><label>LASTNAME:</label></td><td><input type="text" name="last"></td></tr>
	<tr><td><label>MIDDEL NAME</label></td><td><input type="text" name="middle"></td></tr>
			<tr><td><label>EMAIL</label></td><td><input type="email" name="email"></td></tr>
					
					<tr><td><label>Password:</label></td><td><input type="Password" name="Password"></td></tr>
					

					<tr><td><input type="submit" name="submit" value="subimt"></td></tr>
					
</table>
</form>
  




</body>

</html>
