<?php
		$path = "../../";
		include $path ."admin_head1.html";
    ?>
	<?php
		include $path ."admin_head2.html";
	?>
	<main>
			<?php

			$fname = $_POST['fname'];
			$lname = $_POST["lname"];
			$nickname = $_POST["nickname"];
			$username = $_POST["username"];
			$email = $_POST["email"];
			$content2 = $_POST["office"];
			$content3 = $_POST["phone"];
			$role = $_POST["role"];
			$quote = $_POST["quote"];
			$bio = $_POST["bio"];
			$personal_site = $_POST["personal_site"];
			
			if (strpos($personal_site, 'http://') == false) 	
			{
				$personal_site = "http://".$personal_site;
			}
			
			$address = "../../../Faculty/facpages/".$username;

			$name = $fname." ".$lname;
			
			
			$_files = $_FILES["fileToUpload"]["name"];
			$tmp_name = $_FILES['fileToUpload']['tmp_name'];
			$file_type = pathinfo($_files,PATHINFO_EXTENSION);
			$new_name = "$username".".jpg";
			$error = $_FILES['fileToUpload']['error'];
			if(isset($_files))
			{
				$check = getimagesize($_FILES['fileToUpload']['tmp_name']);
				
				if($check !== false)
				{
					if(!empty($_files))
					{
						$path = "../../../faculty/img/";
						if  (move_uploaded_file($tmp_name, $path.$new_name))
						{
							echo '';
						}
					}
					else
					{
						echo "please try again";
					}
				}
				else
				{
					echo "File is not an image.";
				}
			}
				
			

			$querystring = "INSERT INTO `faculty`(`name`, `email`, `username`, `address`, 
												 `nickname`, `content2`, `content3`, `role`, 
												 `quote`, `bio`, `img_source`, `personal_site`)
			
			VALUES ('".$name."','".$email."','".$username."','".$address."',
			'".$nickname."','".$content2."','".$content3."','".$role."',
			'".$quote."','".$bio."', '".$new_name."', '".$personal_site."')";

			//echo $querystring;

			$config = parse_ini_file('../../config.ini');
			$username = $config['username'];
			$password = $config['password'];
			$db = $config['dbname'];
			// needed because pdo throws a error
			$password = $password . "$";
			$db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);

			$rows = $db->query($querystring);
			
			?>
			<h3>
				Thank you, <?=$_POST["fname"];?>, your news post will be added!<br>
				<a href="../../../faculty/facpages/template2.php?username=<?=$username?>">Click</a> to go to your page!
			</h3>
			<div class="row small-6 medium-5 large-4">
				<a id='office_button' href='index.php' class='button large expanded'>Back to admin page</a>
			</div>
		</div>
	</main>
	<?php
		include  "../../admin_footer.html";
	?>
</body>