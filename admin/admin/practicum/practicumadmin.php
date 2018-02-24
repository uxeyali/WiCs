<?php
 $path="../../";
  include $path.'head1.html';
 ?>

<link rel="stylesheet" href="css/app.css">

<?php
    include $path.'head2.html';
    ?>
	<main>
  

	<!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 large-centered columns">
             <img src="../../img/practicum.png">
             <h2>COMPUTER SCIENCE PRACTICUM</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../../img/line.svg"></div>

		<h2>View Practicum Applications</h2>
		
		<a href="Practicumadminview.php" class="button button-purple">View Practicum Applications</a>
		
		<br>
		<h2>Delete Practicum Applications</h2>
		<form action = "practicumadmindelet.php" method = "post" enctype = "multipart/form-data">
		  <div class="row">
            <div class="large-4 medium-4 columns">
              <label>First Name</label>
              <input type="text" name= "FirstName" placeholder="First Name" required />
            </div>
			<div class="large-4 medium-4 columns">
              <label>Last Name</label>
              <input type="text" name= "LastName" placeholder="Last Name" required />
            </div>
            <div class="large-4 medium-4 columns">
              <label>StudentID</label>
              <input type="text" name= "StudentID" placeholder="StudentID" required />
            </div>
		</form>
		
		<div class="large-4 medium-4 columns">
			<input class="button button-purple"  onclick="function()" type="submit" name="submit" value="Delete" /> 
		</div>
		
	  <?php
      include "../../footer.html";
     ?>
	 
	 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

   <!--
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/dist/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
-->
