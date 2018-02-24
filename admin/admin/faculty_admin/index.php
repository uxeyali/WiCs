	<?php
		$path = '../../';
		include '../../admin_head1.html';
	?>
	<script src='../../../jquery.js' type='text/javascript'></script>
	
	<?php 
		include '../../admin_head2.html';
	?>
	<link rel='stylesheet' href='../../../faculty/css/index.css'>
	<!-- BANNER SECTION -->
    <div class="banner row">
        <div class="image large-12 large-centered columns">
            <a href="../../index.php"><img src="<?=$path?>../img/faculty.png"></a>
            <h2>FACULTY ADMIN PAGE</h2>
        </div>
    </div>
    <!-- DIVIDER -->
    <div class="row"><img src="<?=$path?>../img/line.svg"></div>
	<main>
		<div class="row small-6 medium-5 large-4">
			<a id="office_button" href="facform.php" class="button large expanded">NEW FACULTY MEMBER</a>
		</div>
		<div class="row small-6 medium-5 large-4">
			<a id="office_button" href="faculty1.php" class="button large expanded">FACULTY CONTACT INFO EDITOR</a>
		</div>
		<div class="row small-6 medium-5 large-4">
			<a id="office_button" href="faculty_editor/fac_editor.php" class="button large expanded">FACULTY PAGE EDITOR</a>
		</div>
	</main>
	<div class="row"><img src="<?=$path?>../img/line.svg"></div>
	<br>
		<?php
			include'../../admin_footer.html';
		?>
	</body>
</html>