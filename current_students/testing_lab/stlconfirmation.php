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
             <img src="../../img/testing-lab.png">
             <h2>SOFTWARE TESTING AND DEVELOPMENT LAB</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../../img/line.svg"></div>

<?php
	$fname = $_POST["firstName"];
	$lname = $_POST["lastName"];
	$todayDate = $_POST["todayDate"];
	$address = $_POST["address"];
	$phoneNumber = $_POST["phoneNumber"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zipCode = $_POST["zipCode"];
	$DOB = $_POST["DOB"];
	$citizenship = $_POST["citizenship"];
	$email = $_POST["email"];
	$majors = $_POST["majors"];
	$minors = $_POST["minors"];
	$graduationDate = $_POST["graduationDate"];
    $ID = $_POST["ID"];
	
	if (isset($_POST["workSummers"])) {
		$worksummers = "T";
	}
	else {
		$workSummers = "F";
	}

	if (isset($_POST["workDuringYear"])) {
		$workDuringYear = "T";
	}
	else {
		$workDuringYear = "F";
	}
	
	if (isset($_POST["workOnCampusCurrently"])) {
		$workOnCampusCurrently = "T";
	}
	else {
		$workOnCampusCurrently = "F";
	}
	
	if (isset($_POST["workOnCampusBefore"])) {
		$workOnCampusBefore = "T";
	}
	else {
		$workOnCampusBefore = "F";
	}
	
	$wwOnCampus = $_POST["wwOnCampus"];
	
	if (isset($_POST["Practicum"])) {
		$Practicum = "T";
	}
	else {
		$Practicum = "F";
	}
	
	$PracHowLong = $_POST["PracHowLong"];

	//activities and time spent
	$activity1 = $_POST["activity1"];
	$activity2 = $_POST["activity2"];
	$activity3 = $_POST["activity3"];
	$activity4 = $_POST["activity4"];
	$activity5 = $_POST["activity5"];
	$timeSpent1 = $_POST["timeSpent1"];
	$timeSpent2 = $_POST["timeSpent2"];
	$timeSpent3 = $_POST["timeSpent3"];
	$timeSpent4 = $_POST["timeSpent4"];
	$timeSpent5 = $_POST["timeSpent5"];

	$classType = $_POST["classType"];
	$course = $_POST["course"];
	$className = $_POST["className"];
	$classType2 = $_POST["classType2"];
	$course2 = $_POST["course2"];
	$className2 = $_POST["className2"];
	$classType3 = $_POST["classType3"];
	$course3 = $_POST["course3"];
	$className3 = $_POST["className3"];
	$classType4 = $_POST["classType4"];
	$course4 = $_POST["course4"];
	$className4 = $_POST["className4"];
	//classType, term, grade, instructor, retake
	$term = $_POST["term"];
	$term2 = $_POST["term2"];
	$term3 = $_POST["term3"];
	$term4 = $_POST["term4"];
	$grade = $_POST["grade"];
	$grade2 = $_POST["grade2"];
	$grade3 = $_POST["grade3"];
	$grade4 = $_POST["grade4"];
	$instructor = $_POST["instructor"];
	$instructor2 = $_POST["instructor2"];
	$instructor3 = $_POST["instructor3"];
	$instructor4 = $_POST["instructor4"];
	$retake = $_POST["retake"];
	$retake2 = $_POST["retake2"];
	$retake3 = $_POST["retake3"];
	$retake4 = $_POST["retake4"];

	//skills and ratings
	$skill1 = $_POST["skill1"];
	$skill2 = $_POST["skill2"];
	$skill3 = $_POST["skill3"];
	$skill4 = $_POST["skill4"];
	$skill5 = $_POST["skill5"];
	
	$rating1 = $_POST["rating1"];
	$rating2 = $_POST["rating2"];
	$rating3 = $_POST["rating3"];
	$rating4 = $_POST["rating4"];
	$rating5 = $_POST["rating5"];
	
	

	
	$config = parse_ini_file('../../admin/config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        // needed because pdo throws a error
        $password = $password . "$";
        
try {//CONNECTION TO THE TESTING LAB DB
        $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO testinglab (fname, lname, date, address, phone, city, state, zip, DOB, citizen, email, major, minor, graddate, ID, swork, dywork, ccwork, pcwork, wwwork, practicum, prachowlong, activ1, activ2, activ3, activ4, activ5, tspent1, tspent2, tspent3, tspent4, tspent5, classtype, course, cname, term, grade, instru, retake, classtype2, course2, cname2, term2, grade2, instru2, retake2, classtype3, course3, cname3, term3, grade3, instru3, retake3, classtype4, course4, cname4, term4, grade4, instru4, retake4, skill, rate, skill2, rate2, skill3, rate3, skill4, rate4, skill5, rate5)
    VALUES ('$fname', '$lname', '$todayDate', '$address', '$phoneNumber', '$city', '$state', '$zipCode', '$DOB', '$citizenship', '$email', '$majors', '$minors', '$graduationDate', '$ID',
	'$workSummers', '$workDuringYear', '$workOnCampusCurrently', '$workOnCampusBefore', '$wwOnCampus', '$Practicum', '$PracHowLong', 
	'$activity1', '$activity2', '$activity3', '$activity4', '$activity5', '$timeSpent1', '$timeSpent2', '$timeSpent3', '$timeSpent4', '$timeSpent5',
	'$classType', '$course', '$className', '$term', '$grade', '$instructor','$retake', 
	'$classType2', '$course2', '$className2', '$term2', '$grade2', '$instructor2', $retake2',
	'$classType3', '$course3', '$className3', '$term3', '$grade3', '$instructor3', '$retake3',
	'$classType4', '$course4', '$className4', '$term4', '$grade4', '$instructor4', '$retake4',
	'$skill1', '$rating', '$skill2', '$rating2', '$skill3', '$rating3', '$skill4', '$rating4', '$skill5', '$rating5')";
    // use exec() because no results are returned
    $conn->exec($sql);
    
    echo "You have successfully applied to the testing lab.";
    }
catch(PDOException $e)
    {
    echo  "An error has occured please go back and try again.";
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