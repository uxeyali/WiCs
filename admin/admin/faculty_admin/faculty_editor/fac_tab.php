	<!--Navigation is being imported from 'nav.html'-->
    <?php
		$key = $_GET['q'];
        $path = "../../../";
        include "../../../admin_head1.html";
    ?>
	<link rel="stylesheet" href="../../../../faculty/css/index.css">
	<?php
		include "../../../admin_head2.html";
	?>
	<main>
	<br>
	<div id="editing" class="row">
		<div class="small-6 small-centered text-center columns">
			<a href="../index.php" id='office_button' class='button large expanded'>FACULTY ADMIN PAGE</a>
		</div>
		<div class="small-6 small-centered text-center columns">
			<a href="fac_editor.php" id='office_button' class='button large expanded'>SELECT A PROFESSOR</a>
		</div>
	</div>
	<form action = "fac_course_award_edit_submit.php" method="get" enctype="multipart/form-data">
	<input type="text" id="user" name="user" value="<?=$key?>" style="text-align: center" readonly>
	<div id="tab" class='column row'>
		<hr class='line'>
		<br>
		
		<ul class='tabs' data-tabs id='example-tabs'>
			<li class='tabs-title is-active'><a href='#panel1' aria-selected='true'>Courses</a></li>
			<li class='tabs-title'><a href='#panel2'>Awards / Publications</a></li>
		</ul>
		<div class='tabs-content' data-tabs-content='example-tabs'>
			<div class='tabs-panel is-active' id='panel1'>
			<h4>Courses</h4>
			<div class='row medium-up-3'>
			<?php
				$config = parse_ini_file('../../../config.ini');
				$username = $config['username'];
				$password = $config['password'];
				$db = $config['dbname'];
				// needed because pdo throws a error
				$password = $password . "$";
				$db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
				$_query = $db->query('SELECT courses.course_type_number, courses.num, faculty.username as username1, courses.name, courses.description FROM university.courses, university.faculty where courses.username="'.$key.'" AND faculty.username ="'.$key.'";');
				foreach($_query as $_stat){
					$username= $_stat['username1'];
					$num = $_stat['num'];
					$course_name = $_stat['name'];
					$course_description = $_stat['description'];
					$course_type = $_stat['course_type_number'];
			?>
					<div class='column'>
						<input id="course_type<?=$num?>" type="text" value="<?=$course_type?>" name="course_type<?=$num?>"><br>
						<input id="course_name<?=$num?>" type="text" value="<?=$course_name?>" name="course_name<?=$num?>"><br>
						<textarea id="course_description<?=$num?>" rows="3" name="course_description<?=$num?>" style="text-align: center"><?=$course_description?></textarea>
						<a href="fac_course_award_edit_submit.php?num=<?=$num?>&username=<?=$username?>&action=course" id='office_button' class='button' name="remove_course">remove</a>
					</div>
			<?php
				}
			?>
			<div class="row">
			<div class="small-6 small-centered text-center columns">
					<a href="fac_course_award_edit_submit.php?message=course&username=<?=$key?>" id='office_button' class='button' name="add">Add Course</a>
				</div>
			</div>
			</div>
			</div>
			<div class='tabs-panel' id='panel2'>
			<h4>Awards / Publications</h4>
				
			<?php
				$_quer = $db->query('SELECT awards.num as num1, faculty.username as username1, awards.name, awards.description FROM university.awards, university.faculty WHERE awards.username="'.$key.'" AND faculty.username = "'.$key.'";');
				foreach($_quer as $_stat){
					$_username = $_stat['username1'];
					$_num = $_stat['num1'];
					$award_name = $_stat['name'];
					$award_description = $_stat['description'];
			?>
					
				<div class='media-object stack-for-small'>
					<div class='media-object-section'>
						<input id="award_name<?=$_num?>" type="text" value="<?=$award_name?>" name="award_name<?=$_num?>"><br>
						<textarea id="award_description<?=$_num?>" rows="3" name="award_description<?=$_num?>" style="text-align: center"><?=$award_description?></textarea>
						<a href="fac_course_award_edit_submit.php?nums=<?=$_num?>&username=<?=$_username?>&action=award" id='office_button' class='button' name="remove_award">remove</a>
					</div>
				</div>
			<?php
				}
			?>
				
					<div class="small-6 small-centered text-center columns">
						<br>
							<a href="fac_course_award_edit_submit.php?message=award&username=<?=$key?>" id='office_button' class='button' name="add">Add Award / Publication</a>
					</div>
				
				</div>
				<div id="editing" class="row">
				<div class="small-6 small-centered text-center columns">
					<button id='office_button' class='button' type="submit" name="submit">SUBMIT CHANGES</button>
				</div>
			</div>
			</div>
			
		</div>
		</div>
	</div>
	</form>
	<br>
	<?php
		include"../../../admin_footer.html";
	?>
	<script>
		$(document).foundation();
    </script>
    </main>
	
  </body>
</html>