<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/cipa.png" type="image/jpg" sizes="16x16">
<title>CIPA | Media</title>
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
              <section class="col1">
                <h2><strong>S</strong>eminar</h2>
                <div class="pad_bot1">
                  <div class="gallery">
                  <figure><img src="images/seminarimage.jpg" alt="Trolltunga Norway" width="300" height="225"></figure>
                </div>
                </div>
                The conference in Mahabalipuram was so enthralling that putting the rich experiences gained, <a href="/seminar" class="button1">Read More</a> </section>
              <section class="col1 pad_left1">
                <h2 class="color2"><strong>A</strong>ccolades</h2>
                <div class="pad_bot1">
                    <div class="gallery">
                  <figure><img src="images/acc.jpg" alt="Trolltunga Norway" width="300" height="225"></figure>
                </div>
                </div>
                Cleft India Parent Association (CIPA) was conferred with CPF Leadership Award for the year 2016 <a href="/accolades" class="button1 color2">Read More</a> </section>
              <section class="col1 pad_left1">
                <h2 class="color3"><strong>V</strong>ideos</h2>
                <div class="pad_bot1">
                    <div class="gallery">
                  <figure><img src="images/video.jpg" alt="Trolltunga Norway" width="300" height="225"></figure>
                </div>
                </div>
                Video is an electronic medium for the recording, copying, playback, broadcasting, and display of 
                <a href="/videos" class="button1 color3">Read More</a> </section><br>
                <section class="col1">
                <h2><strong>C</strong>ampaigns</h2>
                <div class="pad_bot1">
                  <div class="gallery">
                  <figure><img src="images/Campaigns_banner_0.jpg" alt="Trolltunga Norway" width="300" height="225"></figure>
                </div>
                CIPA’s 1st camp was conducted at a low lying locality
                 <a href="/campaigns" class="button1">Read More</a> </section>
              <section class="col1 pad_left1">
                <h2 class="color2"><strong>E</strong>vents</h2>
                <div class="pad_bot1">
                  <div class="gallery">
                  <figure><img src="images/Business-Events-620x330.jpg" alt="Trolltunga Norway" width="300" height="225"></figure>
                </div>
                Forthcoming Event: Mount Abu Programme<a href="/recentevents" class="button1 color2">Read More</a> </section>
              <section class="col1 pad_left1">
                <h2 class="color3"><strong>P</strong>hoto Gallery</h2>
                <div class="pad_bot1">
                 <div class="gallery">
                  <figure><img src="images/photogallery.png" alt="Trolltunga Norway" width="300" height="225"></figure>
                </div>
                Combined photo gallary of the events of CIPA.  <a href="/gallery" class="button1 color3">Read More</a> </section>
            </div>
          </div>
        </div>
      
      
    
    </article><br>
    <!-- / content -->
 
     @include('layout.footer')
   
    <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>