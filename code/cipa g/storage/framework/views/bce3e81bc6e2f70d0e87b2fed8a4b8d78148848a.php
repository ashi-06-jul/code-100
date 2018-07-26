<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="images/cipa.png" type="image/jpg" sizes="16x16">
<title><?php echo $__env->yieldContent('title'); ?> </title>
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
</head>
<body id="page1">
<div class="body1">
  <div class="main">
    <!-- header -->
     <?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
           <div class="slider">
        <ul class="items">
          <li> <img src="images/indexImg.jpg" alt="">
            <div class="banner">
              <div class="wrapper"><span>“Our<em>Mission</em>is to<em>Help</em></span></div>
              <div class="wrapper"><strong>Those Who<em>Need</em>It”</strong></div>
            </div>
          </li>
          <li> <img src="images/51r56a99-health.jpg" alt="">
            <div class="banner">
              <div class="wrapper"><span>“MAKE all the CHILDREN</span></div>
              <div class="wrapper"><strong>of the World HAPPY”</strong></div>
            </div>
          </li>
          <li> <img src="images/img3.jpg" alt="">
            <div class="banner">
              <div class="wrapper"><span>“TOGETHER we can CHANGE</span></div>
              <div class="wrapper"><strong>Many Young LIVES”</strong></div>
            </div>
          </li>
        </ul>
        <div class="pagination">
          <div id="banner1"><a href="#">Make<span>Donations</span></a></div>
          <div id="banner2"><a href="/story">Share<span>Your Story</span></a></div>
          <div id="banner3"><a href="/register">Become<span>A Member</span></a></div>
        </div>
      </div>
    <!-- / header -->
    <!-- content -->
    <article id="content">
         <?php echo $__env->yieldContent('body'); ?>
    </article>
    <!-- / content -->
    <!-- footer -->
 <?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
</body>
</html>