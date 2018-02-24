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


        $sql = "INSERT INTO university.officehours (profname, dayofweek, slot, slottext, slotsize) values('".$profname."','".$day."','".$slot."','".$text."','".$width."');";


     
        $result = $db->exec($sql);


        $index = 0;


        //echo $_GET['day'];

        $resultstring = "";



        echo '<br><a href="NEWadmin.php">back to entry</a>'



?>
