	<!--Navigation is being imported from 'nav.html'-->
    <?php
        $path = "../../../";
        include "../../../admin_head1.html";
    ?>
	<link rel="stylesheet" href="../../../../faculty/css/index.css">
	<?php
		include "../../../admin_head2.html";
	?>
	<main>
			<div class="off-canvas-wrapper">
				<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				<div class="row">
					<div class="small-6 small-centered text-center columns">
					<br>
						<a href="../index.php" id='office_button' class='button large expanded'>FACULTY ADMIN PAGE</a>
					</div>
				</div>
					<h2 style="text-align: center">Select a professor</h2>
					<div class="row small-12 medium-6 large-4">
					<select id="selector" name="users">
						<option value="">Select a Professor:</option>
						<?php
							$config = parse_ini_file('../../../config.ini');
							$username = $config['username'];
							$password = $config['password'];
							$db = $config['dbname'];
							// needed because pdo throws a error
							$password = $password . "$";
							$db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
							$_query = $db->query("SELECT * FROM `university`.`faculty` WHERE `role` = 'faculty' ORDER BY name;");
							foreach($_query as $_stat){
								$name = $_stat['name'];
								$username = $_stat['username'];
						?>
						<option value="<?=$username?>"><?=$name?></option>
						<?php
							}
						?>
					</select>
					</div>

					<div class="row" id="currentLayout">
					</div>

      				
				</div>
			</div>		
	<?php
		include"../../../admin_footer.html";
	?>
    </main>
	<script src="fac_editor.js" type="text/javascript"></script>
	
  </body>
</html>