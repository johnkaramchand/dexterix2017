<?php
    include('db_connection.php');

    /*print "<pre>";
    print_r($_POST);
    print "</pre>";*/
    $name1=$_POST['name1'];
    $usn1=$_POST['usn1'];
    $phone1=$_POST['phone1'];
    $email1=$_POST['email1'];
    $college1=$_POST['college1'];
    $branch1=$_POST['branch1'];
    $sem1=$_POST['sem1'];
    
    $name2=$_POST['name2'];
    $usn2=$_POST['usn2'];
    $phone2=$_POST['phone2'];
    $email2=$_POST['email2'];
    $college2=$_POST['college2'];
    $branch2=$_POST['branch2'];
    $sem2=$_POST['sem2'];

    
    $name3=$_POST['name3'];
    $usn3=$_POST['usn3'];
    $phone3=$_POST['phone3'];
    $email3=$_POST['email3'];
    $college3=$_POST['college3'];
    $branch3=$_POST['branch3'];
    $sem3=$_POST['sem3'];

    $event=$_POST['event'];
    $problemstatement=$_POST['problemstatement'];
    $requirements=' ';
    $tid=$_POST['tid'];

  $team=3;
    
    $query ="INSERT INTO Makeathon(  `eidfk` ,  `type` ) VALUES ('$event', $team)";
    $flagAdd=mysqli_query($dbHandle,$query);

    include('db_connection.php');

  $rowSQL = mysqli_query($dbHandle,"select max(mid) FROM Makeathon ;");
    $row = mysqli_fetch_array( $rowSQL );
    $largestNumber = $row['max(mid)'];
    print $largestNumber;
    
    include('db_connection.php');


    $query2="insert into Dexterix.Makeathon_Participants values('$largestNumber','$event','$team','$name1','$usn1','$phone1','$email1','$college1','$branch1','$sem1','$problemstatement','$requirements','$tid');";
   $flagAdd=mysqli_query($dbHandle,$query2);
  
    include('db_connection.php');

    $query3="insert into Dexterix.Makeathon_Participants values('$largestNumber','$event','$team','$name2','$usn2','$phone2','$email2','$college2','$branch2','$sem2','$problemstatement','$requirements','$tid');";
    $flagAdd=mysqli_query($dbHandle,$query3);
   
    include('db_connection.php');

    $query4="insert into Dexterix.Makeathon_Participants values('$largestNumber','$event','$team','$name3','$usn3','$phone3','$email3','$college3','$branch3','$sem3','$problemstatement','$requirements','$tid');";
    $flagAdd=mysqli_query($dbHandle,$query4);
   
     if($flagAdd)
    {
         $to1 = $email1;
         $to2= $email2;
         $to3 = $email3;


            $subject = "Makeathon - Dexterix 2017" ;
            $body = "<h3>Greetings from CODE </h3>
            <p> Thanks for registering for Makeathon organised under DexteriX 2017. This email confirms your registration. Please report at 8:30 AM on 3rd of November 2017 at Atria Institute of Technology.</p>
            <p>For any queries contact,</p>
            <ul>
                <li>Sachin K P on +919611836318 (ISE)</li>
                <li>Gowri Dixit on +918310652631 (CSE)</li>
                <li>Prashanth V on +919663770961 (ECE)</li>
                <li>Vibhav on +919902351146 (Civil)</li>
                <li>Sudharshan on +918892339380 (Mechanical)</li>
            </ul>
                </br>
                <p>We look forward to have you with us at Makeathon 2017.</p>
                </br>
                <p>Sincerely,</p>
                <p>CODE. </p>";

            $headers = 'From: DEXTERIX 2017 no-reply@dexterix.com' . "\r\n" ;
            $headers .='X-Mailer: PHP/' . phpversion();
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
        if(mail($to1, $subject, $body,$headers) && mail($to2, $subject, $body,$headers) && mail($to3, $subject, $body,$headers)) {
            echo('<br>'."Email Sent ;D ".'</br>');
                header("Location: registration_successful.html");
                } 
                else 
                {header("Location: registration_failed.html");
                echo("<p>Email Message delivery failed...</p>");
                }
                exit(0);
    }
    else{header("Location: registration_failed.html");
        print "Error:".mysqli_error($dbHandle); 
    }
    ?>

