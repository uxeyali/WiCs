<!DOCTYPE html>
<html lang = s"en">

<head>
	<title>Page Preview</title>
	<meta charset="utf-8">
	<!--<link rel="stylesheet" type="text/css" href=""> -->
</head>

<body>

<?php
		$idnum = $_POST["id"];

		if (isset($_POST["title"])) {
			$title = $_POST["title"];
		}
		if (isset($_POST["students"])) {
			$student = $_POST["students"];
		}
		if (isset($_POST["advisors"])) {
			$advisor = $_POST["advisors"];
		}
		if (isset($_POST["abstract-text"])) {
			$abstract = $_POST["abstract-text"];
		}
		if (isset($_POST["intro-text"])) {
			$intro = $_POST["intro-text"];
		}
		if (isset($_POST["hypo-text"])) {
			$hypothesis = $_POST["hypo-text"];
		}
		if (isset($_POST["testing-text"])) {
			$testing = $_POST["testing-text"];
		}
		if (isset($_POST["conclusion-text"])) {
			$conclusion = $_POST["conclusion-text"];
		}
		 
		$type = $_POST["project-type"];

		 $config = parse_ini_file('../../config.ini');
         $username = $config['username'];
         $password = $config['password'];
         $db = $config['dbname'];
         // needed because pdo throws a error
         $password = $password . "$";
		try{
			$db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
			$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$update_info = "UPDATE project SET Title = '$title', Students = '$student', Advisors = '$advisor', Introduction = '$intro', Hypothesis = '$hypothesis', Abstract = '$abstract', Testing = '$testing', Conclusion = '$conclusion', ProjectType = '$type', ProjectID = '$idnum' WHERE ProjectID = '$idnum'";
			; 
			$db -> exec($update_info);
			echo "Project Updated";

		}
		catch(PDOException $e){
		print("Error!:" . $e -> getMessage() . "<br/>");
		!die();
}
$db = null;

	?>


<h3>Your page has been submitted</h3>


<a href = "../../../current_students/Projects/index.php"> View your page </a>



</body>
</html>