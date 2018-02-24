
    <?php
     $path = "../";
        include $path.'head1.html';
    ?>
     
      <link rel="stylesheet" href="css/about.css">
       
       <?php
        include $path.'head2.html';
    ?>
    <main>
    
    <!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 large-centered columns">
             <img src="../img/history.png">
             <h2>HISTORY OF THE WSU COMPUTER SCIENCE DEPARTMENT</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../img/line.svg"></div>
    <div class="row">
      <div class="large-12 columns">
        <div>
            <section>
                <section class="main-about-content"><p>The Winona State Computer Science Department was formed in 1987. The department has transformed over the years by using different primary teaching languages including Pascal, Module, C++, and currently Java. We have many Emeriti faculty as well as alumni from the department and they are listed below. </p></section>
                
                <div class="row"><img src="../img/line.svg"></div>
                
                <h2 class="teal">Emerti Faculty</h2>
                    <ul>
                     <?php 
                        $myfile = file("emerti.txt");
                        $i = 1;
                        foreach ($myfile as $line) {
                            if($i == 1){
                               $name = $line; 
                            }
                            if($i == 2){
                               $email = $line;
                            }
                            if($i == 3){
                                echo '<li>' . $name . ' || <a href= "mailto:' . $email . '">'. $email . '</a></li>';
                                $i = 0;
                            }
                            $i++;
                        }
                        ?>
                    </ul>
                <div class="row"><img src="../img/line.svg"></div>
                <a href="#"><h2 class="yellow">Prominant Alumni</h2></a>
                    <ul>
                    <?php 
                        $myfile = file("alum.txt");
                        foreach ($myfile as $line) {
                            echo '<li>' . $line . '</li>';
                        }
                    ?>
                    </ul>
                    <br>
        
                <div class="row major"><img src="../img/line.svg"></div>
            </section>
          </div>
        </div>
    </div>
    <img src="history.png">
        <br>
    <!-- DIVIDER -->
    
    
    </main>
    
    <?php
            $path = "../";
            include "../footer.html";
    ?>        
    
<!--        <p>This is a beautiful footer provided by the design team to match the rest of the site!</p>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/vendor/jquery.js"></script>
    <script src="js/FAQ.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/totop.js"></script>
          </div>
      </div>
  </body>
</html>
