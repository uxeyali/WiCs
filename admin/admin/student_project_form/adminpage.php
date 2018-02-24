<?php
  $path = "../../";
  include '../../admin_head1.html';
?>
<link rel="stylesheet" href="../../../css/app.css">
<?php
  include '../../admin_head2.html';
?>
  

<h3>Student Project Admin Page</h3>

<a href="AdminHome.php" class="button">Return to Home</a>

  <form action= "FormResponse.php" method="post">
    <div class="row">
    <div class="large-12 columns">
  
  <?php
     $config = parse_ini_file('../../config.ini');
     $username = $config['username'];
     $password = $config['password'];
     $db = $config['dbname'];
     // needed because pdo throws a error
     $password = $password . "$";
     $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
     $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $rows = $db -> query("SELECT * FROM project");
    
    $idkey = rand (1000, 9999);
    $num = 0;
    foreach ($rows as $row) {
      if ($row["ProjectID"] != $idkey) {
        $num = $idkey;
      } 
      else {
        $idkey = rand(1000, 9999);
      }
      
    }

  ?>
    <?php
      print("<input type=\"hidden\" name=\"id\" value=\"$num\">");
    ?>
      
      <h4>Title</h4>
        <input type="text" name="title" placeholder="Project Title" />

      </div>
    </div>

   <div class="row">

  <h4>What type of project is this?</h4>
    <select name="project-type">
      <option value="Mobile">Mobile Project</option>
      <option value="Hardware">Hardware Project</option>
      <option value="Software">Software Project</option>
      <option value="Web">Web Technology Prject</option>
    </select>
   </div>


   <div class="row">
    <div class="large-4 columns">
        <h4>Student(s) involved</h4>
      <input type="text" name="students" placeholder="Student Name"  />
       </div>
   </div>

   <div class="row">
    <div class="large-4 columns">
        <h4>Advisors involved</h4>
      <input type="text" name="advisors" placeholder="Advisors' Names" />
       </div>
   </div>

    <hr>

    <div class="row">
       <div class="large-4 columns">
        <h4>Abstract</h4>
       </div>
    </div>

  <div class="row">
    <textarea rows = "5" cols="50" name="abstract-text">Section content here</textarea>
  </div>

   <div class="row">
       <div class="large-4 columns">
        <h4>Introduction</h4>
       </div>
    </div>

  <div class="row">
    <textarea rows = "5" cols="50" name="intro-text">Section content here</textarea>
  </div>

   <div class="row">
       <div class="large-4 columns">
        <h4>Hypothesis</h4>
       </div>
    </div>

  <div class="row">
    <textarea rows = "5" cols="50" name="hypo-text">Section content here</textarea>
  </div>

   <div class="row">
       <div class="large-4 columns">
        <h4>Testing</h4>
       </div>
    </div>

  <div class="row">
    <textarea rows = "5" cols="50" name="testing-text">Section content here</textarea>
  </div>

   <div class="row">
       <div class="large-4 columns">
        <h4>Conclusion</h4>
       </div>
    </div>

  <div class="row">
    <textarea rows = "5" cols="50" name="conclusion-text">Section content here</textarea>
  </div>

    </div>
<div class="row">
  <button class="small button" name="submit" type="submit">Submit </button>
</div>
</form>

<?php
  include $path."admin_footer.html";
?>
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/dist/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
    <script src="/../../js/app.js"></script>
  </body>

</html>