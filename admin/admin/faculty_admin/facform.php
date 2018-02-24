<?php
		$path = "../../";
		include $path ."admin_head1.html";
    ?>
	<?php
		include $path ."admin_head2.html";
	?>
		<div class="off-canvas-wrapper">
		<div class="row small-6 medium-5 large-4">
			<a id='office_button' href='index.php' class='button large expanded'>Back to admin page</a>
		</div>
		
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				<h2>Personal Information</h2>
				<form action = "facsubmit.php" method = "POST" enctype='multipart/form-data'>
					<div class="row">
						<div class="large-3 columns">
							<label>First Name</label>
							<input type="text" name = "fname"/>
						</div>
						<div class="large-3 columns">
							<label>Last Name</label>
							<input type="text" name = "lname"/>
						</div>  
						<div class="large-3 columns">
							<label>Nickname</label>
							<input type="text" name = "nickname"/>
						</div>
						<div class="large-3 columns">
							<label>Personal Website Address</label>
							<input type="text" name = "personal_site"/>
						</div> 						
					</div>
					<div class="row">
						<div class="large-6 columns">
							<label>Username</label>
							<input type="text" name = "username"/>
						</div>
						<div class="large-6 columns">
							<label>Faculty or staff</label>
							<input type="radio" name="role" value="faculty" id="facultyradio"><label for="facultyradio">Faculty</label>
							<input type="radio" name="role" value="staff" id="staffradio"><label for="staffradio">Staff</label>
						</div>
					</div>
					<div class="row">
						<div class="large-6 columns">
							<label>Upload Your Photo:</label>
							<input type='file' name='fileToUpload' id='fileToUpload' accept='image/*' style='margin: auto;' required><br>
						</div>
						<div class="large-6 columns">
							<label>Favorite Quote</label>
							<input type = 'text' name="quote"></textarea>
						</div>
					</div>
					<div class = "row">
						<div class="large-12 columns">
							<label>Short biography</label>
							<textarea class = 'textbox' name="bio"></textarea>
						</div>
					</div>
					<h2>Contact Information</h2>
					<div class="row">
						<div class="large-6 columns">
							<label>Email Address</label>
							<input type="text" name = "email"/>
						</div>

						<div class="large-6 columns">
							<label>Phone Number (work)</label>
							<input type="text" name = "phone"/>
						</div>  
					</div>
					<div class="row">
						<div class="large-6 columns">
							<label>Building and office number</label>
							<input type="text" name = "office"/>
						</div>
					</div>
					
					<div class="row">
						<div class="large-12 columns">
							<input class='button large expanded' type="submit" value="Create Page">
						</div>
					</div>
				</form>
			</div>
		</div>
	<?php
		include $path ."admin_footer.html";
	?>
    </main>

</body>