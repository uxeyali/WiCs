
 <?php
     $path = "../";
        include $path.'head1.html';
    ?>
     
      <link rel="stylesheet" href="css/FAQ.css">
       
       <?php
        include $path.'head2.html';
    ?>
    <main>
        
        <!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 large-centered columns">
             <img src="../img/prospective-students.png">
             <h2>OPPORTUNITIES BEYOND THE CLASSROOM</h2>
         </div>
     </div>
   
    <div class="row">
      <div class="large-12 columns">
            <section class="main">
                <div class="row"><img src="../img/line.svg"></div>
            <h2 class="orange">Scholarships</h2>
                <p>Many CS Scholarships are awarded to students for being an oustanding student in one way or another. 
                    
                There are many scholarships available to CS students, including, but not limited to...</p>
                <br>
                <ul>
                    <li>Befidi Family Scholarship</li>  
                    <li>Cichanowski Family Scholarship in Computer Science</li>
                    <li>Cichanowski-Logelin Scholarship</li>
                    <li>Federated Insurance Computer Science Scholarship</li>
                    <li>And many more...</li>
                </ul>
                
                <p>To apply for a scholarship, you must be a student with a starid and password to access the Winona State University student resources.
                </p>
                <br>
                <a href="https://winona.academicworks.com/opportunities?utf8=%E2%9C%93&term=computer+science&commit=Search" target="_blank" class="medium button button-orange">More Scholarships <i class="fa fa-chevron-right"></i></a>
                
            </section>
        </div>
    </div>
    
    <div class="row">
      <div class="large-12 columns">
            <section class="main">
                <div class="row"><img src="../img/line.svg"></div>
            <h2 class="yellow">Research</h2>
                <p>
                    Senior student research projects encompass a wide variety of computer science topics. In the Research Seminar class, you can explore any area of computer science you want, and learn how to properly conduct a research project while doing it!
                </p>
                <br>
                <a href="<?php print($path . "current_students/Projects/") ?>" class="medium button button-yellow">View Research Projects <i class="fa fa-chevron-right"></i></a>
            </section>
        </div>
    </div>
    
    <div class="row">
      <div class="large-12 columns">
            <section class="main">
                <div class="row"><img src="../img/line.svg"></div>
            <h2 class="lime">Practicum</h2>
                <p>
                    Practicum provides experience in a non-academic setting. Through participating in the practicum, students learn in a professional environment and are given an opportunity to apply concepts learned in the classroom in the real world. Practicum can only be taken by students nearing the end of their undergraduate degree.
                </p>
                <br>
                <a href="<?php print($path . "current_students/practicum/") ?>" class="medium button button-lime">Read More <i class="fa fa-chevron-right"></i></a>
            </section>
        </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
            <section class="main">
                <div class="row"><img src="../img/line.svg"></div>
            <h2 class="teal">Testing and Development Lab</h2>
            <p>
           Any student can work at the Software Testing and Development Lab,
            however Computer Science students are given preference.  During
            academic terms, students work 10 to 15 hours per week.
            During breaks or the summer they work 20 to 40 hours per week.
            <br><br>    
           The WSU Software Testing and Development Lab provides testing,
            development, and other computer and networking related technical 
            services to local and regional businesses. The services
            are provided by students under the direction of 
            Computer Science faculty and staff.
            <br><br>    
            The appointment of students to the lab typically
            occurs between the start of a term and midterm. 
            Students may apply for positions in the Testing Lab 
            at any time. Applications are kept for the next appointment 
            cycle. Students should reapply each term, if not immediately
            selected. Appointment <a href="" target="_blank">application forms</a>
            are available in the department office.
            </p>
                <br>
                <a href=<?php print($path . "current_students/testing_lab/") ?> class="medium button button-teal">Read More <i class="fa fa-chevron-right"></i></a>
    
            </section>
        </div>
    </div>
        
    <div class="row">
      <div class="large-12 columns">
            <section class="main">
                <div class="row"><img src="../img/line.svg"></div>
            <h2 class="orange">Tutoring</h2>
                <p>
                    Tutors are available for many different classes to help students get a grasp of what concepts are being taught in class.
                </p>
                <br>
                <a href="<?php print($path . "current_students/tutoring/") ?> "class="medium button button-orange">Find A Tutor <i class="fa fa-chevron-right"></i></a>
            </section>
        </div>
    </div>
        
    <div class="row">
      <div class="large-12 columns">
            <section class="main">
                <div class="row"><img src="../img/line.svg"></div>
            <h2 class="yellow">CS Club</h2>
                <p>
                Are you such a fan of Computer Science that you need
                    to get even more time working with computers even outside of class? Well, you're not alone! There's a whole club for that! 
                </p>
                <br>
                <a href="http://wsucs.club/" target="_blank" class="medium button button-yellow">Visit CS Club Website <i class="fa fa-chevron-right"></i></a>
                
            </section>
        </div>
    </div>
        <div class="row"><img src="../img/line.svg"></div>
        
    </main>
     <p>
        <a href="#" class="back-to-top" class=""></a>
      </p>
    <?php
            $path = "../";
            include "../footer.html";
    ?>
   <script src="../../js/vendor/jquery.js"></script>
    <script src="../../js/vendor/foundation.min.js"></script>
    <script src="../js/totop.js"></script>
          </div>
      </div>
  </body>
</html>
