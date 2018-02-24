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
             <img src="../../img/practicum.png">
             <h2>COMPUTER SCIENCE PRACTICUM</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../../img/line.svg"></div>


                
        <h3 class="purple"><center>Student Information Form For The Practicum:</center></h3><br>
        <form class="purple" action = "practicumstudentinfo.php" method = "post" enctype = "multipart/form-data">
		  <div class="row">
            <div class="large-3 medium-3 columns">
              <label>First Name</label>
              <input type="text" name= "FirstName" placeholder="First Name" required >
            </div>
			 <div class="large-3 medium-3 columns">
              <label>Last Name</label>
              <input type="text" name= "LastName" placeholder="Last Name" required >
            </div>
            <div class="large-3 medium-3 columns">
              <label>StudentID</label>
              <input type="text" name= "StudentID" placeholder="StudentID" required />
            </div>
			<div class="large-3 medium-3 columns">
              <label>Major/Option</label>
              <input type="text" name= "Major" placeholder="Major/Option" required />
            </div>
          </div>
		  <div class="row">
            <div class="large-4 medium-4 columns">
              <label>Local Address</label>
              <input type="text" name= "Address" placeholder="Address" required  />
            </div>
            <div class="large-4 medium-4 columns">
              <label>local Telephone</label>
              <input type="text" name= "TelehoneNum" placeholder="Telephone" required />
            </div>
			<div class="large-4 medium-4 columns">
              <label>Email Address</label>
              <input type="text" name= "Email" placeholder="Email" required />
            </div>
          </div>
		  <div class="row">
            <div class="large-4 medium-4 columns">
              <label>City</label>
              <input type="text" name= "SCity" placeholder="City" required />
            </div>
            <div class="large-4 medium-4 columns">
              <label>State</label>
              <input type="text" name= "SState" placeholder="State" required />
            </div>
			<div class="large-4 medium-4 columns">
              <label>Zip code</label>
              <input type="text" name= "SZip" placeholder="Zip" required />
            </div>
          </div>
          <div class="row">
            <div class="large-6 medium-6 columns">
              <label>Semester you expect to enroll in CS 491 </label>
              <select name= "Asemester" required >
                <option value="semester">Fall</option>
                <option value="semester">Spring</option>
                <option value="semester">Summer</option>
              </select>
            </div>
			<div class="large-6 medium-6 columns">
              <label>Year</label>
              <select name= "Ayear" required >
                <option value="year">2017</option>
                <option value="year">2018</option>
                <option value="year">2019</option>
				<option value="year">2020</option>
				<option value="year">2021</option>
				<option value="year">2022</option>
				<option value="year">2023</option>
				<option value="year">2024</option>
				<option value="year">2025</option>
				<option value="year">2026</option>
				<option value="year">2027</option>
				<option value="year">2028</option>
				<option value="year">2029</option>
              </select>
            </div>
          </div>
		  <div>
		  <div class="row">
            <div class="large-12 medium-12 columns">
		  <p>Please provide the information on the courses completed or expected to be completed before registering for 
the Practicum.  All prerequisites to these courses must be completed with a C grade or better. 
<underline>You must supply all relevant transcripts to verify that you have completed the courses and prerequisites with a C grade or better.  Either forward them directly or have the institution forward them.</underline>
		  </p>
		  </div>
		  </div>
		  <div class="row">
		  <div class="large-9 medium-9 columns">
          <div class="row">
            <div class="large-4 medium-3 columns">
              <label>Grade</label>
            </div>
            <div class="large-4 medium-3 columns">
              <label>Term</label>
            </div>
			<div class="large-4 medium-3 columns">
              <label>Course Title</label>
            </div>
          </div>
		  <div class="row">
            <div class="large-4 medium-3 columns">
              <input type="text" name= "341G" placeholder="Grade" required />
            </div>
            <div class="large-4 medium-3 columns">
              <input type="text" name= "341T" placeholder="Term" required />
            </div>
			<div class="large-4 medium-3 columns">
              <label>CS 341 Data Structures</label>
            </div>
          </div>
		   <div class="row">
            <div class="large-4 medium-3 columns">
              <input type="text" name= "375G" placeholder="Grade" required />
            </div>
            <div class="large-4 medium-3 columns">
              <input type="text" name= "375T" placeholder="Term" required />
            </div>
			<div class="large-4 medium-3 columns">
              <label>CS 375 Computer Systems</label>
            </div>
          </div>
		   <div class="row">
            <div class="large-4 medium-3 columns">
              <input type="text" name= "385G" placeholder="Grade" required />
            </div>
            <div class="large-4 medium-3 columns">
              <input type="text" name= "385T" placeholder="Term" required />
            </div>
			<div class="large-4 medium-3 columns">
              <label>CS 385 Applied Database Management Systems</label>
            </div>
          </div>
		  </div>
		  <div class="large-3 medium-3 columns">
              <p>Complete <strong>all</strong> of these courses</p>
            </div>
		  </div>
		  <div class="row"><img src="../../img/line.svg"></div>
		  <div class="row">
		  <div class="large-9 medium-9 columns">
		   <div class="row">
            <div class="large-4 medium-3 columns">
              <input type="text" name= "410G" placeholder="Grade" required />
            </div>
            <div class="large-4 medium-3 columns">
              <input type="text" name= "410T" placeholder="Term" required />
            </div>
			<div class="large-4 medium-3 columns">
              <label>CS 410 Software Engineering</label>
            </div>
          </div> 
		  <div class="row">
            <div class="large-4 medium-3 columns">
              <input type="text" name= "471G" placeholder="Grade" required />
            </div>
            <div class="large-4 medium-3 columns">
              <input type="text"name= "471T" placeholder="Term" required />
            </div>
			<div class="large-4 medium-3 columns">
              <label>CS 471 OO Design and Development</label>
            </div>
			 </div>
			 </div>
		  <div class="large-3 medium-3 columns">
              <p>Complete <strong>one</strong> of two courses</p>
            </div>
		  </div>
			 <div class="row"><img src="../../img/line.svg"></div>
			 <div class="row">
		  <div class="large-9 medium-9 columns">
			 <div class="row">
            <div class="large-4 medium-3 columns">
              <input type="text"name= "400aG" placeholder="Grade" required />
            </div>
            <div class="large-4 medium-3 columns">
              <input type="text" name= "400aT" placeholder="Term" required />
            </div>
			<!-- this is the courses that can  be choosen that are currently in the catolog 2017 needs updateing if list changes -->
			<div class="large-4 medium-3 columns">
              <select name= "400aC" required >
                <option value="400class">none</option>
                <option value="400class">CS 405 Operating Systems </option>
                <option value="400class">CS 411 Software Testing</option>
				<option value="400class">CS 413 Advanced Networking and Telecommunications</option>
				<option value="400class">CS 415 Principles of Programming Languages </option>
				<option value="400class">CS 420 Computer Architecture</option>
				<option value="400class">CS 423 Computer and Network Security</option>
				<option value="400class">CS 425 Numerical Analysis</option>
				<option value="400class">CS 430 Computer Graphics</option>
				<option value="400class">CS 433 Digital Image Processing</option>
				<option value="400class">CS 435 Theory of Computation</option>
				<option value="400class">CS 440 Theory of Algorithms </option>
				<option value="400class">CS 444 Human Computer Interaction</option>
				<option value="400class">CS 445 Artificial Intelligence</option>
				<option value="400class">CS 450 Compilers</option>
				<option value="400class">CS 465 Topics: Computing Theory</option>
				<option value="400class">CS 466 Topics: General Computing Applications</option>
				<option value="400class">CS 467 Topics: Information Systems Applications</option>
				<option value="400class">CS 472 Reusable Software Architectures </option>
				<option value="400class">CS 476 Distributed Systems: Concepts and Design </option>
				<option value="400class">CS 482 Internet/Web Architecture and Development </option>
				<option value="400class">CS 485 Database Systems Design </option>
				<option value="400class">CS 495 Computer Science Research Seminar </option>
              </select>
            </div>
          </div> 
		  <div class="row">
            <div class="large-4 medium-3 columns">
              <input type="text"name= "400bG" placeholder="Grade" required />
            </div>
            <div class="large-4 medium-3 columns">
              <input type="text" name= "400bT" placeholder="Term" required />
            </div>
			<!-- this is the courses that can  be choosen that are currently in the catolog 2017 needs updateing if list changes -->
			<div class="large-4 medium-3 columns">
			  <select name= "400bC" required >
                <option value="400class">none</option>
                <option value="400class">CS 405 Operating Systems </option>
                <option value="400class">CS 411 Software Testing</option>
				<option value="400class">CS 413 Advanced Networking and Telecommunications</option>
				<option value="400class">CS 415 Principles of Programming Languages </option>
				<option value="400class">CS 420 Computer Architecture</option>
				<option value="400class">CS 423 Computer and Network Security</option>
				<option value="400class">CS 425 Numerical Analysis</option>
				<option value="400class">CS 430 Computer Graphics</option>
				<option value="400class">CS 433 Digital Image Processing</option>
				<option value="400class">CS 435 Theory of Computation</option>
				<option value="400class">CS 440 Theory of Algorithms </option>
				<option value="400class">CS 444 Human Computer Interaction</option>
				<option value="400class">CS 445 Artificial Intelligence</option>
				<option value="400class">CS 450 Compilers</option>
				<option value="400class">CS 465 Topics: Computing Theory</option>
				<option value="400class">CS 466 Topics: General Computing Applications</option>
				<option value="400class">CS 467 Topics: Information Systems Applications</option>
				<option value="400class">CS 472 Reusable Software Architectures </option>
				<option value="400class">CS 476 Distributed Systems: Concepts and Design </option>
				<option value="400class">CS 482 Internet/Web Architecture and Development </option>
				<option value="400class">CS 485 Database Systems Design </option>
				<option value="400class">CS 495 Computer Science Research Seminar </option>
              </select>
            </div>
          </div>
		  </div>
		  <div class="large-3 medium-3 columns">
              <p>Complete <strong>two</strong> of 400-level classes except CS 490</p>
            </div>
		  </div>
		  <div class="row"><img src="../../img/line.svg"></div>
		  <div class="row">
            <div class="large-5 medium-5 columns">
              <p>Please e-mail:<br>	
			Mingrui Zhang, Practicum Coordinator<br>
			Department of Computer Science<br>
			Winona State University<br>
			MZahg@winona.edu<br>
			Winona, MN 55987 </p>
            </div>
            <div class="large-5 medium-5 columns">
			<label>For coordination use only:</label><br>
			<label>Received on:</label>
              <input type="text" name= "recived"  /><br>
			  <label>Action:</label>
              <input type="text" name= "action"  />
            </div>
          </div>

        </form>
    

      <div class="large-4 medium-4 columns">

		<center><input class="button button-purple" onclick="function()" type="submit" name="submit" value="Submit"></center>

      </div>
<br>
  <br>
  <br>
  
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
