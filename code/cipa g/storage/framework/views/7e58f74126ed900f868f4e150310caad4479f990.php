<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon" href="images/cipa.png" type="image/jpg" sizes="16x16">
<title>CIPA | Contact</title>
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
</head>
<body id="page5">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
    <?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>    <!-- / header -->
    <!-- content -->
    <article id="content">
      <?php echo $__env->yieldContent('contact'); ?>
    </article><br>
    <!-- / content -->
    <!-- footer -->
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>