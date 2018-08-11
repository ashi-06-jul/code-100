<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="images/cipa.png" type="image/jpg" sizes="16x16">
<title>Developers</title>
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
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.box1 figure{behavior:url("js/PIE.htc");}</style>
<![endif]-->
<style>
div.gallery {
    margin: 5px;
    border: 2px solid black;
    float: left;
    width: 255px;
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
</style>

</head>
<body id="page2">
<div class="body1">
  <div class="main">
    <!-- header -->
@include('layout.header')
    <!-- / header -->
    <!-- content -->
    <article id="content">
      <div class="wrapper">
        <div class="box1">
          
            <div class="line wrapper">
              <div>
              <section class="col1">
                <h2><strong>G</strong>aurav <strong>K</strong>umar</h2>
                <div class="pad_bot1">
                    <div class="gallery">
                  <figure><img src="images/avatar2.png" alt="Trolltunga Norway" width="300" height="225"></figure>
                </div>
                </div>
               Student #MCA at #KIET<br>
               Contact:gauravpal7710@gmail.com 
             </section>
              <section class="col1 pad_left1">
                <h2 class="color2"><strong>T</strong>arang <strong>G</strong>upta</h2>
                <div class="pad_bot1">
                   <div class="gallery">
                  <figure><img src="images/avatar1.png" alt="Trolltunga Norway" width="300" height="225"></figure>
                </div>
                </div>
                Student #MCA at #KIET<br>
               Contact:guptatarang888@gmail.com   </section>
              <section class="col1 pad_left1">
                <h2 class="color3"><strong>N</strong>eeraj <strong>M</strong>aurya</h2>
                <div class="pad_bot1">
                    <div class="gallery">
                  <figure><img src="images/neeraj.JPG" alt="Trolltunga Norway" width="300" height="225"></figure>
                </div>
                </div>
              Student #MCA at #KIET<br>
               Contact:neerajitscool@gmail.com  </section>
             </div>
               <div style="padding-left: 130px;">
                <section class="col1">
                <h2><strong>A</strong>shi <strong>A</strong>nand</h2>
                <div class="pad_bot1">
                   <div class="gallery">
                  <figure><img src="images/avatar1.png" alt="Trolltunga Norway" width="300" height="225"></figure>
                </div>
                </div>
               Student #MCA at #KIET<br>
               Contact:ashianand21@gmail.com  </section>
              <section class="col1 pad_left1">
                <h2 class="color2"><strong>A</strong>rchy <strong>M</strong>athur</h2>
                <div class="pad_bot1">
                    <div class="gallery">
                  <figure><img src="images/avatar1.png" alt="Trolltunga Norway" width="300" height="225"></figure>
                </div>
                Student #MCA at #KIET<br>
               Contact:archy2212@gmail.com  </section>
             </div>
            
            </div>
          </div>
        </div>
    
      
     
    </article><br>
    <!-- / content -->
    <!-- footer -->
    
 @include('layout.footer')
   
    <!-- / footer -->
  </div>
</div>
</body>
</html>