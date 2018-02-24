
    <?php
     $path = "../";
        include $path.'head1.html';
    ?>
     
      <link rel="stylesheet" href="css/contact.css">
       
       <?php
        include $path.'head2.html';
    ?>
    <main>
    
    <?php 
        $deptHead = "Dr. Narayan Debnath";
        $officeMngr = "Mary Lange";
    ?>
        
    <!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 columns">
             <img src="">
             <h2>CONTACT US</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../img/line.svg"></div>
     
     
     <div class="row">
      <div class="large-6 medium-6 columns">
        <section class="main">
           
    
            <!-- Form start -->
            <h2 class="purple"><a href="mailto:test@winona.edu"> Write A Message</a></h2>

            <!-- Form end -->
      
        </section><br>
      </div>
      <div class="large-12 medium-12 columns">
       <br>
        <section class="main purple-div">
        <h3>CONTACT INFORMATION</h3><br>
        <p>  
        <?php include 'contact.txt' ?>
        </p> 
        <!--<p> Computer Science Department <br>
                Winona State University <br>
                PO Box 5838 <br>
                Winona MN 55987 
        </p><br><br>
        <p> Contact: <br>
                Tel: (507) 457-5385 <br> 
                <?php print($deptHead)?> - Dept. Chair <br>
                <?php print($officeMngr)?> - Office Manager 
        </p>-->
      
        </section><br>
      </div>
    </div>
    
    <!-- DIVIDER -->
     <div class="row"><img src="../img/line.svg"></div>
    <div class="row">
      <div class="large-12 columns">
        <h2 class="purple center">Directions</h2>
        <section class="main map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2867.6997768564697!2d-91.6465571!3d44.0482568!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f96d07038b0d83%3A0xa0ef0459561d57d8!2sWatkins+Hall%2C+W+9th+St%2C+Winona%2C+MN+55987!5e0!3m2!1sen!2sus!4v1480375282800" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>   
        </section><br>
      </div>
    </div>
        
    </main>
    
    <?php
            $path = "../";
            include "../footer.html";
    ?>        
    
<!--        <p>This is a beautiful footer provided by the design team to match the rest of the site!</p>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          </div>
      </div>
  </body>
</html>
