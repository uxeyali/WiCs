	<?php
		$path = '../../';
		include '../../admin_head1.html';
	?>
	<script src='../../../jquery.js' type='text/javascript'></script>
	
	<?php 
		include '../../admin_head2.html';
	?>
<link rel="stylesheet" href="css/app.css">


	<main>        

	<!-- BANNER SECTION -->
     <div class="banner row">
        <div class="image large-12 large-centered columns">
            <a href="../../index.php"><img src="<?=$path?>../img/testing-lab.png"></a>
            <h2>TESTING LAB ADMIN</h2>
        </div>
    </div>
     <!-- DIVIDER -->
     <div class="row"><img src="<?=$path?>../img/line.svg"></div>
        
        <form action = "delete.php" method = "post" enctype = "multipart/form-data">
		  <div class="row">
            <div class="large-4 medium-4 columns">
              <label>Student ID:</label>
              <input type="text" name= "ID" placeholder="Student ID" size="8" required />
            </div>
        </div>
        <div class="row">
            <div class="large-4 medium-4 columns">
			     <input onclick="function()" type="submit" name="submit" value="Delete" class="button radius button-purple" /> 
            </div>
		</div>
            
		</form>

		
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
