@extends('layout.faq')

     @section('faq')
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<body>
	<form action="faq" method="POST">
		{{ csrf_field() }}
	<div class="box1">
    <div class="line2 wrapper">
    <h2><strong>P</strong>reviously <strong >A</strong>sked <strong>Q</strong>uestion</h2></div>
    <div class="form-horizontal">
<table class="table table-bordered">
    
	@foreach($con as $value)
	<td>
	<tr>{{$value->question}}</tr>
	<tr>{{$value->answer}}</tr>
</td>
	@endforeach
</table>
<br><br>

<div>
	<h2 class="color2"><strong>P</strong>ost <strong>Y</strong>our <strong>Q</strong>uestion <strong>H</strong>ere</h2>
</div>
	
		<table class="table table-bordered">
		<tr>
		<td class="control-label col-sm-2"><h4>Question:</h4></td>
		<td><textarea  class="form-control" id="qu" name="question"  required="required"></textarea></td>
		</tr>
<tr>
			<td class="control-label col-sm-2"></td><td><input type="submit" name="SUBMIT" value="POST Question" class="button2 color3"></td>
		</tr>

</table>

</div>
</form>
</div>
</body>
@endsection