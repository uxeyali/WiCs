<?php
	$config = parse_ini_file('../../../config.ini');
    $username = $config['username'];
    $password = $config['password'];
    $db = $config['dbname'];
    // needed because pdo throws a error
    $password = $password . "$";
    $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
	if(isset($_POST['username'])){
		$username = $_POST['username'];			
	}
	if(isset($_POST['name'])){
		$name = $_POST['name'];			
	}
	if(isset($_POST['quote'])){
		$quote = $_POST['quote'];			
	}
	if(isset($_POST['email'])){
		$email = $_POST['email'];			
	}
	if(isset($_POST['content1'])){
		$content1 = $_POST['content1'];			
	}
	if(isset($_POST['content2'])){
		$content2 = $_POST['content2'];			
	}
	if(isset($_POST['content3'])){
		$content3 = $_POST['content3'];			
	}
	if(isset($_POST['bio'])){
		$bio = $_POST['bio'];
	}
	if($username == ""){
		$message = "You need to select a faculty member to update their information.";
	}else{
		$message = "The faculty page has been updated.";
		$_query = $db->query("UPDATE `faculty` SET `name` = '$name', `email` = '$email', `quote` = '$quote', `content1` = '$content1', `content2` = '$content2', `content3` = '$content3', `bio` = '$bio' WHERE `faculty`.`username` = '$username';");
	}
	
  ?>
<!--Navigation is being imported from 'nav.html'-->
      <?php
            $path = "../../../";
            include "../../../admin_head1.html";
    ?>
	<link rel="stylesheet" href="../../../../faculty/css/index.css">
	<?php
		include "../../../admin_head2.html";
	?>
<!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 large-centered columns">
             <img src="../../../../img/faculty.png">
             <h2>Faculty Credentials Updated</h2>
         </div>
     </div>
     <!-- DIVIDER -->
    <div class="row"><img src="../../../../img/line.svg"></div>
	<div class="row">
	<div class="small-6 small-centered text-center columns">
	<a id="office_button" class="button large expanded" href="../index.php">FACULTY ADMIN PAGE</a>
	</div>
	<div class="small-6 small-centered text-center columns">
		<a id="office_button" class="button large expanded" href="fac_editor.php">SELECT A PROFESSOR</a>
	</div>
	</div>
	<div class="row"><img src="../../../../img/line.svg"></div>
<!--Do not delete anything before this-->
	<br>
	<div class="row">
	<div class="large-12 columns centered">
    <main>
    </main>
	</div>
	</div>
	<?php
		include"../../../admin_footer.html";
	?>
    </main>
  </body>
</html>