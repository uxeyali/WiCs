<!DOCTYPE html>
<html lang = s"en">



<head>
	<title>Page Preview</title>
	<meta charset="utf-8">
	<!--<link rel="stylesheet" type="text/css" href=""> -->
</head>

<body>

<!-- While testing, an error is generated using apostraphes in names, look into
	cleaning inputs/ identifying special characters (i.e ' , - et.) -->

<?php
		$idnum = $_POST["id"];
		$title = $_POST["title"];
		$student = $_POST["students"];
		$advisor = $_POST["advisors"];
		$abstract = $_POST["abstract-text"];
		$intro = $_POST["intro-text"];
		$hypothesis = $_POST["hypo-text"];
		$testing = $_POST["testing-text"];
		$conclusion = $_POST["conclusion-text"];
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
			$add_info = "INSERT INTO project (Title, Students, Advisors, Introduction, Hypothesis, Abstract, Testing, Conclusion, ProjectType, ProjectID) VALUES ('$title', '$student', '$advisor', '$intro',
			  '$hypothesis', '$abstract', '$testing', '$conclusion', '$type', '$idnum')";
			$db -> exec($add_info);
			echo "Record Created";

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