  
    <!-- off-canvas right menu (not visible when large) -->

<nav data-sticky-container>
  <div class="sticky" data-sticky data-margin-top="0" data-sticky-on="large"> 

    <!-- "wider" top-bar menu for 'large' and up -->
    <div id="widemenu" class="top-bar">
      <div class="top-bar-left">
        <ul class="menu" data-dropdown-menu>        
          <li class="menu-text-bottom"><div><a href="http://www.winona.edu"><img   title="Winona State University Website" class="wsu-flame" src=<?php  print($path. "../img/WSU_Flame.png") ?>></a><a title="Home" href= <?php print($path. "../") ?> >COMPUTER SCIENCE</a></div></li>

        </ul>
      </div>
      <div class="top-bar-right medium-only-text-center">
        <ul class="menu dropdown" data-dropdown-menu data-closing-time="100">
          <li><a href= <?php print($path . "../admin/") ?> >ADMIN HOME</a></li>
          <li class="has-submenu">
            <a href="#">ADMIN OPTIONS</a>
            <ul class="menu submenu vertical" >
              <li class="inside-submenu"><a href=<?php print( $path ."admin/faculty_admin/") ?>><i class="fi-info"></i> FACULTY</a></li>
              <li class="inside-submenu"><a href= <?php print( $path ."admin/news_admin/NEWadmin.php") ?> ><i class="fi-laptop"></i> TUTORING/OFFICE HOURS</a></li>
              <li class="inside-submenu"><a href= <?php print($path ."admin/news/") ?>><i class="fi-clipboard-pencil"></i> NEWS</a></li>
              <li class="inside-submenu"><a href=<?php print( $path ."admin/student_project_form/adminpage.php") ?>><i class="fi-compass"></i> STUDENT PROJECTS</a></li>
              <li class="inside-submenu"><a href=<?php print( $path ."admin/practicum_admin/practicumadmin.php") ?>><i class="fi-magnifying-glass"></i> PRACTICUM </a></li>
                <li class="inside-submenu"><a href=<?php print( $path ."admin/testinglab_admin/stladmin.php") ?>><i class="fi-monitor"></i> TESTING LAB </a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </div>
</nav>

