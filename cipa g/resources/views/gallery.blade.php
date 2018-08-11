<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="images/cipa.png" type="image/jpg" sizes="16x16">
<title>Photo Gallery </title>
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
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/backgroundPosition.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.box1 figure{behavior:url("js/PIE.htc");}</style>
<![endif]-->
<style>
div.gallery {
    margin: 15px;
    border: 2px solid black;
    float: left;
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

    * {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
}
</style>
</head>
<body id="page1">
<div class="body1">
  <div class="main">
    <!-- header -->
     @include('layout.header')
        <article id="content" class="tabs">
        <div class="wrapper">
        <div class="box1">
          <div class="wrapper">
            <section class="col">
              <h2 class="color3"><strong>P</strong>HOTO GALLERY:<span> </span></h2>
             
                
              

    
               
             
            
                
              


             <div class="gallery">
  <a target="_blank" href="images/k17.jpg">
    <img src="images/k17.jpg" alt="Forest" width="300" height="225">
  </a>
  
</div>
<div class="gallery">
  <a target="_blank" href="images/k18.jpg">
    <img src="images/k18.jpg" alt="Forest" width="300" height="225">
  </a>
  
</div>
              </p>
              <p>
                <h2></h2>
             <div class="gallery">
  <a target="_blank" href="images/k19.jpg">
    <img src="images/k19.jpg" alt="Forest" width="300" height="225">
  </a>
  
</div>
             <div class="gallery">
  <a target="_blank" href="images/k20.jpg">
    <img src="images/k20.jpg" alt="Forest" width="300" height="225">
  </a>
  
</div>
 <div class="gallery">
  <a target="_blank" href="images/k21.jpg">
    <img src="images/k21.jpg" alt="Forest" width="300" height="225">
  </a>
  
</div>
 <div class="gallery">
  <a target="_blank" href="images/k22.jpg">
    <img src="images/k22.jpg" alt="Forest" width="300" height="225">
  </a>
  
</div>
 <div class="gallery">
  <a target="_blank" href="images/k23.jpg">
    <img src="images/k23.jpg" alt="Forest" width="300" height="225">
  </a>
  
</div>
 <div class="gallery">
  <a target="_blank" href="images/k24.jpg">
    <img src="images/k24.jpg" alt="Forest" width="300" height="225">
  </a>
  
</div>
 <div class="gallery">
  <a target="_blank" href="images/k25.jpg">
    <img src="images/k25.jpg" alt="Forest" width="300" height="225">
  </a>
  
</div>
 <div class="gallery">
  <a target="_blank" href="images/k26.jpg">
    <img src="images/k26.jpg" alt="Forest" width="300" height="225">
  </a>
  
</div>
 <div class="gallery">
  <a target="_blank" href="images/k27.jpg">
    <img src="images/k27.jpg" alt="Forest" width="300" height="225">
  </a>
  
</div>  <div class="gallery">
  <a target="_blank" href="images/k29.jpg">
    <img src="images/k29.jpg" alt="Forest" width="300" height="225">
  </a>
  
</div> 

            </section>
          </div>
        </div>
      </div>
  </article><br>
    <!-- / header -->
    <!-- content -->
    
    <!-- / content -->
    <!-- footer -->
   @include('layout.footer')

    <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        preset: 'zabor',
        easing: 'easeOutQuad',
        duration: 800,
        pagination: true,
        banners: true,
        waitBannerAnimation: false,
        slideshow: 6000,
        bannerShow: function (banner) {
            banner.css({
                right: '-700px'
            }).stop().animate({
                right: '0'
            }, 600, 'easeOutExpo')
        },
        bannerHide: function (banner) {
            banner.stop().animate({
                right: '-700'
            }, 600, 'easeOutExpo')
        }
    })
    $('.pagination li').hover(function () {
        if (!$(this).hasClass('current')) {
            $(this).find('a').stop().animate({
                backgroundPosition: '0 0'
            }, 600, 'easeOutExpo', function () {
                $(this).parent().css({
                    backgroundPosition: '-20px 0'
                })
            });
        }
    }, function () {
        if (!$(this).hasClass('current')) {
            $(this).css({
                backgroundPosition: '0 0'
            }).find('a').stop().animate({
                backgroundPosition: '-250px 0'
            }, 600, 'easeOutExpo');
        }
    })
})
</script>
</body>
</html>