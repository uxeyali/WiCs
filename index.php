
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

<<<<<<< HEAD
            <a href=<?php print($path) ?>><h2 class="cs-title">COMPUTER SCIENCE<br>Women in Computer Science</h2></a>
=======
>>>>>>> 3a939c90c3c477dda0673c36fc54d8f6a3d95328
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
     
     
<<<<<<< HEAD
 <!-- Added Image class -->
     <div class="row firstSection">
        <div class="columns">
            
            
            <div class="image large-4 medium-4 small-12 columns">
                <img src="img/About.png" alt="">
                <h3>Mission Statement</h3>
                <p>Click here to view WiCS Mission Statement.</p>
                <a href="<?php print($path . "about/") ?>" class="medium button button-lime">Mission Statement <i class="fa fa-chevron-right"></i></a>
            </div>
            
            
            <div class="image large-4 medium-4 small-12 columns">
                <img src="img/prospective-students.png" alt="">
                <h3>Scholarships</h3>
                <p>Link to many scholarships specific to CS and women in CS.</p>
                <a href="<?php print($path . "opportunities/") ?>" class="medium button button-yellow">Scholarships <i class="fa fa-chevron-right"></i></a>
            </div>
            
            
            <div class="image large-4 medium-4 small-12 columns">
                <img src="img/faculty.png" alt="">
                <h3>Email List</h3>
                <p>Type your email to be added to our email list!</p>
                <a href=<?php print($path . "faculty/") ?> class="medium button button-orange">Email List <i class="fa fa-chevron-right"></i></a>
            </div>
            
            
            <div class="medium-4">
            </div>
        </div>
    </div> 


    <!-- DIVIDER -->
     <div class="row"><img src="img/line.svg"></div>
     


=======
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
>>>>>>> 3a939c90c3c477dda0673c36fc54d8f6a3d95328
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
