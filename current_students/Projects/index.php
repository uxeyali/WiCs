<?php 
	$path = "../../";
	include $path.'head1.html';
?>
<link rel="stylesheet" href="css/projects.css">
<?php 
	include $path.'head2.html';
?>

<!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 large-centered columns">
             <img src="img/research.png">
             <h2>Research Projects</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../../img/line.svg"></div>
<!-- END BANNER SECTION -->
<div class="row">
<p>Welcome to the research page! Here you can find all sorts of projects done by the students of Winona state. With the assistance faculty and staff,
students conduct research in various computer science topics. These projects range from mobile applications to hardware analysis. These students also have oppurtunities
to present their work and make it known to fellow students, and to the rest of the world! </p>
</div>

<main>
<!-- DATABASE SETUP AND CREDENIALS -->
    <?php

                //Here is the entry for the database credentials
               $config = parse_ini_file('../../admin/config.ini');
               $username = $config['username'];
               $password = $config['password'];
               $db = $config['dbname'];
               // needed because pdo throws a error
               $password = $password . "$";
               $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
               $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               $rows = $db -> query("SELECT * FROM project");
   ?>
<!-- DATABASE SETUP AND CREDENIALS END -->


 <!-- This generates the project card, and links it to a coresponding Foundation Modal -->

<?php
  $count = 1;
  $currentmodal = '"' . "animatedmodal . $count" . '"' ;

  foreach ($rows as $row) {
    $currentmodal = '"' . "animatedmodal" . $count . '"';
  //echo $currentmodal;
  ?>


<div class="large-3 medium-4 columns">
  <div class="card">

  <?php
        print("<a data-open=" . $currentmodal . ">");
  ?>

  <div class="card-section">
    <?php
      if ($row["ProjectType"] == 'Hardware'){
        print('<img src="img/board.jpg">');
      }
       if ($row["ProjectType"] == 'Software'){
        print('<img src="img/code.jpg">');
      }
       if ($row["ProjectType"] == 'Mobile'){
        print('<img src="img/mobile.jpg">');
      }
       if ($row["ProjectType"] == 'Web'){
        print('<img src="img/web.jpg">');
      }
      
      ?>
    </div>
    
    <div class="card-section">
  
      <h5> <?= $row["Title"] ?></h5>

      <?php
        print("<a data-open=" . $currentmodal . '>Read More <i class="fa fa-chevron-right"></i></a>');
      ?>
<?php
  print("</a>");
?>
    </div>
  </div>
</div>

<!-- Card END -->

<!-- This is the corresponding modal  --> 

<?php

  print("<div class=\"reveal\" id= ". $currentmodal ." data-reveal  data-close-on-click=\"true\" data-overlay=\"false\">");

?>

    <h1> <?= $row["Title"] ?> </h1>
    <h3> By: <?= $row["Students"] ?> </h3>
    <h3> Advisors: <?= $row["Advisors"] ?> </h3>

     <div class="row"><img src="../../img/line.svg"></div>

   <!-- <h3>Abstract</h3>
      <p> <?= $row["Abstract"] ?> </p>

    <h3>Hypothesis</h3>
      <p> <?= $row["Hypothesis"] ?> </p>

    <h3>Introduction</h3>
      <p> <?= $row["Introduction"] ?> </p>

    <h3>Testing</h3>
      <p> <?= $row["Testing"] ?> </p>

    <h3>Conclusion</h3>
-->
<h3 class="purple">Abstract</h3>
      <p> <?= $row["Abstract"] ?> </p>

<h3 class="orange">Hypothesis</h3>
      <p> <?= $row["Hypothesis"] ?> </p>

<h3 class="green">Introduction</h3>
      <p> <?= $row["Introduction"] ?> </p>

<h3 class="teal">Testing</h3>
      <p> <?= $row["Testing"] ?> </p>

<h3 class="purple">Conclusion</h3>
      <p> <?= $row["Conclusion"] ?> </p>

<button class="close-button" data-close aria-label="Close reveal" type="button">
  <span aria-hidden="true">&times;</span>
  </button> 
 
</div>
<!-- Modal END -->

<?php
  $count++;
  }
 ?>



  <large-12 class="columns"></large-12>
  
  

  <!-- | Footer Section | -->

<?php
  include $path."footer.html"
?>

<!--  Footer Ends here-->
    <script src="../../js/vendor/jquery.js"></script> 
    <script src="../../js/vendor/what-input.js"></script>  
    <script src="../../js/vendor/foundation.js"></script>
    <script src="../../js/vendor/foundation.min.js"></script>

    <script src="../../js/totop.js"></script>

    <script src="../../js/app.js"></script>
  </body>
</html>
