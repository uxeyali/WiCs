	<!--Navigation is being imported from 'nav.html'-->
    <?php
            $path = "../";
            include "../head1.html";
    ?>
	<link rel="stylesheet" href="css/index.css">
	<?php
		include "../head2.html";
	?>
	<!-- BANNER SECTION -->
    <div class="banner row">
        <div class="image large-12 large-centered columns">
            <a href="../index.php"><img src="<?=$path?>img/faculty.png"></a>
            <h2>Current Faculty and Staff</h2>
        </div>
    </div>
    <!-- DIVIDER -->
    <div class="row"><img src="<?=$path?>img/line.svg"></div>
	<div class="row small-6 medium-5 large-4">
		<a id="office_button" href="<?=$path?>faculty_hours/" class="button large expanded">OFFICE HOURS</a>
		<br>
		<h3 class="role" style="text-align: center">CURRENT FACULTY</h3>
	</div>
<!--Do not delete anything before this-->
	<br>
    <main id="ajax">
		<div id="fac" class="row small-up-2 medium-up-3 large-up-3 small-centered">
		<?php
		$count = 0;
		//$db = new PDO("mysql:dbname=university;host=localhost","root","password");
		$config = parse_ini_file('../admin/config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        // needed because pdo throws a error
        $password = $password . "$";
        $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
		$_query = $db->query("SELECT name, email, username, address, content1, content2, content3, img_source, role FROM `faculty` WHERE `role` = 'faculty' ORDER BY name;");
			foreach($_query as $_stat){
				$name = $_stat['name'];
				$email = $_stat['email'];
				$username = $_stat['username'];
				$address = $_stat['address'];
				$content1 = $_stat['content1'];
				$content2 = $_stat['content2'];
				$content3 = $_stat['content3'];
				$img_source = $_stat['img_source'];
				$role = $_stat['role'];
				//this is for testing, comment out when finished.

				$address = 'template2.php';
				if($roll = "faculty"){
		?>
		
		<div class="column column-block">
			<a href="facpages/template2.php?username=<?=$username?>" id='<?=$username?>field3'><img class="thumbnail images unwrapping" id='<?=$username?>' src='<?=$path?>faculty/img/<?=$img_source?>'></a>
			<div id='<?=$username?>content0'><br>
			<div style="margin-top: -50px;margin-bottom: 20px;">
				<span id='<?=$username?>field0' hidden><?=$username?></span><br>
				<span id='<?=$username?>field1' class="name_header"><?=$name?></span><br>
				<div id="alinks">
					<span><a href="mailto:<?=$email?>" id="<?=$username?>field2"><?=$email?></a></span><br>
					<span><a href="facpages/template2.php?username=<?=$username?>" id='<?=$username?>field3'><?=$name?>'s Website</a></span><br>
				</div>
				<span id='<?=$username?>field4'><?=$content1?></span><br>
				<span id='<?=$username?>field5'><?=$content2?></span><br>
				<span id='<?=$username?>field6'><?=$content3?></span>
				</div>
			</div>
		</div>
		<?php
				}
				}
		?>
		</div>
		<div class="row align-center">
			<h3 class="column role" style="text-align: center">CURRENT STAFF</h3>
		</div>
		<div id="fac" class="row small-up-2 medium-up-3 large-up-3 small-centered">
		<?php
		$_query = $db->query("SELECT name, email, username, address, content1, content2, content3, img_source, role FROM `faculty` WHERE `role` = 'staff';");
			foreach($_query as $_stat){
				$name = $_stat['name'];
				$email = $_stat['email'];
				$username = $_stat['username'];
				$address = $_stat['address'];
				$content1 = $_stat['content1'];
				$content2 = $_stat['content2'];
				$content3 = $_stat['content3'];
				$img_source = $_stat['img_source'];
				$role = $_stat['role'];
				//this is for testing, comment out when finished.

				$address = 'template1.php';
				if($roll = "staff"){
		?>
		<div class="column column-block">
			<img class="thumbnail images" id='<?=$username?>' src='<?=$path?>faculty/img/<?=$img_source?>'>
			<div id='<?=$username?>content0'><br>
				<span id='<?=$username?>field0' hidden><?=$username?></span><br>
				<span id='<?=$username?>field1' class="name_header"><?=$name?></span><br>
				<div id="alinks">
					<span><a href="mailto:<?=$email?>" id="<?=$username?>field2"><?=$email?></a></span><br>
				</div>
				<span id='<?=$username?>field4'><?=$content1?></span><br>
				<span id='<?=$username?>field5'><?=$content2?></span><br>
				<span id='<?=$username?>field6'><?=$content3?></span>
			</div>
		</div>
		<?php
				}
			}
		?>
	</div>
		<div class="row align-center">
			<h3 class="column role" style="text-align: center">Emeriti Faculty</h3>
		</div>
		<div class="row">
			<ul>
                <?php 
                    $myfile = file("../history/emerti.txt");
                    $i = 1;
                    foreach ($myfile as $line) {
                        if($i == 1){
                           $name = $line; 
                        }
                        if($i == 2){
                           $email = $line;
                        }
                        if($i == 3){
                            echo '<li>' . $name . ' || <a href= "mailto:' . $email . '">'. $email . '</a></li>';
                            $i = 0;
                        }
                        $i++;
                    }
                    ?>
            </ul>
			</div>
	<?php
		include"../footer.html";
	?>
    </main>
    <script src="../js/vendor/jquery.js"></script>
	<script src="../js/vendor/foundation.min.js"></script>
	<script src="../js/totop.js"></script>
  </body>
</html>
