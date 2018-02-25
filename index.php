
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

            
              <a target="_blank" href="http://www.winona.edu/"><span class="bottom-head">WINONA STATE UNIVERSITY'S</span></a>

            <a href=<?php print($path) ?>><h2 class="cs-title">COMPUTER SCIENCE<br>Women in Computer Science</h2></a>
            <br>
            <a href="donate/" class="medium button button-yellow special-button">DONATE</a>
              <a href="http://www.winona.edu/admissions/apply.asp" class="medium button button-lime special-button" target="_blank"><span class="apply-button">APPLY NOW</span></a>
          </div>
        </div>
      </div>     
    </div>
</div>
<div class="skewed-bg-yellow"></div> 
<div class="skewed-bg-orange"></div> 
<div class="skewed-bg-blue"></div>
<div class="skewed-bg-green"></div>
     
     
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
     


     <!-- SECTION -->
     <div class="row">
         <div class="image small-12 medium-4 medium-push-8 large-6 large-push-6 columns">
             <img src="img/research.png">
         </div>
         <div class="textbox small-12 medium-8 medium-pull-4 large-6 large-pull-6 columns">
             <h2>Research Projects</h2>
             <p> Students get to expand their minds beyond the classroom through the Research Seminar.</p>
             <a href="<?php print($path . "current_students/Projects") ?>" class="button button-teal radius">Read More <i class="fa fa-chevron-right"></i></a>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="img/line.svg"></div>
     <!-- SECTION -->
     <div class="row">
         <div class="image small-12 medium-4 large-6 columns">
             <img src="img/testing-lab.png">
         </div>
         <div class="textbox small-12 medium-8 large-6 columns">
             <h2>Testing Lab</h2>
             <p> The WSU Software Testing and Development Lab provides testing, development, and other computer and networking related technical services to local and regional businesses. The services are provided by WSU Computer Science students under the direction of Computer Science faculty and staff.</p>
             <a href="<?php print($path . "current_students/testing_lab/") ?>" class="button button-lime radius">Read Me <i class="fa fa-chevron-right"></i></a>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="img/line.svg"></div>
     <!-- SECTION -->
     <div class="row">
         <div class="image small-12 medium-4 medium-push-8 large-6 large-push-6 columns">
             <img src="img/practicum.png">
         </div>
         <div class="textbox small-12 medium-8 medium-pull-4 large-6 large-pull-6 columns">
             <h2>Practicum</h2>
             <p> Winona State University's computer science practicum provides students with experience in a non-academic setting. It is intended to serve as an introduction to a work environment as well as to solidify many of the concepts learned in the classroom.</p>
             <a href="<?php print($path . "current_students/practicum/") ?>" class="button button-teal radius">Read Me <i class="fa fa-chevron-right"></i></a>
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
