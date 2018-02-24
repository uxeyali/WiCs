<?php
 $path="../../";
  include $path.'head1.html';
 ?>

<link rel="stylesheet" href="css/app.css">

<?php
    include $path.'head2.html';
    ?>
	<main>
  
  <body>
     <div class="row">
       <div class="large-12 columns">
               <h2>Practicum Proposal Form</h2>
       </div>
   </div>
<div class="row">
    <div class="large-12 columns">
      
        <form class="purple" action = "proposal_confirmation.php" method = "post" enctype = "multipart/form-data">
           <div class="large-12 columns">
            <div class="large-4 columns">
            First Name<br>
            <input type="text" name= "FirstName"><br>
            </div>
            <div class="large-4 columns">
            Last Name<br>
            <input type="text" name= "LastName"><br>
            </div>
            <div class="large-4 columns">
            Student ID<br>
            <input type="text" name= "StudentID"><br>
            </div>
            <div class="large-3 columns">
            Registering Term<br>
            <input type="text" name= "RegTerm"><br>
            </div>
            <div class="large-3 columns">
            Beginning Work Date<br>
            <input type="text" name= "StartDate"><br>
                </div>
            <div class="large-3 columns">
            Ending Work Date<br>
            <input type="text" name= "EndDate"><br>
                </div>
            <div class="large-3 columns">
            Estimated Time To Complete In Hours<br>
            <input type="text" name= "Hours"><br>
                </div>
    </div>
            <div class="large-12 columns">
            STUDENT<br>
            <div class="large-4 columns">
            Business Address<br>
            <input type="text" name= "BuisnessAddress"><br>
                </div>
                <div class="large-2 columns">
            City<br>
            <input type="text" name= "City"><br>
                </div>
                <div class="large-2 columns">
            State<br>
            <input type="text" name= "State"><br>
                </div>
                <div class="large-2 columns">
            Zip<br>
            <input type="text" name= "Zip"><br>
                </div>
            <div class="large-2 columns">
            Telephone Number<br>
            <input type="text" name= "PhoneNum"><br>
                </div>
            </div>
            <div class="large-12 columns">
            SUPERVISOR<br>
            <div class="large-4 columns">
            Company Name<br>
            <input type="text" name= "CompanyName"><br>
                </div>
                <div class="large-4 columns">
            First Name<br>
            <input type="text" name= "SupervisorFName"><br>
                </div>
                <div class="large-4 columns">
            Last Name<br>
            <input type="text" name= "SupervisorLName"><br>
                </div>
                <div class="large-4 columns">
            Business Address<br>
            <input type="text" name= "SuperBuisnessAddress"><br>
                </div>
                <div class="large-2 columns">
            City<br>
            <input type="text" name= "SuperCity"><br>
                </div>
                <div class="large-2 columns">
            State<br>
            <input type="text" name= "SuperState"><br>
                </div>
                <div class="large-2 columns">
            Zip<br>
            <input type="text" name= "SuperZip"><br>
                </div>
                <div class="large-2 columns">
            Telephone Number<br>
            <input type="text" name= "SuperPhoneNum"><br>
                </div>
                <div class="large-12 columns">
            Please give an outline of the tasks in which you will be involved.  For each of the tasks, indicate whether it is an individual or group effort and what your contribution will be. <br>
            <textarea rows="10" cols="50"></textarea><br>
            <input class="button button-purple" type="submit" class="button radius" value="Submit &raquo">
            </div>
            </div>
        </form>
        </div>
    </div>
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/dist/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
