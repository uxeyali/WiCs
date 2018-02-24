	<?php
		$path = "../../../";
		include "../../../admin_head1.html";
	?>
	<link rel="stylesheet" href="../../../../faculty/css/index.css">
	<?php
		include "../../../admin_head2.html";
	?>
	<main>
<?php
	$config = parse_ini_file('../../../config.ini');
    $username = $config['username'];
    $password = $config['password'];
    $db = $config['dbname'];
    // needed because pdo throws a error
    $password = $password . "$";
    $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
	$message = "nothing";
	$action = "";
	$submit = "false";
	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
	if(isset($_GET['username'])){
		$username = $_GET['username'];
	}
	if(isset($_GET['user'])){
		$user = $_GET['user'];
		$_quer = $db->query("SELECT courses.course_type_number, courses.name, courses.description, courses.num FROM courses WHERE courses.username = '$user';");
		foreach($_quer as $_stats){
			$_num = $_stats['num'];
			$course_name = $_GET["course_name$_num"];
			$course_type = $_GET["course_type$_num"];
			$course_description = $_GET["course_description$_num"];
			$_query = $db->query("UPDATE courses SET course_type_number = '$course_type', name = '$course_name', description = '$course_description', type = 'cs' WHERE num = '$_num';");
		}
		$_quers = $db->query("SELECT awards.name, awards.description, awards.num FROM awards WHERE awards.username = '$user';");
		foreach($_quers as $_statsi){
			$_nums = $_statsi['num'];
			$award_name = $_GET["award_name$_nums"];
			$award_description = $_GET["award_description$_nums"];
			$_query = $db->query("UPDATE awards SET name = '$award_name', description = '$award_description' WHERE num = '$_nums';");
		}
	print "
<h3 style=\"text-align: center\">You have successfully UPDATED the credentials</h3>
<div id=\"editing\" class=\"row\">
	<div class=\"small-6 small-centered text-center columns\">
		<a id=\"office_button\" class=\"button large expanded\" href=\"fac_tab.php?q=$user\">CONTINUE EDITING</a>
	</div>
	<div class=\"small-6 small-centered text-center columns\">
	<a id=\"office_button\" class=\"button large expanded\" href=\"../index.php\">FACULTY ADMIN PAGE</a>
	</div>
	<div class=\"small-6 small-centered text-center columns\">
		<a id=\"office_button\" class=\"button large expanded\" href=\"fac_editor.php\">SELECT A PROFESSOR</a>
	</div>
</div>";
	}
	//----Add and remove courses----
	
	if(isset($_GET['message'])){
		$message = $_GET['message'];
	}
	if(isset($_GET['num'])){
		$num = $_GET['num'];
	}
	if($action == "course"){
		$_query = $db->query("DELETE FROM courses WHERE courses.num = '$num'");
		$_query = $db->query("UPDATE courses SET num = num-1 WHERE num > '$num';");
		print "
<h3 style=\"text-align: center\">You have successfully REMOVED a course</h3>
<div id=\"editing\" class=\"row\">
	<div class=\"small-6 small-centered text-center columns\">
		<a id=\"office_button\" class=\"button large expanded\" href=\"fac_tab.php?q=$username\">CONTINUE EDITING</a>
	</div>
	<div class=\"small-6 small-centered text-center columns\">
	<a id=\"office_button\" class=\"button large expanded\" href=\"index.php\">FACULTY ADMIN PAGE</a>
	</div>
	<div class=\"small-6 small-centered text-center columns\">
		<a id=\"office_button\" class=\"button large expanded\" href=\"fac_editor.php\">SELECT A PROFESSOR</a>
	</div>
</div>";
	}
	if($message=="course"){
		$_query = $db->query("INSERT INTO courses select 'name', '$username', 'description','cs',count(*)+1, 'course_type_number' from courses;");
		print "
<h3 style=\"text-align: center\">You have successfully ADDED a course</h3>
<div id=\"editing\" class=\"row\">
	<div class=\"small-6 small-centered text-center columns\">
		<a id=\"office_button\" class=\"button large expanded\" href=\"fac_tab.php?q=$username\">CONTINUE EDITING</a>
	</div>
	<div class=\"small-6 small-centered text-center columns\">
	<a id=\"office_button\" class=\"button large expanded\" href=\"index.php\">FACULTY ADMIN PAGE</a>
	</div>
	<div class=\"small-6 small-centered text-center columns\">
		<a id=\"office_button\" class=\"button large expanded\" href=\"fac_editor.php\">SELECT A PROFESSOR</a>
	</div>
</div>";
	}
	
	
	
	
	
	
	
	if(isset($_GET['nums'])){
		$nums = $_GET['nums'];
		$action = "award";
	}
	if($action == "award"){
		$_query = $db->query("DELETE FROM awards WHERE awards.num = '$nums'");
		$_query = $db->query("UPDATE awards SET num = num-1 WHERE num > '$nums';");
		print "
<h3 style=\"text-align: center\">You have successfully REMOVED an Award / Publication</h3>
<div id=\"editing\" class=\"row\">
	<div class=\"small-6 small-centered text-center columns\">
		<a id=\"office_button\" class=\"button large expanded\" href=\"fac_tab.php?q=$username\">CONTINUE EDITING</a>
	</div>
	<div class=\"small-6 small-centered text-center columns\">
	<a id=\"office_button\" class=\"button large expanded\" href=\"index.php\">FACULTY ADMIN PAGE</a>
	</div>
	<div class=\"small-6 small-centered text-center columns\">
		<a id=\"office_button\" class=\"button large expanded\" href=\"fac_editor.php\">SELECT A PROFESSOR</a>
	</div>
</div>";
	}
	if($message=="award"){
		$_query = $db->query("INSERT INTO awards select 'name', '$username','description',count(*)+1 from awards;");
		print "
<h3 style=\"text-align: center\">You have successfully ADDED an Award / Publication</h3>
<div id=\"editing\" class=\"row\">
	<div class=\"small-6 small-centered text-center columns\">
		<a id=\"office_button\" class=\"button large expanded\" href=\"fac_tab.php?q=$username\">CONTINUE EDITING</a>
	</div>
	<div class=\"small-6 small-centered text-center columns\">
	<a id=\"office_button\" class=\"button large expanded\" href=\"index.php\">FACULTY ADMIN PAGE</a>
	</div>
	<div class=\"small-6 small-centered text-center columns\">
		<a id=\"office_button\" class=\"button large expanded\" href=\"fac_editor.php\">SELECT A PROFESSOR</a>
	</div>
</div>";
	}else{
		$message = "something happened";
	}
	
?>
	<?php
		include"../../../admin_footer.html";
	?>
    </main>
	
  </body>
</html>