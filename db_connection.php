<?php
    $host='localhost';
    $username='Atria';
    $password='dexterix123';
    $dbHandle=  mysqli_connect($host,$username,$password);
    if(!$dbHandle){
        die("Could not connect".mysql_error());
    }
    mysqli_select_db($dbHandle,'Dexterix');
?>