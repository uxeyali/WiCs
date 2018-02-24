	<?php
		$path = '../../';
		include '../../admin_head1.html';
	?>
	<script src='../../../jquery.js' type='text/javascript'></script>
	
	<?php 
		include '../../admin_head2.html';
	?>
<link rel="stylesheet" href="css/app.css">



	<!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 large-centered columns">
             <img src="../../../img/practicum.png">
             <h2>COMPUTER SCIENCE PRACTICUM</h2>
         </div>
     </div>
     <!-- DIVIDER -->
    <div class="row"><img src="<?=$path?>../img/line.svg"></div>
		<main>

              <div class="row small-6 medium-5 large-4">
			     <a href="Practicumadminview.php" class="button large expanded">VIEW APPLICATIONS</a>
            </div>
            
            
		<form action = "practicumadmindelet.php" method = "post" enctype = "multipart/form-data">
		  <div class="row">
              <h4>Delete Practicum Applications</h4>
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
              
            </div>
            <div class="row small-6 medium-5 large-4">
			     <input onclick="function()" type="submit" name="submit" value="Delete" class ="button large expanded"/>
		      </div>
		</form>
            
        </main>
        
    
		
		
		
		
	  <?php
      include'../../admin_footer.html';
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
