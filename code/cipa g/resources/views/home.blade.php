<head><style>
div.gallery {
    margin: 15px;
    border: 2px solid black;
    float: ;
    width: 370px;
    padding: 10px;
    border-radius: 15px;
}
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style></head>
<article >
    @extends('layouts.app')
      @section('content')
<div >
    <div>
        <div class="panel panel-default">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
    <body>
    <form action="/become_a_member" method="POST">
        {{ csrf_field() }}
    <div class="box1">
    <div class="line2 wrapper"> 
        <div class="pad_bot1">
        <div class="panel-heading" style="background-color: #dad6cc;"><h2><strong>B</strong>ecome<strong >V</strong>olunteers/<strong>F</strong>undraised</h2></div>
          
          
        <p> <b>There are so many ways to get involved with CIPA – from speaking at events to Fundraise for cash! However you’d like to support our work, we have something for you. </b></p>
        <p>  Our volunteers are the backbone of CIPA as a charity - they work tirelessly all around the UK running local groups, organising local meet-ups, picking up cheques, speaking at schools, educating midwives and dental students, even sitting on research panels. Get in touch today and see where it takes you!</p>
        <p>  There are so many ways to support CIPA through fundraising, from cake sales to tough mudders! Whatever you’re into, we’ve got an idea or event to suit you, and our friendly team will look after you every step of the way. Join #TeamCIPA today!</p>
        </div>
          <div class="form-horizontal">   
            <div class="main">
<div class="content">
<div class="col-sm-3 col-md-6 col-lg-4" >
    <article class="col1">

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
</article>
</div>
</div>
<div class="col-sm-9 col-md-6 col-lg-8">
<div class="gallery">
  <a target="_blank">   
<figure><img src="images/vol.jpg" alt="" height="300" weight="" ></figure>
</a>
</div>
<div class="gallery">
  <a target="_blank">  
 <figure><img src="images/fu.jpg" alt="" height="300"></figure>
</a>
    </div>
</div>

</div>
</div>

</aside>

</div>
</div>
    </form>

</body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
