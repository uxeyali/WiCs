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
$rows = $db->query("SELECT * FROM testinglab ORDER BY fname='$Fname'' AND lname='$Lname' ASC;");

                                           

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

$link = 'view.php';
                                           
foreach($rows as $row){
    echo "<tr>";
    echo "<td><a href='" .$link. "'>" . $row['fname'] . "</a></td>";
    echo "<td><a href='" .$link. "'>" . $row['lname'] . "</a></td>";
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
