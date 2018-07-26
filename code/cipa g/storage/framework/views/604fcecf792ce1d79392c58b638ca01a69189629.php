<!DOCTYPE html>
<html lang="en" >

<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

          <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
</head>

<body>
	<div class="container">
		    <div class="row">
		    	 <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Registration Form</div>
                             <div class="panel-body">
 	                             
<form class="form-horizontal" method="POST" action="/insert">
	<?php echo e(csrf_field()); ?>

	
	<table>
	   <div class="form-group">
	<tr><td><label for="name" class="col-md-4 control-label">USERNAME:</label></td><td>
    <div class="col-md-6">
    <input type="text" id="name" type="text" class="form-control" name="user" value="" required autofocus></td>                 
</div>
</div>
</tr>
<tr>
<div class="form-group">
	<td><label for="name" class="col-md-4 control-label">FIRSTNAME:</label></td><td>
        <div class="col-md-6">
            <input type="text" name="first" id="name" type="text" class="form-control"  value="" required autofocus></td>
        </div>
    </div></tr>
    <tr><td>
    <div class="form-group">
	<label for="name" class="col-md-4 control-label">LASTNAME:</label></td><td>
    <div class="col-md-6">
    <input type="text" name="last" id="name" type="text" class="form-control"  value="" required autofocus></td>

</div>
</div>
</tr>
<tr>
    <td>
 <div class="form-group">
	<<label for="name" class="col-md-4 control-label">MIDDEL NAME</label></td>
     <div class="col-md-6">
        <td>
    <input type="text" name="middle" id="name" type="text" class="form-control"  value="" required autofocus></td></tr>
</div>
</div>
<tr>
    <td>
<div class="form-group">
			<label for="name" class="col-md-4 control-label">EMAIL</label></td><td>
              <div class="col-md-6">
            <input type="email" name="email" id="name" type="text" class="form-control"  value="" required autofocus></td></tr>
					</div>
                </div>
                <tr>
                    <td>
                <div class="form-group">
					<label for="name" class="col-md-4 control-label">Password:</label></td>
                       <div class="col-md-6">
                        <td>
                    <input type="Password" name="Password" class="col-md-4 control-label"></td>
                </tr>
					</div>
                </div>
                <tr>
<div class="form-group">
    <td>
     <div class="col-md-6 col-md-offset-4">
					<button type="submit"  class="btn btn-primary">
                        Register
                    </button>
                </td></tr>
                </div>
            </div>
					

</form>
</div>
  </div>

</div>

</div>
</div>
</body>

</html>
