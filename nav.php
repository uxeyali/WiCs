   
    <!-- off-canvas right menu (not visible when large) -->
<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
  <ul class="vertical dropdown menu" data-dropdown-menu>
   <br>
    <li class="hover"><label><a href=<?php print($path . "") ?>>HOME</a></label></li>
    <li><label>ABOUT</label></li>
    <li class="hover"><a href=<?php print($path . "about/") ?>>Program Info</a></li>
    <li class="hover"><a href=<?php print($path . "opportunities/") ?>>Beyond The Classroom</a></li>
    <li class="hover"><a href=<?php print($path . "programInfo/") ?>>Majors</a></li> 
    <li class="hover"><a href=<?php print($path. "faq/") ?>>FAQ</a></li>
    <li class="hover"><a href=<?php print($path. "history/")?>>History</a></li>
    <li class="hover"><a href=<?php print($path. "contact/")?>>Contact</a></li>
    <li><label>CURRENT STUDENTS</label></li>
    <li class="hover"><a href=<?php print($path . "Scholarships/") ?>>Scholarships</a></li>
    <li class="hover"><a href=<?php print($path . "current_students/Projects/") ?>>Research Projects</a></li>
    <li class="hover"><a href=<?php print($path . "current_students/tutoring/") ?>>Tutoring</a></li>
    <li class="hover"><a href=<?php print($path . "current_students/practicum/") ?>>Practicum</a></li>
    <li class="hover"><a href=<?php print($path . "current_students/testing_lab/") ?>>Testing Lab</a></li>
    <li class="hover"><a href="//www.wsucs.club" target="_blank">CS Club</a></li>    
    <li class="hover"><label><a href=<?php print($path . "faculty/") ?>>FACULTY</a></label></li>
    <li class="hover"><label><a href=<?php print($path . "news/") ?>>NEWS</a></label></li>
  </ul>
</div>

<nav data-sticky-container>
  <div class="sticky" data-sticky data-margin-top="0" data-sticky-on="large"> 
   
    <!-- off-canvas title bar for 'medium' and 'small' screen  -->
    <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="large">
      <div class="title-bar-left">
        <div class="title-bar-title menu-text-bottom"><a href="#"><img  alt="Winona State University Website" class="wsu-flame"  src=<?php print($path . "img/WSU_Flame.png")?>></a><a alt="Home" href=<?php print($path. "") ?> >COMPUTER SCIENCE</a></div>

      </div>
      <div class="title-bar-right">
        <span class="title-bar-title"></span>
        <button class="menu-icon" type="button" data-open="offCanvasRight"></button>
      </div>
    </div>

    <!-- "wider" top-bar menu for 'large' and up -->
    <div id="widemenu" class="top-bar">
      <div class="top-bar-left">
        <ul class="menu" data-dropdown-menu>        
          <li class="menu-text-bottom"><div><a href="http://www.winona.edu"><img   title="Winona State University Website" class="wsu-flame" src=<?php  print($path. "img/WSU_Flame.png") ?>></a><a title="Home" href= <?php print($path. "") ?> >COMPUTER SCIENCE</a></div></li>

        </ul>
      </div>
      <div class="top-bar-right medium-only-text-center">
        <ul class="menu dropdown" data-dropdown-menu data-closing-time="100">
          <li><a href= <?php print($path . "") ?> >HOME</a></li>
          <li class="has-submenu">
            <a href="#">ABOUT</a>
            <ul class="menu submenu vertical" >
              <li class="inside-submenu"><a href=<?php print($path . "about/") ?>><i class="fi-info"></i> PROGRAM INFO</a></li>
              <li class="inside-submenu"><a href= <?php print($path . "opportunities/") ?> ><i class="fi-laptop"></i> BEYOND THE CLASSROOM</a></li>
              <li class="inside-submenu"><a href= <?php print($path . "programInfo/") ?>><i class="fi-clipboard-pencil"></i> MAJORS</a></li>
              <li class="inside-submenu"><a href=<?php print($path. "faq/") ?>><i class="fi-compass"></i> FAQ</a></li>
              <li class="inside-submenu"><a href=<?php print($path . "history/") ?>><i class="fi-magnifying-glass"></i> HISTORY</a></li>
              <li class="inside-submenu"><a href=<?php print($path. "contact/")?>><i class="fi-telephone"></i>CONTACT</a></li>
            </ul>
          </li>
          <li class="has-submenu">
            <a href="#" > CURRENT STUDENTS</a>
            <ul class="menu submenu vertical" data-submenu>
              <li class="inside-submenu"><a href= <?php print($path . "Scholarships/") ?> ><i class="fi-pencil"></i> SCHOLARSHIPS</a></li>
              <li class="inside-submenu"><a href= <?php print($path . "current_students/Projects/") ?> ><i class="fi-graph-trend"></i> RESEARCH PROJECTS</a></li>
              <li class="inside-submenu"><a href=<?php print($path . "current_students/tutoring/") ?> ><i class="fi-book"></i> TUTORING</a></li>
              <li class="inside-submenu"><a href=<?php print($path . "current_students/practicum/") ?>><i class="fi-lightbulb"></i>PRACTICUM</a></li>
              <li class="inside-submenu"><a href=<?php print($path . "current_students/testing_lab/") ?>><i class="fi-monitor"></i>TESTING LAB</a></li>             
              <li class="inside-submenu"><a href="//www.wsucs.club" target="_blank"><i class="fi-torsos-all"></i> CS CLUB</a></li>
            </ul>
          </li>
          <li><a href=<?php print($path . "faculty/") ?> ?>FACULTY</a></li>
          <li><a href=<?php print($path . "news/") ?>>NEWS</a></li>

        </ul>
      </div>
    </div>
  </div>
</nav>

