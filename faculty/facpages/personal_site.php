
<?php
$_query = $db->query('SELECT faculty.template_num, faculty.personal_site FROM university.faculty WHERE faculty.username = "'.$user.'";');
foreach($_query as $_stat){
	$personal_site = $_stat['personal_site'];
	$template_num = $_stat['template_num'];
	?>
	
	<?php
	if($template_num == "1"){
	?>
	<div class='row column'>
		<h4 style='margin: 0;' class='text-center'>PERSONAL SITE</h4>
	</div>
	<div class='row column'>
		<h3 style="text-align: center"><a target="_blank" href="<?=$personal_site?>"><?=$name?>'s Personal Website</a></h3>
	</div>
	<?php
	}
	?>
	
	
	<?php
	if($template_num == "2"){
	?>
	<div class='tabs-panel' id='panel4'>
		<h4>Personal Site</h4>
		<div class='row medium-up-3'>
			<div class='column'>
				<a target="_blank" href="<?=$personal_site?>"><?=$name?>'s Personal Website</a>
			</div>
		</div>
	</div>
	<?php
	}
	?>
	
	
	<?php
	if($template_num == "3"){
	?>
	<div class='row column'>
		<h4 style='margin: 0;' class='text-center'>PERSONAL SITE</h4>
	</div>
	<div class='row column'>
		<h3 style="text-align: center"><a target="_blank" href="<?=$personal_site?>"><?=$name?>'s Personal Website</a></h3>
	</div>
	<?php
	}else{
		
	}
	?>
		
<?php
}
?>
	