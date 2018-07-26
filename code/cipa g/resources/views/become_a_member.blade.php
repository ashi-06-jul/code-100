<!Doctype html>
<html lang="en">
<head>
	  <link rel="icon" href="images/cipa.png" type="image/jpg" sizes="16x16">
<title>Hope Center | Contact</title>
<meta charset="utf-8">

<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Vegur_700.font.js"></script>
<script type="text/javascript" src="js/Vegur_400.font.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>

 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <style type="text/css">

 	

div.content {
width: 50%;
padding: 0 5%;
float: left}

div.right {
width: 50%; 
padding: 0 5% 0 0;
float: left}
 </style>
 <header>
      <div class="wrapper">
        <h1><a href="/i" id="logo">Hope Center</a></h1>
        <nav>
          <ul id="top_nav">
            <li><a href="/i"><img src="images/top_icon1.gif" alt=""></a></li>
            <li><a href="#"><img src="images/top_icon2.gif" alt=""></a></li>
            <li class="end"><a href="contact.html"><img src="images/top_icon3.gif" alt=""></a></li>
          </ul>
        </nav>
        <nav>

        </nav>
      </div>
    </header>
</head>
<body>
	<form action="/become_a_member" method="POST">
		{{ csrf_field() }}
	
	
    <div class="box1">
    <div class="line2 wrapper"> 
          <h2><strong>B</strong>ecome<strong >V</strong>olunteers/<strong>F</strong>undraised</h2>
          <div class="form-horizontal">   
          	<div class="main">
<div class="content">

	<aside class="col1">

	<table class="table table-bordered"  >
		<tr><td class="control-label col-sm-2">Name</td><td ><input type="text" name="name" class="form-control" required="required" placeholder="Enter your name"></td>
		</tr>
		<tr>
		<td class="control-label col-sm-2">Age</td><td><input type="number" name="age" class="form-control" required="required" placeholder="enter your age" ></td></tr>
		<tr><td class="control-label col-sm-2">Sex</td><td>Male<input type="radio" name="psex" value="M">&nbsp;&nbsp;&nbsp;Female<input type="radio" name="psex" value="F" ></td>
		<tr><td>Work Type</td><td><select name="type" class="form-control">
			<option>Select type</option>
			<option value="volunter">Volunter</option>
			<option value="Fundraised">Fundraise</option>
		</select></td>
	</tr>
	<tr><td class="control-label col-sm-2">Work From</td><td><input type="date" name="workfrom" class="form-control"></td></tr><tr><td class="control-label col-sm-2">Work to</td><td><input type="date" name="workto" class="form-control"></td></tr>
		<tr>
		<td class="control-label col-sm-2">Mobile No.</td><td><input type="text" name="mobile" class="form-control" required="required" placeholder="enter your mobile no"></td></tr></tr>
		<tr><td class="control-label col-sm-2">Address</td><td><input type="text" name="address" class="form-control" required="required" placeholder="enter your address"></td></tr>
		<tr><td class="control-label col-sm-2">City</td><td><input type="text" name="city" class="form-control" class="form-control" required="required" placeholder="enter your city"></td></tr>
		<tr><td class="control-label col-sm-2">District</td><td><input type="text" name="district" class="form-control" required="required" placeholder="enter your district"></td></tr>
		<tr><td class="control-label col-sm-2">State</td><td><input type="text" name="state" class="form-control" required="required" placeholder="enter your state"></td></tr>
		
		<tr><td class="control-label col-sm-2">Email</td><td><input type="text" name="email" class="form-control" required="required" placeholder="enter your email"></td></tr>


		<tr><td class="control-label col-sm-2">Qualification</td><td><input type="text" name="qualification" class="form-control" required="required" placeholder="enter your Qualification" ></td></tr>

		</table>
		<table>
		
		<tr><td></td><td><input type="submit" name="SUBMIT" class="button2 color3"></td><td></td></tr>

</table>
</aside>
</div>
<div class="right">      
<h2> <strong>B</strong>ecome<strong > V</strong>olunteers  </h2>   
      <div class="pad_bot1">
      	<h5><p> <b>There are so many ways to get involved with CIPA – from speaking at events to climbing Kilimanjaro for cash! However you’d like to support our work, we have something for you. </b></p></h4>

                  <figure><img src="images/vol.jpg" alt="" height="500"  ></figure>
                </div>
              <h5>  Our volunteers are the backbone of CIPA as a charity - they work tirelessly all around the UK running local groups, organising local meet-ups, picking up cheques, speaking at schools, educating midwives and dental students, even sitting on research panels. Get in touch today and see where it takes you!</h5>
<h2> <strong>B</strong>ecome<strong > F</strong>undraise </h2>   
              <figure><img src="images/fu.jpg" alt="" height="500"></figure>
            <h4>  There are so many ways to support CIPA through fundraising, from cake sales to tough mudders! Whatever you’re into, we’ve got an idea or event to suit you, and our friendly team will look after you every step of the way. Join #TeamCIPA today!

</h4>
	
</div>

</div>
</div>

</article>

</div>
</div>
	</form>

</body>
</html>