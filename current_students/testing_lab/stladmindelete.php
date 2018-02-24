<?php
 $path="../../";
  include $path.'head1.html';
 ?>

<link rel="stylesheet" href="css/app.css">


	<main>
  

	<!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 large-centered columns">
             <h2>SOFTWARE TESTING AND DEVELOPMENT LAB</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../../img/line.svg"></div>

<?php
$Fname = $_POST["firstName"];// gets the Fname
$Lname = $_POST["lastName"];// gets the Lname
$DOB = $_POST["DOB"];

try {
$conn = new PDO("mysql:dbname=cs444", "root", "4f9dbe42");// create connection
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// create exception
$sql = "DELETE FROM testinglab WHERE Fname='$Fname' AND lname='$Lname' AND DOB='$DOB'";// delete given row

$conn->exec($sql);
    echo "Deleted info";//print that info was deleted
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();// print error message
    }

$conn = null;// close connection
?>
        
        
<br><a href="stladmin.php" target=""> Please go back to the Admin page.</a>

<br><a href="index.php" target=""> Please go back to the information page.</a>



	 
	 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

   <!--
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/dist/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
-->
