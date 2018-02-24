	<?php
		$var1 = $_POST['variable'];
        $path = "../../../";
    ?>
	<link rel="stylesheet" href="../../../../faculty/css/index.css">
	<main id="load">
<?php
		$config = parse_ini_file('../../../config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        // needed because pdo throws a error
        $password = $password . "$";
        $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
		$_query = $db->query("SELECT * FROM university.`faculty` where username = '$var1';");
		foreach($_query as $_stat)
		{
			$name = $_stat['name'];
			$email = $_stat['email'];
			$username = $_stat['username'];
			$address = $_stat['address'];
			$content1 = $_stat['content1'];
			$content2 = $_stat['content2'];
			$content3 = $_stat['content3'];
			$img_source = $_stat['img_source'];
			$quote = $_stat['quote'];
			$bio = $_stat['bio'];
			$template_num = $_stat['template_num'];
		};
	?>
	<form action = "fac_edit_submit.php" method="post" enctype="multipart/form-data">
    <div class='banner row'>
         <div class='image large-12 large-centered columns'>
             <img src='../../../../img/faculty.png'>
         </div>
		 <input id="username" style="text-align: center" type="text" value="<?=$username?>" name="username" readonly>
		 <input style="text-align: center" type="text" value="<?=$name?>" name="name" readonly>
		 <hr class='line'>
		 <h5 style="font-weight: bold">QUOTE / INSPIRING MESSAGE</h5>
		 <textarea rows="3" name="quote" id="quote" style="text-align: center"><?=$quote?></textarea>
	</div>
    <!-- DIVIDER -->
	<div class="row">
		<div id="fac" class="medium-6 columns">
			<p style="text-align: center;"><img class='thumbnail centered' id='<?=$username?>' src='../../../../Faculty/img/<?=$img_source?>'></p>
			<div class="row small-up-12">
				<div class="column" id="templateValues">
					<input type="text" value="<?=$email?>" name="email" class="templateInput" placeholder="something@something.com"><br>
					<input type="text" value="<?=$content1?>" name="content1" class="templateInput" placeholder="Ph.D., Some School"><br>
					<input type="text" value="<?=$content2?>" name="content2" class="templateInput" placeholder="Building and Room Number"><br>
					<input type="text" value="<?=$content3?>" name="content3" class="templateInput" placeholder="Office Number"><br>
				</div>
			</div>
		</div>
		<div class="medium-6 columns">
			<h3>Biography</h3>
			<textarea rows="15" name="bio" id="bio"><?=$bio?></textarea>
		</div>
	</div>
	<div class="row">
		<hr class='line'>
	</div>

	
	<div class="row">
		<div class="small-6 small-centered">
			<a id="office_button" href="fac_tab.php?q=<?=$username?>" class="button large expanded">Edit Courses / Awards</a>
		</div>
	</div>
	<div class="row">
		<div class="small-6 small-centered">
			<a id="office_button" href="../../../../admin/admin/news_admin/NEWadmin.php" class="button large expanded">Edit Office Hours</a>
		</div>
	</div>
	<div class="row">
		<div class="small-8 small-centered">
		<button id='office_button' class='button large expanded' type="submit" name="submit">SUBMIT CHANGES</button>
		</div>
	</div>
	
	</form>
	<div id="addedLayout">
	<?php include "../../../../faculty/facpages/faculty/".$username.".php" ?>
	</div>
	
	<hr class='line'>
	</main>
  </body>
</html>