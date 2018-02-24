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
	$fname = $_POST["FirstName"];
	$lname = $_POST["LastName"];
	$studentid = $_POST["StudentID"];
	$major = $_POST["Major"];
	$address = $_POST["Address"];
	$telnum = $_POST["TelehoneNum"];
	$email = $_POST["Email"];
	$scity = $_POST["SCity"];
	$sstate = $_POST["SState"];
	$szip = $_POST["SZip"];
	$asemester = $_POST["Asemester"];
	$ayear = $_POST["Ayear"];
	$tfoG = $_POST["341G"];
	$tfoT = $_POST["341T"];
	$tsfG = $_POST["375G"];
	$tsfT = $_POST["375T"];
	$tefG = $_POST["385G"];
	$tefT = $_POST["385T"];
	$fozG = $_POST["410G"];
	$fozT = $_POST["410T"];
	$fsoG = $_POST["471G"];
	$fsoT = $_POST["471T"];
	$fzzaG = $_POST["400aG"];
	$fzzaT = $_POST["400aT"];
	$fzzaC= $_POST["400aC"];
	$fzzbG = $_POST["400bG"];
	$fzzbT = $_POST["400bT"];
	$fzzbC= $_POST["400bC"];
	$recived = $_POST["recived"];
	$action = $_POST["action"];

	// Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file('../../admin/config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        // needed because pdo throws a error
        $password = $password . "$";
try {//CONNECTION TO THE PRACTICUM DB
        $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO practicum (Fname,lname, StudID, Major, Address, Telephone, email, City, state, Zip, Semester, year, 341g, 341t, 375g, 375t, 385g, 385t, 410g, 410t, 471g, 471t, 400ag, 400at, 400ac, 400bg, 400bt, 400bc, recived, action)
    VALUES ('$fname', '$lname', '$studentid', '$major', '$address', '$telnum', '$email', '$scity', '$sstate', '$szip', '$asemester', '$ayear', '$tfoG', '$tfoT', '$tsfG', '$tsfT', '$tefG', '$tefT', '$fozG', '$fozT', '$fsoG', '$fsoT', '$fzzaG', '$fzzaT', '$fzzaC', '$fzzbG', '$fzzbT', '$fzzbC', '$recived', '$action')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "You have successfully applied to the Practicum.";
    }
catch(PDOException $e)
    {
    echo "An error has ocured please go back and try again.";
    }

$conn = null;

?>


<br><a href="index.php" target=""> Please go back to the information page.</a>


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
