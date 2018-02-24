  <?php
	$config = parse_ini_file('../../config.ini');
    $username = $config['username'];
    $password = $config['password'];
    $db = $config['dbname'];
    // needed because pdo throws a error
    $password = $password . "$";
    $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
	if(isset($_POST['name'])){
		$name = $_POST['name'];			
	}
	if(isset($_POST['email'])){
		$email = $_POST['email'];			
	}
	if(isset($_POST['website'])){
		$website = $_POST['website'];			
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
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if(isset($_POST['personal_site'])){
		$personal_site = $_POST['personal_site'];
		if (strpos($personal_site, 'http://') !== 0) 	
			{
				$personal_site = "http://".$personal_site;
			}else{
				$personal_site = $personal_site;
			}
	}
	if($username == ""){
		$message = "You need to select a faculty member to update their information.";
	}else{
		$message = "The faculty page has been updated.";
		$_query = $db->query("UPDATE `faculty` SET `personal_site` = '$personal_site', `name` = '$name', `email` = '$email', `content1` = '$content1', `content2` = '$content2', `content3` = '$content3' WHERE `faculty`.`username` = '$username';");
	}
	
  ?>
<!--Navigation is being imported from 'nav.html'-->
      <?php
            $path = "../../";
            include $path ."admin_head1.html";
    ?>
	<link rel="stylesheet" href="../../../faculty/css/index.css">
	<?php
		include $path ."admin_head2.html";
	?>
<!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 large-centered columns">
             <a href="../../index.php"><img src="../../../img/faculty.png"></a>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../../../img/line.svg"></div>
	 <div class="row small-6 medium-5 large-4">
			<a id="office_button" href="index.php" class="button large expanded">FACULTY ADMIN PAGE</a>
	 </div>
	<div class="row"><img src="../../../img/line.svg"></div>
<!--Do not delete anything before this-->
	<br>
	<div class="row">
	<div class="large-12 columns centered">
    <main>
        <h4 class="role" style="text-align: center"><?=$message?></h4>
    </main>
	</div>
	</div>
	<?php
		include $path ."admin_footer.html";
	?>
    </main>
  </body>
</html>
