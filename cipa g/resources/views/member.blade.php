@extends('layout.member')

     @section('member')
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<body>
	
	<form action="/member" method="POST" >
		{{ csrf_field() }}
	 
  <div class="box1">
    <div class="line2 wrapper">
    <h2><strong>P</strong>arents/<strong >G</strong>uardians/<strong>H</strong>usband details</h2>
         
     <div class="form-horizontal">

     	<table class="table table-bordered" >
     		
     	<tr>
			<td class="control-label col-sm-2"><h4>Name</h4></td><td><input type="text" name="pname" class="form-control" required="required"></td>
			<td class="control-label col-sm-2"><h4>Age</h4></td><td><input type="number" name="page"  class="form-control" required="required" ></td>
	    </tr>
		<tr>
			<td class="control-label col-sm-2"><h4>Sex</h4></td><td>Male<input type="radio" name="psex" value="M" >&nbsp;&nbsp;&nbsp;Female<input type="radio" name="psex" value="F" ></td>
			<td class="control-label col-sm-2"><h4>Mobile No.</h4></td><td><input type="text" name="mobile" class="form-control" required="required"></td>
		</tr>
		<tr>
			<td class="control-label col-sm-2"><h4>Address</h4></td><td><input type="text" name="address" class="form-control" required="required"></td>
			<td class="control-label col-sm-2"><h4>Address 2</h4></td><td><input type="text" name="address2" class="form-control"></td>
		</tr>
		<tr>
			<td class="control-label col-sm-2"><h4>City</h4></td><td><input type="text" name="city" class="form-control" required="required"></td>
			<td class="control-label col-sm-2"><h4>District</h4></td><td><input type="text" name="district" class="form-control" required="required"></td>
	</tr>
		<tr>
			<td class="control-label col-sm-2"><h4>State</h4></td><td><input type="text" name="state" class="form-control" required="required"></td>
			<td class="control-label col-sm-2"><h4>Email</h4></td><td><input type="text" name="email" class="form-control"></td>
		</tr>

		<tr>
			<td class="control-label col-sm-2"><h4>Personal Details</h4></td><td><textarea type="text" name="detail" class="form-control"></textarea></td>
			<td class="control-label col-sm-2"><h4>Qualification</h4></td><td><textarea type="text" name="Qualification" class="form-control"></textarea></td>
		</tr>
		<tr>
			<td class="control-label col-sm-2"><h4>Sibling</h4></td><td>Yes<input type="radio" name="sibling" value="yes">&nbsp&nbsp&nbspNo<input type="radio" name="sibling" value="no"></td>
		</tr>
		
		
		<tr>
			<td class="control-label col-sm-2"><h4>Sibling Name</h4></td><td><input type="text" name="sname" class="form-control"></td>
		</tr>
		<tr>
			<td class="control-label col-sm-2"><h4>Sibling Age</h4></td><td><input type="text" name="sage" class="form-control"></td>
		</tr>
		<tr>
			<td class="control-label col-sm-2"><h4>Sibling Sex</h4></td><td>Male<input type="radio" name="ssex" value="M" >&nbsp&nbsp&nbspFemale<input type="radio" name="ssex" value="F"></td>
		</tr>
	</table>
           <div >
	<table class="table table-bordered" >
     	


	<h2 class="color2"><strong>M</strong>edical      <strong>H</strong>istory</h2>
	<tr>
		<td class="control-label col-sm-2"><h4>Family History</h4></td><td><textarea name="history" class="form-control"></textarea> </td>
	</tr>
	<tr><td class="control-label col-sm-2"><h4>Close relative of cleft</h4></td>
		<td>Yes<input type="radio" name="ryes" value="yes">&nbsp&nbsp&nbspNo<input type="radio" name="ryes"  value="no"></td>
	</tr>
	<tr>
		<td class="control-label col-sm-2"><h4>if yes Relationship</h4></td><td><input type="text" name="rel" class="form-control"></td>
	</tr>
		<tr>
			<td class="control-label col-sm-2"><h4>Name</h4></td><td><input type="text" name="name" class="form-control"></td>
		</tr>
		<tr>
			<td class="control-label col-sm-2"><h4>Age</h4></td><td><input type="text" name="age" class="form-control"></td>
		</tr>

		<tr>
			<td class="control-label col-sm-2"></td><td><input type="submit" name="SUBMIT" class="button2 color3"></td>
		</tr>

	</table>
	
	</div>
</div>

</div>
</div>
</section>
</div>
</div>
</div>
</article>


	</form>

</body>
<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
@endsection