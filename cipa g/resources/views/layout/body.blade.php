<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  @viewport{
    zoom: 1.0;
    width: extend-to-zoom;
  }
    @-ms-viewport{
      width: extend-to-zoom;
      zoom: 1.0;
    }
   </style>
  <link rel="icon" href="images/cipa.png" type="image/jpg" sizes="16x16">
<title>@yield('title') </title>
<meta charset="utf-8">
<meta name=" viewport" content="width=device-width, initial-scale=1">
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

</head>
<body id="page1">
<div class="body1">
  <div class="main">
    <!-- header -->
     @include('layout.header')
     <marquee ><font size ="10px" color="orange ">Demonstration of CIPA website on 1:06:2018 </marquee>
           <div class="slider">
        <ul class="items">
          
          <li> <img src="images/23.png" alt=""></li>
          <li> <img src="images/24.png" alt=""></li>
          <li> <img src="images/25.png" alt=""></li>
          <li> <img src="images/26.png" alt=""></li>
          <li> <img src="images/27.png" alt=""></li>
          <li> <img src="images/28.png" alt=""></li>
          <li> <img src="images/29.png" alt=""></li>
          <li> <img src="images/30.png" alt=""></li>
          <li> <img src="images/31.png" alt=""></li>
          <li> <img src="images/32.png" alt=""></li>
          <li> <img src="images/33.png" alt=""></li>
          <li> <img src="images/34.png" alt=""></li>
          <li> <img src="images/35.png" alt=""></li>
          <li> <img src="images/36.png" alt=""></li>
          
        </ul>
        <div class="pagination">
          
          <div id="banner2"><a href="/story">Share<span>Your Story</span></a></div>
          <div id="banner3"><a href="/register">Become<span>A Member</span></a></div>
          <div id="banner1"><a href="#">Make<span>Donations</span></a></div>
        </div>
      </div>
    <!-- / header -->
    <!-- content -->
    <article id="content">
         @yield('body')
    </article><br>
    <!-- / content -->
    <!-- footer -->
 @include('layout.footer')
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
    $('.pagination div').hover(function () {
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
    <!-- / footer -->
  </div>
</div>


</body>
</html>