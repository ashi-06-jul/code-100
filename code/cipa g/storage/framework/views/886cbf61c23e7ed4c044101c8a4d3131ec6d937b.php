<!DOCTYPE html>
<html lang="en">
<head>
<title>Events</title>
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
<script type="text/javascript" src="js/tabs.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.box1 figure{behavior:url("js/PIE.htc");}</style>
<![endif]-->
</head>
<body id="page3">
<div class="body1">
  <div class="main">
    <!-- header -->
   <?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- / header -->
    <!-- content -->
    <article id="content" class="tabs">
       <div class="wrapper">
        <div class="box1">
          <div class="wrapper">
            <section class="col1">
              <h2><strong>E</strong>vents</h2>
             
                <figure class="left marg_right1"><img src="images/new_statesman_events.jpg" >
                </figure><br><br>
                <p><h2><strong>F</strong>orthcoming Event: Mount Abu Programme</h2></p>
            </section>
          </div>
        </div>
      </div>
  </article><br>
       
    
    <!-- / content -->
    <!-- footer -->
   
   <?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now(); tabs.init();</script>
</body>
</html>