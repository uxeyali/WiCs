<!--Navigation is being imported from 'nav.html'-->
    <?php
            $path = "";
            include "admin_head1.html";
    ?>
  <link rel="stylesheet" href="css/index.css">
  <?php
    include "admin_head2.html";
  ?>
<!-- BANNER SECTION -->
     <div class="banner row">
         <div class="image large-12 large-centered columns">
             <img src="img/rootAdmin.png">
             <h2>Admin Page</h2>
         </div>
     </div>
     <!-- DIVIDER -->
     <div class="row"><img src="../img/line.svg"></div>
   <div class="row">

   </div>
<!--Do not delete anything before this-->

<!--list of links to admin pages-->
<main>
  <body>
<br>
<br>
 <div class="row">
     <div class="large-6 medium-6 column">
        <?php
        // Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file('config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        // needed because pdo throws a error
        $password = $password . "$";
        $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
        try{
      $rows = $db->query("SELECT * FROM `mail`;")->fetchAll();
    }
    catch(PDOException $ex){
        print("Whoops, something went wrong.");
      }
        $mail = count($rows);?>

         <h3><a href='http://cs.winona.edu/students/cs444spring2017/cs-website/admin/admin/mail/mail.php'><i class="fa fa-envelope" aria-hidden="true"></i><?php print(" Mail($mail) "); ?> </a></h3>

    </div>

     <div class="large-6 medium-6 column links-list">
    <ol><h3>Admin Page Links</h3>
    </ol>
          <li><a href="http://cs.winona.edu/students/cs444spring2017/cs-website/admin/admin/faculty_admin/" class="button button-purple">Faculty </a></li>
          <li><a href="http://cs.winona.edu/students/cs444spring2017/cs-website/admin/admin/news_admin/NEWadmin.php" class="button button-purple">Tutoring/Office Hours </a></li>
          <li><a href="http://cs.winona.edu/students/cs444spring2017/cs-website/admin/news" class="button button-purple">News </a></li>
          <li><a href="http://cs.winona.edu/students/cs444spring2017/cs-website/admin/admin/student_project_form/adminpage.php" class="button button-purple">Student Projects</a></li>
          <li><a href="http://cs.winona.edu/students/cs444spring2017/cs-website/admin/admin/testinglab_admin/stladmin.php" class="button button-purple">Testing Lab</a></li>
          <li><a href="http://cs.winona.edu/students/cs444spring2017/cs-website/admin/admin/practicum_admin/practicumadmin.php" class="button button-purple">Practicum</a></li>
<br>

     </div>
    </div>

<br>
<br>
  <?php
    include"admin_footer.html";
  ?>
    </main>
  </body>
</html>