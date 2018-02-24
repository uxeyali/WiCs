<div id="load">
<link rel="stylesheet" href="../../../faculty/css/index.css">
	<?php
		$config = parse_ini_file('../../config.ini');
		$username = $config['username'];
		$password = $config['password'];
		$db = $config['dbname'];
		// needed because pdo throws a error
		$password = $password . "$";
		$db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
		$var1 = $_POST['variable'];
		$_query = $db->query("SELECT * FROM `university`.`faculty` WHERE username = '$var1';");
		foreach($_query as $_stat){
			$name = $_stat['name'];
			$username = $var1;
			$email = $_stat['email'];
			$content1 = $_stat['content1'];
			$content2 = $_stat['content2'];
			$content3 = $_stat['content3'];
			$personal_site = $_stat['personal_site'];
			$img_source = $_stat['img_source'];
		}
	?>
		<div class="row">
			<div id="fac" class="small-12 columns">
			<p style="text-align: center;"><img class='thumbnail centered' id='<?=$username?>' src='../../../faculty/img/<?=$img_source?>'></p>
				<form action="facUpdate.php" method="post" enctype="multipart/form-data">
					<label>Username:</label>
					<input type="text" name="username" id="username" value="<?=$username?>" readonly><br>
					<label>Name:</label>
					<input type="text" name="name" id="name" value="<?=$name?>" required><br>
					<label>Email:</label>
					<input type="text" name="email" id="email" value="<?=$email?>" required><br>
					<label>Personal Site:</label>
					<input type="text" name="personal_site" id="personal_site" value="<?=$personal_site?>"><br>
					<label>Content 1:</label>
					<input type="text" name="content1" id="content1" value="<?=$content1?>" required><br>
					<label>Content 2:</label>
					<input type="text" name="content2" id="content2" value="<?=$content2?>" required><br>
					<label>Content 3:</label>
					<input type="text" name="content3" id="content3" value="<?=$content3?>" required><br>
					<input id="submit" type="submit" name="submit">
				</form>
				<br>
			</div>
		</div>
</div>
</html>
