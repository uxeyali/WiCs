<?php
  $path = "../../";
  include $path.'admin_head1.html';
?>
<link rel="stylesheet" href="../../../css/app.css">
<?php
  include $path.'admin_head2.html';
?>
<?php
    //Here is the entry for the database credentials
    $config = parse_ini_file("../../config.ini");
    $username = $config['username'];
    $password = $config['password'];
    $db = $config['dbname'];
    // needed because pdo throws a error
    $password = $password . "$";
    $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $rows = $db -> query("SELECT * FROM project");
   ?>

<div class="banner row">
         <div class="image large-12 large-centered columns">
             <h2>Project Admin Page</h2>
             <h3>Select a project below to edit/delete</h3>
         </div>
     </div>

<select name="proj" form ="projform">
		<?php
			foreach ($rows as $row) {
				$projectname = $row["Title"];
				$id = $row["ProjectID"];
				print("<option value=\"$id\"> $projectname </option>");
				}
		?>
</select>

<form onSubmit= "if(!confirm('Do you want to continue? (Note: If delete was selected, the delete action cannot be undone)')){return false;}" action = "EditResponse.php" method="POST" id="projform" > 
  <button class="small button" name="option" type="submit" value="Edit">Edit</button>
  <button class="small button" name="option" type="delete" value="Delete">Delete</button>
  <a href="AdminHome.php" class="button small">Return to Home</a>
	<!-- <input type="submit" name="option" value="Edit">
	<input type="submit" name="option" value="Delete">	-->
</form>



<?php
  include $path."admin_footer.html";
?>
    <script src="../../../js/vendor/jquery.js"></script> 
    <script src="../../../js/vendor/what-input.js"></script>  
    <script src="../../../js/vendor/foundation.js"></script>
    <script src="../../../js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>

  </body>
</html>