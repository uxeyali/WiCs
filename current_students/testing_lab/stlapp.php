<?php
 $path="../../";
  include $path.'head1.html';
 ?>

<link rel="stylesheet" href="css/app.css">

<?php
    include $path.'head2.html';
    ?>
	<main>
  

	<!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 large-centered columns">
             <img src="../../img/testing-lab.png">
             <h2>SOFTWARE TESTING AND DEVELOPMENT LAB</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../../img/line.svg"></div>
	
	<h3 class="purple"><center>Application form for the Software Testing Lab:</center></h3><br>
	<form class="purple" action = "stlconfirmation.php" method = "post" enctype = "multipart/form-data">

	<fieldset>
	
	<div class="row">
        <legend>Personal Information</legend>
		<div class="large-4 columns">
				<label> First Name: 
					<input type = "text" name = "firstName"  id = "firstName" required>
				</label>
			
		</div>
		<div class="large-4 columns">
			
				<label> Last Name: 
					<input type = "text" name = "lastName" id = "lastName" required>
				</label>
			
		</div>
        <div class="large-4 columns">
			
				<label> ID Number: 
					<input type = "text" name = "ID" id = "ID" size="8" required>
				</label>
			
		</div>
	</div>
	
	<div class="row">
		<div class="large-8 columns">
			
				<label> Address: 
					<input type = "text" name = "address" id = "address" required>
				</label>
			
		</div>
		<div class="large-4 columns">
			
				<label> Phone Number: 
					<input type = "tel" name = "phoneNumber" id = "phoneNumber" required>
				</label>
			
		</div>
	</div>
	
	<div class="row">
		<div class="large-4 columns">
			
				<label> City: 
					<input type = "text" name = "city" id = "city" required>
				</label>
			
		</div>
		<div class="large-2 columns">
			
				<label> State: 
					<input type = "text" name = "state" id = "state" required>
				</label>
			
		</div>
		<div class="large-3 columns">
			
				<label> Zip Code: 
					<input type = "text" name = "zipCode" id = "zipCode" required>
				</label>
			
		</div>
		<div class="large-3 columns">
            
            <label>Date of Birth:
					<input type="date" name = "DOB" id = "DOB" required>
            </label>
		</div>	
	</div>
	
	<div class="row">
		<div class="large-4 columns">
			
				<label> Country of Citizenship: 
					<input type = "text" name = "citizenship" id = "citizenship" required>
				</label>
			
		</div>
		<div class="large-8 columns">
			
				<label> Email: 
					<input type = "email" id = "email" name = "email" required>
				</label>
			
		</div>
	</div>
	
	<div class="row">
		<div class="large-3 columns">
			
				<label> Majors: 
					<input type = "text" id = "majors" name = "majors" required>
				</label>
			
		</div>
		<div class="large-3 columns">
			
				<label> Minors: 
					<input type = "text" id = "minors" name = "minors">
				</label>
			
		</div>
		<div class="large-3 columns">
			
				<label> Graduation Date: 
					<input type="date" name = "graduationDate" id = "graduationDate" required>
				</label>
		</div>
        <div class="large-3 columns">
			
				<label> Current Date: 
					<input type = "date" name = "todayDate" id = "todayDate" required>
				</label>
			
		</div>
	</div>

	</fieldset>
	
	<fieldset>
	
	<div class="row">
            <legend>Work Availability</legend>
    </div>
    <div class="row">
		<div class="large-4 columns">
				<label> 
					<input type = "checkbox" id = "workSummers" name = "workSummers">
					I can work summers. 
				</label>
		</div>
    </div>
    <div class="row">
		<div class="large-8 columns">
				<label> 
					<input type = "checkbox" id = "workDuringYear" name = "workDuringYear">
					I can work 15 to 20 hours per week during the school year
				</label>
		</div>
	</div>
	
	<div class="row">
		<div class="large-4 columns">
				<label> 
					<input type = "checkbox" id = "workOnCampusCurrently" name = "workOnCampusCurrently">
					I currently work on campus.
				</label>
		</div>
    </div>
    <div class="row">
		<div class="large-8 columns">
				<label> 
					<input type = "checkbox" id = "workOnCampusBefore" name = "workOnCampusBefore">
					I have previously worked on campus.
				</label>
                <label> 
					Where and when?
					<input type = "text" id = "wwOnCampus" name = "wwOnCampus">
				</label>
		</div>
		
	</div>
	
	<div class="row">
		<div class="large-8 columns">
				<label> 
					<input type = "checkbox" id = "Practicum" name = "Practicum">
					I am planning to do the Practicum
				</label>
                <label> 
					When and how long?
					<input type = "text"  id = "PracHowLong" name = "PracHowLong">
				</label>
		</div>
	</div>
	
	<div class="row">
        <legend>Activities Participated in and Time Spent:</legend>
		<div class="large-12 columns">
			
				<div id = "activity" name = "activity"> 
                <br>
                <input type = "text" name = "activity1" id = "activity1" placeholder = "Activity">
                <input type = "text" name = "timeSpent1" id = "timeSpent1" placeholder = "Time (in minutes) per week">
                <br>
                <input type = "text" name = "activity2" id = "activity2" placeholder = "Activity">
                <input type = "text" name = "timeSpent2" id = "timeSpent2" placeholder = "Time (in minutes) per week">
                <br>
                <input type = "text" name = "activity3" id = "activity3" placeholder = "Activity">
                <input type = "text" name = "timeSpent3" id = "timeSpent3" placeholder = "Time (in minutes) per week">
                <br>
                <input type = "text" name = "activity4" id = "activity4" placeholder = "Activity">
                <input type = "text" name = "timeSpent4" id = "timeSpent4" placeholder = "Time (in minutes) per week">
                <br>
                <input type = "text" name = "activity5" id = "activity5" placeholder = "Activity">
                <input type = "text" name = "timeSpent5" id = "timeSpent5" placeholder = "Time (in minutes) per week">
				</div>
			
		</div>

	</div>
	</fieldset>
	
	<fieldset>
	
	<div class="row">
        <legend>Classes Taken</legend>
		<div class="large-12 columns">
				<label> 
					List all CS and Math Courses you have taken or attempted
                </label>
				<div id = "classesTaken" name = "classesTaken">

                <select id="classType" name = "classType">
					<option>CS</option>
					<option>Math</option>
                    </select>
                <input type = "text" name = "course" placeholder = "class number">
                <input type = "text" name = "className" placeholder = "class name">
                    <label> Term: </label>
                <select id = "term" name = "term">
					<option>Fall</option>
					<option>Spring</option>
					<option>Summer</option>
                </select>
                <label> Grade: </label>
                <select id = "grade" name = "grade">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>F</option>
                    </select>
                <input type = "text" name = "instructor" id = "instructor" placeholder = "instructor's name">
                <label> Retake:</label> 
                <select id = "retake" name = "retake">
                    <option>No</option>
                    <option>Yes</option>
                </select>
                <hr>

                <select id="classType2" name = "classType2">
					<option>CS</option>
					<option>Math</option>
                    </select>
                <input type = "text" name = "course2" placeholder = "class number">
                <input type = "text" name = "className2" placeholder = "class name">
                    <label> Term: </label>
                <select id = "term2" name = "term2">
					<option>Fall</option>
					<option>Spring</option>
					<option>Summer</option>
                </select>
                <label> Grade: </label>
                <select id = "grade2" name = "grade2">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>F</option>
                    </select>
                <input type = "text" name = "instructor2" id = "instructor2" placeholder = "instructor's name">
                <label> Retake:</label> 
                <select id = "retake2" name = "retake2">
                    <option>No</option>
                    <option>Yes</option>
                </select>
                <hr>

                <select id="classType3" name = "classType3">
					<option>CS</option>
					<option>Math</option>
                    </select>
                <input type = "text" name = "course3" placeholder = "class number">
                <input type = "text" name = "className3" placeholder = "class name">
                    <label> Term: </label>
                <select id = "term3" name = "term3">
					<option>Fall</option>
					<option>Spring</option>
					<option>Summer</option>
                </select>
                <label> Grade: </label>
                <select id = "grade3" name = "grade3">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>F</option>
                    </select>
                <input type = "text" name = "instructor3" id = "instructor3" placeholder = "instructor's name">
                <label> Retake:</label> 
                <select id = "retake3" name = "retake3">
                    <option>No</option>
                    <option>Yes</option>
                </select>
                <hr>

                <select id="classType4" name = "classType4">
					<option>CS</option>
					<option>Math</option>
                    </select>
                <input type = "text" name = "course4" placeholder = "class number">
                <input type = "text" name = "className4" placeholder = "class name">
                    <label> Term: </label>
                <select id = "term4" name = "term4">
					<option>Fall</option>
					<option>Spring</option>
					<option>Summer</option>
                </select>
                <label> Grade: </label>
                <select id = "grade4" name = "grade4">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>F</option>
                    </select>
                <input type = "text" name = "instructor4" id = "instructor4" placeholder = "instructor's name">
                <label> Retake:</label> 
                <select id = "retake4" name = "retake4">
                    <option>No</option>
                    <option>Yes</option>
                </select>
                <hr>
            
			</div>
		</div>
	</div>
	</fieldset>
	
	<fieldset>
	<div class="row">
        <legend>List other CS or special skills you may have, i.e., PSs, Java, etc. Where did you get these skills? Rate your skills on a scale of 1 to 5 (5 being the strongest).</legend>
	<div class="large-12 columns">
			<div id = "additionalSkills" name = "additionalSkills">
            <input type = "text" id = "skill1" name = "skill1" placeholder = "additional skills">
            <select id = "rating1" name = "rating1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <br>
            <input type = "text" id = "skill2" name = "skill2" placeholder = "additional skills">
            <select id = "rating2" name = "rating2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <br>
            <input type = "text" id = "skill3" name = "skill3" placeholder = "additional skills">
            <select id = "rating3" name = "rating3">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <br>
            <input type = "text" id = "skill4" name = "skill4" placeholder = "additional skills">
            <select id = "rating4" name = "rating4">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <br>
            <input type = "text" id = "skill5" name = "skill5" placeholder = "additional skills">
            <select id = "rating5" name = "rating5">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <br>
            
		</div>
	</div>
	</div>
	</fieldset>
	
	<div class="row">
		
		<div class="large-12 columns">
			
            <input class="button button-purple" onclick="function()" type="submit" name="submit" value="Submit">
			
		</div>
		
		 
	</div>
	
    </form>
    
<?php
      include "../../footer.html";
     ?>
	 
	 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

   <!--
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/dist/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
-->
