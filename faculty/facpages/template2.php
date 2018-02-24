	<?php
		$user = $_GET['username'];
		$path = '../../';
		include '../../head1.html';
		
	?>
	<script src='../jquery.js' type='text/javascript'></script>
	
	<?php 
		include '../../head2.html';
	?>
	<link rel='stylesheet' href='../css/index.css'>
		<main id="ajax">
		<?php
		$config = parse_ini_file('../../admin/config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        // needed because pdo throws a error
        $password = $password . "$";
        $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
		$_query = $db->query('SELECT faculty.personal_site, faculty.template_num, faculty.name as name1, faculty.email, faculty.username as username1, faculty.address, faculty.content1, faculty.content2, faculty.content3, faculty.img_source, faculty.bio, faculty.quote FROM university.`faculty` where faculty.username = "'.$user.'";');
		foreach($_query as $_stat)
		{
			$name = $_stat['name1'];
			$email = $_stat['email'];
			$username = $_stat['username1'];
			$address = $_stat['address'];
			$content1 = $_stat['content1'];
			$content2 = $_stat['content2'];
			$content3 = $_stat['content3'];
			$img_source = $_stat['img_source'];
			$bio = $_stat['bio'];
			$quote = $_stat['quote'];
			$template_num = $_stat['template_num'];
			$personal_site = $_stat['personal_site'];
		}
		$_query = $db->query('SELECT faculty.personal_site FROM university.faculty WHERE faculty.username = "'.$user.'";');
			foreach($_query as $_stat){
				$string = $_stat['personal_site'];
			}
	?>
	
	<!-- BANNER SECTION -->
     <div class='banner row'>
         <div class='image large-12 large-centered columns'>
             <a href="../index.php"><img src='../../img/faculty.png'></a>
             <h2 id='name'><?=$name?></h2>
         </div>
     
     <!-- DIVIDER -->
     <hr class='line'>
	 <h6><div id='quote'><?=$quote?></div></h6>
	 </div>
<!--Do not delete anything before this-->
	<br>
	
		<div class='row'>
			<div id='fac' class='medium-6 columns'>
				<p style="text-align: center;"><img class='thumbnail centered' id='<?=$username?>' src='../../Faculty/img/<?=$img_source?>'></p>
				<div class='row small-up-12'>
					<div class='column'>
						<p style="text-align: center;">
							<a href='mailto:<?=$email?>' id='<?=$username?>field2'><?=$email?></a><br>
							<?=$content1?><br>
							<?=$content2?><br>
							<?=$content3?>
						</p>
					</div>
				</div>
			</div>
			<div class='medium-6 large-5 columns'>
				<h3>Biography</h3>
				<p><?=$bio?></p>
				<a id='office_button' href='../../faculty_hours/' class='button large expanded'>FACULTY OFFICE HOURS</a>
			</div>
		</div>
		<div id="tab">
		<div class='column row'>
			<hr class='line'>
			<br>
			<ul class='tabs' data-tabs id='example-tabs'>
				<li class='tabs-title is-active'><a href='#panel1' aria-selected='true'>Office Hours</a></li>
				<li class='tabs-title'><a href='#panel2'>Courses</a></li>
				<li class='tabs-title'><a href='#panel3'>Awards / Publications</a></li>
				<?php
				if($string == ""){
					
				}else{
				?>
				<li class='tabs-title'><a href='#panel4'>Personal Site</a></li>
				<?php
				}
				?>
				
			</ul>
			<div class='tabs-content' data-tabs-content='example-tabs'>
				<div class='tabs-panel is-active' id='panel1'>
					<div style='overflow-y: scroll; height: 350px;'>
					<div id='main'>
					</div>
				</div>
				</div>
				<div class='tabs-panel' id='panel3'>
				<h4>Selected Awards / Publications</h4>
				<?php
				
					$_query = $db->query('SELECT DISTINCT awards.name as name1, awards.description FROM university.`faculty`,university.`awards` where faculty.username = "'.$user.'" AND awards.username="'.$user.'";');
					foreach($_query as $_stat){
						$award_name = $_stat['name1'];
						$award_description = $_stat['description'];
				?>
					<div class='media-object stack-for-small'>
						
						<div class='media-object-section'>
							<h5><?=$award_name?></h5>
							<p><?=$award_description?></p>
						</div>
					</div>
				<?php
					}
				?>
				</div>
				<div class='tabs-panel' id='panel2'>
				<h4>Current Courses</h4>
					<div class='row medium-up-3'>
				<?php
					$_query = $db->query('SELECT DISTINCT courses.course_type_number, courses.name as name2, courses.description FROM university.`faculty`,university.`courses` where faculty.username = "'.$user.'" AND courses.username="'.$user.'";');
					foreach($_query as $_stat){
						$course_name = $_stat['name2'];
						$course_description = $_stat['description'];
						$course_type = $_stat['course_type_number'];
				?>
						<div class='column'>
							<h5><?=$course_type?></h5>
							<p><?=$course_name?></p>
							<p><?=$course_description?></p>
						</div>
				<?php
					}
				?>
					</div>
				</div>
				<?php
				
				if($string != ""){
					include "personal_site.php";
				}else{
					
				}	
				?>
			</div>
			<?php
				include "faculty/$username.php";
			?>
		</div>
		</div>
	<input type="hidden" name="profname" value="<?=$username?>" id="pname">
	</main>
		<?php
		$path = '../../';
			include'../../footer.html';
		?>
		<script src='../../js/vendor/what-input.js'></script>
		<script src='../../js/vendor/foundation.js'></script>
		<script src='../../js/vendor/foundation.min.js'></script>
		<script src='../../js/app.js'></script>
		<script src='../js/tableFunctions.js'></script>
		<script type="text/javascript"></script>
	</body>
</html>
