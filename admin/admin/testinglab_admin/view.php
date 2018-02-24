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
        
<?php
    
    
    
$config = parse_ini_file('../../../admin/config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        // needed because pdo throws a error
        $password = $password . "$";    

$db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
$rows = $db->query("SELECT * FROM testinglab WHERE fname=" .$_GET['Fname']. "AND lname=" .$_GET['Lname']. "ASC;");


echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>TodayDate</th>
<th>Address</th>
<th>PhoneNumber</th>
<th>City</th>
<th>State</th>
<th>ZipCode</th>
<th>DOB</th>
<th>Citizenship</th>
<th>Email</th>
<th>Major</th>
<th>Minor</th>
<th>GraduationDate</th>
<th>ID Number</th>";
                                           
    foreach($rows as $row){
    echo "<tr>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
	echo "<td>" . $row['todayDate'] . "</td>";
	echo "<td>" . $row['address'] . "</td>";
	echo "<td>" . $row['phoneNumber'] . "</td>";
	echo "<td>" . $row['city'] . "</td>";
	echo "<td>" . $row['state'] . "</td>";
	echo "<td>" . $row['zipCode'] . "</td>";
	echo "<td>" . $row['DOB'] . "</td>";
	echo "<td>" . $row['citizen'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "<td>" . $row['majors'] . "</td>";
	echo "<td>" . $row['minors'] . "</td>";
	echo "<td>" . $row['graduationDate'] . "</td>";
    echo "<td>" . $row["ID"] . "</td>";
    echo "</tr>";
    };

echo "</table>";
                                           
echo "<table>
<th>WorkSummers</th>
<th>WorkDuringYear</th>
<th>WorkCurrently</th>
<th>WorkBefore</th>
<th>WWOnCampus</th>
<th>Practicum</th>
<th>PracHowLong</th>";
    foreach($rows as $row){
    echo "<td>" . $row['workSummers'] . "</td>";
    echo "<td>" . $row['workDuringYear'] . "</td>";
	echo "<td>" . $row['workOnCampusCurrently'] . "</td>";
	echo "<td>" . $row['workOnCampusBefore'] . "</td>";
	echo "<td>" . $row['wwOnCampus'] . "</td>";
	echo "<td>" . $row['Practicum'] . "</td>";
	echo "<td>" . $row['PracHowLong'] . "</td>";
    echo "</tr>";
    };                                       
    
echo "</table>";
                                           
echo "<table>
<th>Activity1</th>
<th>TimeSpent1</th>
<th>Activity2</th>
<th>TimeSpent2</th>
<th>Activity3</th>
<th>TimeSpent3</th>
<th>Activity4</th>
<th>TimeSpent4</th>
<th>Activity5</th>
<th>TimeSpent5</th>";
    foreach ($rows as $row){                                       
    echo "<td>" . $row['activity1'] . "</td>";
	echo "<td>" . $row['activity2'] . "</td>";
	echo "<td>" . $row['activity3'] . "</td>";
	echo "<td>" . $row['activity4'] . "</td>";
	echo "<td>" . $row['activity5'] . "</td>";
	echo "<td>" . $row['timeSpent1'] . "</td>";
    echo "<td>" . $row['timeSpent2'] . "</td>";
	echo "<td>" . $row['timeSpent3'] . "</td>";
	echo "<td>" . $row['timeSpent4'] . "</td>";
	echo "<td>" . $row['timeSpent5'] . "</td>";
    echo "</tr>";
    };

echo "</table>";
                                           
echo "<table>
<th>ClassType</th>
<th>Course</th>
<th>ClassName</th>
<th>ClassType2</th>
<th>Course2</th>
<th>ClassName2</th>
<th>ClassType3</th>
<th>Course3</th>
<th>ClassName3</th>
<th>ClassType4</th>
<th>Course4</th>
<th>ClassName4</th>                                      

<th>Term</th>
<th>Term2</th>
<th>Term3</th>
<th>Term4</th>
<th>Grade</th>
<th>Grade2</th>
<th>Grade3</th>
<th>Grade4</th>
<th>Instructor</th>
<th>Instructor2</th>
<th>Instructor3</th>
<th>Instructor4</th>
<th>Retake</th>
<th>Retake2</th>
<th>Retake3</th>
<th>Retake4</th>";
    foreach($rows as $row){
   
	
	echo "<td>" . $row['classType'] . "</td>";
	echo "<td>" . $row['course'] . "</td>";
	echo "<td>" . $row['className'] . "</td>";
	echo "<td>" . $row['term'] . "</td>";
	echo "<td>" . $row['grade'] . "</td>";
	echo "<td>" . $row['instructor'] . "</td>";
    echo "<td>" . $row['retake'] . "</td>";
	
	echo "<td>" . $row['classType2'] . "</td>";
	echo "<td>" . $row['course2'] . "</td>";
	echo "<td>" . $row['className2'] . "</td>";
	echo "<td>" . $row['term2'] . "</td>";
	echo "<td>" . $row['grade2'] . "</td>";
	echo "<td>" . $row['instructor2'] . "</td>";
    echo "<td>" . $row['retake2'] . "</td>";
	
	echo "<td>" . $row['classType3'] . "</td>";
	echo "<td>" . $row['course3'] . "</td>";
	echo "<td>" . $row['className3'] . "</td>";
	echo "<td>" . $row['term3'] . "</td>";
	echo "<td>" . $row['grade3'] . "</td>";
	echo "<td>" . $row['instructor3'] . "</td>";
    echo "<td>" . $row['retake3'] . "</td>";
	
	echo "<td>" . $row['classType4'] . "</td>";
	echo "<td>" . $row['course4'] . "</td>";
	echo "<td>" . $row['className4'] . "</td>";
	echo "<td>" . $row['term4'] . "</td>";
	echo "<td>" . $row['grade4'] . "</td>";
	echo "<td>" . $row['instructor4'] . "</td>";
    echo "<td>" . $row['retake4'] . "</td>";
    echo "</tr>";
		
};
echo "</table>";                                       

echo "<table>
<th>skill1</th>
<th>skill2</th>
<th>skill3</th>
<th>skill4</th>
<th>skill5</th>
<th>rating1</th>
<th>rating2</th>
<th>rating3</th>
<th>rating4</th>
<th>rating5</th>";
    foreach($rows as $row){
    echo "<td>" . $row['skill1'] . "</td>";
	echo "<td>" . $row['rating1'] . "</td>";
	echo "<td>" . $row['skill2'] . "</td>";
	echo "<td>" . $row['rating2'] . "</td>";
	echo "<td>" . $row['skill3'] . "</td>";
	echo "<td>" . $row['rating3'] . "</td>";
    echo "<td>" . $row['skill4'] . "</td>";
	echo "<td>" . $row['rating4'] . "</td>";
	echo "<td>" . $row['skill5'] . "</td>";
	echo "<td>" . $row['rating5'] . "</td>";
	
    echo "</tr>";
    };                                       
echo "</table>";
                                           
?>
        
        
<br><a href="stladmin.php" target=""> Please go back to the Admin page.</a>


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