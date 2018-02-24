<?php
 $path="../../";
  include $path.'head1.html';
 ?>

<link rel="stylesheet" href="css/app.css">


	<main>

	<!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 large-centered columns"><br><br>
             <h4>Software Testing and Development Lab Admin</h4>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../../img/line.svg"></div>
		
		<form action = "stladminview.php" method = "post" enctype = "multipart/form-data">
		  <div class="row">
              <h4>View Testing Lab Applications</h4>
            <div class="large-4 medium-4 columns">
              <label>Date of Birth</label>
              <input type="date" name= "DOB" placeholder="DOB" required />
            </div>
            <div class="large-4 medium-4 columns">
              <label>First Name</label>
              <input type="text" name= "firstName" placeholder="firstName" required />
            </div>
            <div class="large-4 medium-4 columns">
              <label>Last Name</label>
              <input type="text" name= "lastName" placeholder="lastName" required />
            </div>
            </div>
        <div class="row">
            <div class="large-4 medium-4 columns">
                <input onclick="function()" type="submit" name="submit" value="View" />
		    </div>
        </div>
            
        </form>

		<br>
        
		<form action = "stladmindelete.php" method = "post" enctype = "multipart/form-data">
		  <div class="row">
              <h4>Delete Testing Lab Applications</h4>
            <div class="large-4 medium-4 columns">
              <label>Date of Birth</label>
              <input type="date" name= "DOB" placeholder="DOB" required />
            </div>
            <div class="large-4 medium-4 columns">
              <label>First Name</label>
              <input type="text" name= "firstName" placeholder="firstName" required />
            </div>
            <div class="large-4 medium-4 columns">
              <label>Last Name</label>
              <input type="text" name= "lastName" placeholder="lastName" required />
            </div>
            </div>
        <div class="row">
            <div class="large-4 medium-4 columns">
			     <input onclick="function()" type="submit" name="submit" value="Delete" /> 
            </div>
		</div>
            
		</form>

        
</main>
		
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
