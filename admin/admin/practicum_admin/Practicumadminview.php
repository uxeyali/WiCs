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
             <img src="<?=$path?>../../img/practicum.png">
             <h2>COMPUTER SCIENCE PRACTICUM</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="<?=$path?>../../img/line.svg"></div>

<?php
$studentid = $_POST["StudentID"];
        
$config = parse_ini_file('../../../admin/config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        // needed because pdo throws a error
        $password = $password . "$"; 
        
try{
$db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
$rows = $db->query("SELECT * FROM practicum ORDER BY fname='$Fname'' AND lname='$Lname' ASC;");


echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Student ID</th>
<th>Address</th>
<th>Phone number</th>
<th>Email</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>Semeter</th>
<th>Year</th>
</tr>";
    foreach($rows as $row){
	 echo "<tr>";
    echo "<td>" . $row['Fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
	echo "<td>" . $row['StudID'] . "</td>";
	echo "<td>" . $row['Address'] . "</td>";
	echo "<td>" . $row['Telephone'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "<td>" . $row['City'] . "</td>";
	echo "<td>" . $row['state'] . "</td>";
	echo "<td>" . $row['Zip'] . "</td>";
	echo "<td>" . $row['Semester'] . "</td>";
    echo "<td>" . $row['year'] . "</td>";
	   echo "</tr>";
};

echo "</table>";
echo "<table>
<tr>
<th>341 Grade</th>
<th>341 Term</th>
<th>375 Grade</th>
<th>375 term</th>
<th>385 Grade</th>
<th>385 Term</th>
<th>410 Grade</th>
<th>410 Term</th>
<th>471 Grade</th>
<th>471 Term</th>
<th>400 evel class Grade1</th>
<th>400 level class Term1</th>
<th>400 level class1</th>
<th>400 evel class Grade2</th>
<th>400 level class Term2</th>
<th>400 level class2</th>
    </tr>";
    foreach($rows as $row){
	 echo "<tr>";
    echo "<td>" . $row['341g'] . "</td>";
	echo "<td>" . $row['341t'] . "</td>";
	echo "<td>" . $row['375g'] . "</td>";
	echo "<td>" . $row['375t'] . "</td>";
	echo "<td>" . $row['385g'] . "</td>";
	echo "<td>" . $row['385t'] . "</td>";
	echo "<td>" . $row['410g'] . "</td>";
	echo "<td>" . $row['410t'] . "</td>";
	echo "<td>" . $row['471g'] . "</td>";
	echo "<td>" . $row['471t'] . "</td>";
	echo "<td>" . $row['400ag'] . "</td>";
	echo "<td>" . $row['400at'] . "</td>";
	echo "<td>" . $row['400ac'] . "</td>";
	echo "<td>" . $row['400bg'] . "</td>";
	echo "<td>" . $row['400bt'] . "</td>";
	echo "<td>" . $row['400bc'] . "</td>";
	   echo "</tr>";
};

echo "</table>";
echo "<table>
<tr>
<th>Recived</th>
<th>Action</th>
<th>Phone number</th>
<th>Starte Date</th>
<th>End Date</th>
<th>Hours</th>
<th>Company Name</th>
<th>Super's First Name</th>
<th>Super's Last Name</th>
<th>Super's Address</th>
<th>Super's City</th>
<th>Super's State</th>
<th>Super's Zip</th>
<th>Super's Phone number</th>
<th>Task</th>
</tr>";
    
foreach($rows as $row){
	 echo "<tr>";
    echo "<td>" . $row['recived'] . "</td>";
	echo "<td>" . $row['action'] . "</td>";
	echo "<td>" . $row['regterm'] . "</td>";
	echo "<td>" . $row['startdate'] . "</td>";
	echo "<td>" . $row['enddate'] . "</td>";
	echo "<td>" . $row['hours'] . "</td>";
	echo "<td>" . $row['compname'] . "</td>";
	echo "<td>" . $row['supefmane'] . "</td>";
	echo "<td>" . $row['supelname'] . "</td>";
	echo "<td>" . $row['supeaddress'] . "</td>";
	echo "<td>" . $row['supecity'] . "</td>";
	echo "<td>" . $row['supestate'] . "</td>";
	echo "<td>" . $row['supezip'] . "</td>";
	echo "<td>" . $row['supephone'] . "</td>";
	echo "<td>" . $row['tasks'] . "</td>";
	
	
    echo "</tr>";
};

echo "</table>";

    }
catch(PDOException $e)
    {
    echo "An error has occured please try again.";// print error message
    }

$conn = null;// close connection	

?><br><a href="practicumadmin.php" target=""> Please go back to the Admin page.</a>

	  <?php
      include "../../admin_footer.html";
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
