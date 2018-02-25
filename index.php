
    <?php
     $path = "";
        include'head1.html';
        include'head2.html';
    ?>


<!-- HERO SECTION -->
<div class="skewed-bg">
    <div class="content">
      <div class="header-hero text-center">
        <div class="row hero">
          <div class="large-5 large-offset-7 medium-4">
           
          </div>
          <div class="large-7 large-offset-5 medium-8 columns">

            
              <img src="<?php print $path; ?>img/WiCSLogo2.png" width="100%"> 

            <br>
          </div>
        </div>
      </div>     
    </div>
</div>
<div class="skewed-bg-yellow"></div> 
<div class="skewed-bg-orange"></div> 
<div class="skewed-bg-blue"></div>
<div class="skewed-bg-green"></div>
     
     


    <br>
     
<div class="row">
      <div class="large-12 columns">
            <section class="main">

                <div class="banner image large-12 large-centered columns">
                <img src="<?php print $path; ?>img/Developers.png"> 

                    </div>
          </section>
     </div>
</div>
     <!-- SECTION -->
     <div class="row">
         <div class="image small-12 medium-4 medium-push-8 large-6 large-push-6 columns">
             <img src="img/3women-24.png">
         </div>
         <div class="textbox small-12 medium-8 medium-pull-4 large-6 large-pull-6 columns">
             <h2>Events</h2>
             <p> We do things. Here are some of our popular events.</p>
             <a href="<?php print($path . "news/index.php") ?>" class="button button-teal radius"> More <i class="fa fa-chevron-right"></i></a>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="img/line.svg"></div>
     <!-- SECTION -->
     <div class="row">
         <div class="image small-12 medium-4 large-6 columns">
             <img src="img/FAQ_testing-lab.png">
         </div>
         <div class="textbox small-12 medium-8 large-6 columns">
             <h2>FAQs</h2>
             <p> Here you will find both serious and sarcastic questions that you may have about WiCS.</p>
             <a href="<?php print($path . "FAQ/index.php") ?>" class="button button-lime radius"> More <i class="fa fa-chevron-right"></i></a>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="img/line.svg"></div>
     <!-- SECTION -->
     <div class="row">
         <div class="image small-12 medium-4 medium-push-8 large-6 large-push-6 columns">
             <img src="img/Scholarships.png">
         </div>
         <div class="textbox small-12 medium-8 medium-pull-4 large-6 large-pull-6 columns">
             <h2>Scholarships</h2>
             <p> There are several scholarships available for women majoring in computer science and related fields.</p>
             <a href="<?php print($path . "Scholarships/index.php") ?>" class="button button-teal radius"> More <i class="fa fa-chevron-right"></i></a>
         </div>
     </div>

 <!-- DIVIDER -->
     <div class="row"><img src="img/line.svg"></div>

 <div class="row">
      <div class="large-12 columns">
            <section class="main">

                <h3 class="purple">Hi</h3>
                <h3 class="teal">- Jimmy</h3>

                <div class="banner image large-12 large-centered columns">
                <img src="<?php print $path; ?>img/WiCS_Logo2.png" width="15%"> 
                                    <img src="<?php print $path; ?>img/WiCS_Logo2.png" width="30%"> 
                                    <img src="<?php print $path; ?>img/WiCS_Logo2.png" width="30%"> 
                                    <img src="<?php print $path; ?>img/WiCS_Logo2.png" width="15%"> 


                    </div>
          </section>
     </div>
</div>

 
     


    <!-- close wrapper, no more content after this -->

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/foundation.min.js"></script>
<script src="js/totop.js"></script>
<script src="js/newslinks.js"></script>
<!--Footer is being pulled from 'footer.html'-->

      <?php
        include'footer.html';
      ?>
    

  </body>
</html>
