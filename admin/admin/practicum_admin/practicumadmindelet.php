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
             <img src="../../img/practicum.png">
             <h2>COMPUTER SCIENCE PRACTICUM</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../../img/line.svg"></div>

<?php
$Fname = $_POST["FirstName"];// gets the Fname
$studentid = $_POST["StudentID"];

try {
$conn = new PDO("mysql:dbname=university", "csadmin", "cs@dmin84*$");// create connection
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// create exception
$sql = "DELETE FROM practicum WHERE Fname='$Fname'AND StudID='$studentid'";// delete given row

$conn->exec($sql);
    echo "Deleted info";//print that info was deleted
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();// print error message
    }

$conn = null;// close connection
?><br><a href="practicumadmin.php" target=""> Please go back to the Admin page.</a>

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
