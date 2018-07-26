<?php $__env->startSection('title'); ?>
body file
<?php $__env->stopSection(); ?>




<?php $__env->startSection('body'); ?>
      <div class="wrapper">
        <div class="box1">
          <div class="line1">
            <div class="line2 wrapper">
              <section class="col1">
                <h2><strong>S</strong>uccess<span> Story</span></h2>
                <div class="pad_bot1">
                  <figure><img src="images/Ashimhome.jpg" height="210px" width="270px" alt=""></figure>
                </div>
                When I found out I was a Cleft lip and palate patient, I was quite disheartened, shattered actually. But now that I’ve come a long way, I speak of it as a badge of honour.<a href="/test" class="button1">Read More</a> </section>
              <section class="col1 pad_left1">
                <h2 class="color2"><strong>S</strong>uccess<span> Story</span></h2>
                <div class="pad_bot1">
                  <figure><img src="images/hqdefault.jpg"  height="210px" width="270px" alt=""></figure>
                </div>
                This Hope Center Template goes with two packages – with PSD source files and without them.<a href="/test" class="button1 color2">Read More</a> </section>
                <section class="col1 pad_left1">
                <h2 class="color3"><strong>S</strong>uccess<span> Story</span></h2>
                <div class="pad_bot1">
                  <figure><img src="images/jeugen.jpg" height="210px" width="270px" alt=""></figure>
                </div>
                This Hope Center Template goes with two packages – with PSD source files and without them.<a href="/test" class="button1 color2">Read More</a> </section>



              

            </div>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <h3>Our Mission</h3>
        <p class="quot" style="color: white;"> We are a group of parents of cleft children who got together and decided to help other parents of cleft children. We formed atrust called CIPA.We know the difficulties we faced as new parents of cleft children. We decided to use our experience to help other parents of cleft children especially those who have limited knowledge of the treatment options available to them in India.<img src="images/quot2.png" alt=""> </p>
      </div>
      <div class="wrapper">
        <div class="box2">
          <div class="line1">
            <div class="line2 wrapper">
              <section class="col1">
                <h4><span>Dr. Puneet</span> Says</h4>
                <video width="250"  controls>  
<source src="<?php echo e(URL::asset('CIPA.mp4')); ?>" type="video/mp4">  
<source src="<?php echo e(URL::asset('CIPA.ogg')); ?>" type="video/ogg">  

</video> </section>
              <section class="col1 pad_left1">
                <h4 class="color2"><span>Doctor's tell</span></h4>
                <figure><img src="images/free-doctor-clipart-9.png" height="100px" width="100px" style="border-radius: 50%"></figure>
                               <a href="#" class="button2 color2">Read More</a> </section>
              <section class="col1 pad_left1">
                <h4 class="color3"><span>Doctor's</span>Tell</h4>
                <figure><img src="images/free-doctor-clipart-9.png" height="100px" width="100px" style="border-radius: 50%"></figure>
                <a href="#" class="button2 color3">Read More</a> </section>
            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.body', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>