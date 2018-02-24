<?php

    $nina = "";
        $gerald = "";
        $iyengar = "";
        $debnath = "";
        $joan = "";
        $tim = "";
        $zhang = "";
        $a234 = "";
        $a275 = "";
        $a341 = "";
        $a375 = "";
        $a313 = "";


        $resultstring = "";


$ct = 0;


$config = parse_ini_file('../config.ini');
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['dbname'];
        // needed because pdo throws a error
        $password = $password . "$";
        $db = new PDO("mysql:dbname=$db;host=localhost;", $username, $password);


$_query = $db->query("SELECT * FROM university.officehours ORDER BY profname DESC;");

foreach($_query as $line){
                $ct = $ct + 1;
				
    
    
    if ($line['profname'] == "nina") {
        $nina .= $line["dayofweek"].",".$line["slot"].",".$line["slottext"].",".$line["slotsize"]."*";
    }
    
   
    
    if ($line['profname'] == "gerald") {
            $gerald .= $line["dayofweek"].",".$line["slot"].",".$line["slottext"].",".$line["slotsize"]."*";
        }
    
    
    
    if ($line['profname'] == "iyengar") {
            $iyengar .= $line["dayofweek"].",".$line["slot"].",".$line["slottext"].",".$line["slotsize"]."*";
        }
    
    if ($line['profname'] == "debnath") {
            $debnath .= $line["dayofweek"].",".$line["slot"].",".$line["slottext"].",".$line["slotsize"]."*";
        }
    
    if ($line['profname'] == "joan") {
            $joan .= $line["dayofweek"].",".$line["slot"].",".$line["slottext"].",".$line["slotsize"]."*";
        }
    
    if ($line['profname'] == "tim") {
            $tim .= $line["dayofweek"].",".$line["slot"].",".$line["slottext"].",".$line["slotsize"]."*";
        }
    
    if ($line['profname'] == "zhang") {
            $zhang .= $line["dayofweek"].",".$line["slot"].",".$line["slottext"].",".$line["slotsize"]."*";
        }
    
    if ($line['profname'] == "234") {
            $a234 .= $line["dayofweek"].",".$line["slot"].",".$line["slottext"].",".$line["slotsize"]."*";
        }
    
    if ($line['profname'] == "275") {
            $a275 .= $line["dayofweek"].",".$line["slot"].",".$line["slottext"].",".$line["slotsize"]."*";
        }
    
    if ($line['profname'] == "341") {
            $a341 .= $line["dayofweek"].",".$line["slot"].",".$line["slottext"].",".$line["slotsize"]."*";
        }
    
    if ($line['profname'] == "375") {
            $a375 .= $line["dayofweek"].",".$line["slot"].",".$line["slottext"].",".$line["slotsize"]."*";
        }
    
    if ($line['profname'] == "313") {
            $a313 .= $line["dayofweek"].",".$line["slot"].",".$line["slottext"].",".$line["slotsize"]."*";
        }
    
 
    
    
}

$resultstring = $nina."&".$gerald."&".$iyengar."&".$debnath."&".$joan."&".$tim."&".$zhang."&".$a234."&".$a275."&".$a341."&".$a375."&".$a313;


echo $resultstring;

      



?>
