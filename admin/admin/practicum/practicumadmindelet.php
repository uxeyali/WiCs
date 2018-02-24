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

<?php
$Fname = $_POST["FirstName"];// gets the Fname
$studentid = $_POST["StudentID"];

 // Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file('config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        // needed because pdo throws a error
        $password = $password . "$";
try {
$db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
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
