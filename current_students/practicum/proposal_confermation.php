<?php
	$fname = $_POST["FirstName"];
	$lname = $_POST["LastName"];
	$sid = $_POST["StudentID"];
	$regterm = $_POST["RegTerm"];
	$sdate = $_POST["StartDate"];
    $edate = $_POST["EndDate"];
    $hours = $_POST["Hours"];
	$bisaddr = $_POST["BuisnessAddress"];
    $city = $_POST["City"];
    $state = $_POST["State"];
    $zip = $_POST["Zip"];
    $phonenum = $_POST["PhoneNum"];
    $compname = $_POST["CompanyName"];
    $sfname = $_POST["SupervisorFName"];
    $slname = $_POST["SupervisorLName"];
    $sbisaddr = $_POST["SuperBuisnessAddress"];
    $scity = $_POST["SuperCity"];
    $sstate = $_POST["SuperState"];
    $szip = $_POST["SuperZip"];
    $sphonenum = $_POST["SuperPhoneNum"];
    $tasks = $_POST["Tasks"];

        $config = parse_ini_file('../../admin/config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        // needed because pdo throws a error
        $password = $password . "$";
        $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);
try {//CONNECTION TO THE PRACTICUM DB
   	 // Load configuration as an array. Use the actual location of your configuration file


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE practicum SET Fname='$fname', lname='$lname', StudID='$sid', Address='$bisaddr', Telephone='$phonenum', City='$city', state='$state', Zip='$zip', 
	regterm='$regterm', startdate='$sdate', enddate='$edate', hours='$hours', compname='$compname', supefname='$sfname', supelname='$slname',
	supeaddress='$sbisaddr', supecity='$scity', supestate='$sstate', supezip='$szip',supephone='$sphonenum', tasks='$tasks'WHERE StudID='$sid'";  
	$stmt = $conn->prepare($sql);// a statement is equal to a prepared statement

    $stmt->execute();// execute the statement
	    echo $stmt->rowCount() . "Practicum proposal successfully uploaded.";// if correct then print updated number of rows
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();// print error message
    }

$conn = null;

?>