@extends('layout.story')

     @section('story')
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<body>
	
	<form action="/story" method="POST" >
		{{ csrf_field() }}
	 
  <div class="box1">
    <div class="line2 wrapper">
    <h2 class="color3"><strong>S</strong>hare<strong > Y</strong>our<strong> S</strong>tory</h2>
        <p class="pad_bot1"> Reading stories from other people is one of the best ways to know that whatever you’re going through, you’re not alone.</p>

		<p class="pad_bot1">CIPA has collected  dozens of stories from parents of children with a cleft which cover everything from diagnosis to coping with surgery and watching their children grow up.You may also submit up your story and  four photos to illustrate your story. </h4>
     <div class="form-horizontal">

     	<table class="table table-bordered">
     		
     	<tr>
			<td class="control-label col-sm-2"><h4>Name</h4></td><td><input type="text" name="name" class="form-control" required="required"></td>
		<td class="control-label col-sm-2"><h4>Mobile No.</h4></td><td><input type="text" name="mobile" class="form-control"></td>
		</tr>
		<tr>
			<td class="control-label col-sm-2"><h4>Email:</h4></td><td><input type="text" name="email" class="form-control" ></td>
			<td class="control-label col-sm-2"><h4>I am..</h4></td><td><select class="form-control" required="required" name="tag">
				<option>Select one</option>
				<option>A parent of child with cleft</option>
				<option>Relative or family member of cleft</option>
				<option>An adult with a cleft</option>
				<option>A young person with cleft</option>
				<option>other</option>
			</select></td>
		</tr>
		<tr>
		
	</tr>
		<tr>
			<td class="control-label col-sm-2"><h4>Photo 1#</h4></td><td><input type="file" name="photo1" class="form-control"></td>
			<td class="control-label col-sm-2"><h4>Photo 2#</h4></td><td><input type="file" name="photo2" class="form-control"></td>
		</tr>
		<tr>
			<td class="control-label col-sm-2"><h4>Photo 3#</h4></td><td><input type="file" name="photo3" class="form-control"></td>
			<td class="control-label col-sm-2"><h4>Photo 4#</h4></td><td><input type="file" name="photo4" class="form-control"></td>
		</tr>

		<tr>
			<td class="control-label col-sm-2"><h4>Write your story</h4></td><td><textarea type="text" name="detail" class="form-control" required="required"  placeholder="Write or paste your story here"></textarea></td>
			
		</tr>
		
	</table>
	<p class="pad_bot1"><input type="checkbox" name="checkbox" value="yes">By clicking yes, you confirm that we have permission to share your photos or words submitted here for CIPA to use for the above purposes.</p>
	<p class="pad_bot1">You may contact us at any time to request we change or remove what we have published and we will make every effort to do so.</p>
	</div>
	
		
			<input type="submit" name="SUBMIT" value="Share your story" class="button2 color3">
		
	
</section>



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