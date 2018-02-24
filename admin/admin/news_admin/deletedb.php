<?php
        // list todo :change grab names from fac table





        $config = parse_ini_file('../../config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        // needed because pdo throws a error
        $password = $password . "$";
        $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);

        $profname = $_GET['prof'];
        $day = $_GET['day'];
        $slot = $_GET['begintime'];
        $text = $_GET['text'];
        $width = $_GET['endtime'] - $slot;


        $sql = "DELETE FROM university.officehours WHERE profname = '$profname' AND dayofweek = '$day' AND slot = '$slot';";
        //$sql = "DELETE FROM university.officehours WHERE profname = '$profname';";


       
        $result = $db->exec($sql);


        $index = 0;



        $resultstring = "";
      


        echo '<br><a href="DeletionAdmin.html">back to deletion</a>';
            
            
        echo '<br>';
            
            
        



?>
