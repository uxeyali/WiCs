<!DOCTYPE html>
<html lang = s"en">

<head>
	<title>Edit Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../../css/app.css"> 
</head>

<body>

<?php
 $path = "../../";
 $config = parse_ini_file('../../config.ini');
 $username = $config['username'];
 $password = $config['password'];
 $db = $config['dbname'];
 // needed because pdo throws a error
 $password = $password . "$";
 $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $rows = $db -> query("SELECT * FROM project");
	$val = $_POST["proj"];

if ( ($_POST["option"]) == 'Edit') {

	foreach($rows as $row){

		if ($row["ProjectID"] == $val){
			$title = $row["Title"];
			$student = $row["Students"];
			$advisor = $row["Advisors"];
			$intro = $row["Introduction"];
			$hypo = $row["Hypothesis"];
			$abstract = $row["Abstract"];
			$testing = $row["Testing"];
			$conc = $row["Conclusion"];
			$id = $row["ProjectID"];
		}
	}
}

	if (($_POST["option"]) == 'Delete') {
		foreach($rows as $row){
				if ($row["ProjectID"] == $val){
				$delete = "DELETE FROM project WHERE ProjectID = $val";
				$db -> exec($delete);
			}
		}
		print("Project Deleted");
		print("<br>");
		print_r("<a href=\"editproject2.php\">Return to edit page</a>");
		exit();
	}

?>

<a href="editproject2.php">Return to edit page</a>

<form action="submitEdit.php" method="post">
<h4>Title</h4>
        <input type="text" name="title" value = "<?= $title ?>" />

      </div>
    </div>

   <div class="row">

  <h4>What type of project is this?</h4>
    <select name="project-type">
      <option value="Mobile">Mobile Project</option>
      <option value="Hardware">Hardware Project</option>
      <option value="Software">Software Project</option>
      <option value="Web">Web Technology Prject</option>
    </select>
   </div>


   <div class="row">
    <div class="large-4 columns">
        <h4>Student(s) involved</h4>
      <input type="text" name="students" value="<?= $student ?>"  />
       </div>
   </div>

   <div class="row">
    <div class="large-4 columns">
        <h4>Advisors involved</h4>
      <input type="text" name="advisors" value="<?= $advisor ?>" />
       </div>
   </div>

    <hr>

    <div class="row">
       <div class="large-4 columns">
        <h4>Abstract</h4>
       </div>
    </div>

  <div class="row">
    <textarea rows = "5" cols="50" name="abstract-text" > <?= $abstract ?> </textarea>
  </div>

   <div class="row">
       <div class="large-4 columns">
        <h4>Introduction</h4>
       </div>
    </div>

  <div class="row">
    <textarea rows = "5" cols="50" name="intro-text"> <?= $intro ?> </textarea>
  </div>

   <div class="row">
       <div class="large-4 columns">
        <h4>Hypothesis</h4>
       </div>
    </div>

  <div class="row">
    <textarea rows = "5" cols="50" name="hypo-text"> <?= $hypo ?> </textarea>
  </div>

   <div class="row">
       <div class="large-4 columns">
        <h4>Testing</h4>
       </div>
    </div>

  <div class="row">
    <textarea rows = "5" cols="50" name="testing-text"> <?= $testing ?> </textarea>
  </div>

   <div class="row">
       <div class="large-4 columns">
        <h4>Conclusion</h4>
       </div>
    </div>

  <div class="row">
    <textarea rows = "5" cols="50" name="conclusion-text" ><?= $conc ?></textarea>
  </div>

    </div>
	<input type="hidden" name="id" value="<?= $id ?>">
  <input type="submit">

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