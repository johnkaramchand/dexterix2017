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

    $event=$_POST['event'];
    $problemstatement=$_POST['problemstatement'];
    $requirements=' ';
    $tid=$_POST['tid'];

  $team=1;
    
    $query ="INSERT INTO Makeathon(`eidfk` ,`type` ) VALUES ('$event', $team)";
    $flagAdd=mysqli_query($dbHandle,$query);

    include('db_connection.php');

    $rowSQL = mysqli_query($dbHandle,"select max(mid) FROM Makeathon ;");
    $row = mysqli_fetch_array( $rowSQL );
    $largestNumber = $row['max(mid)'];
    print $largestNumber;
    
    include('db_connection.php');


    $query2="insert into Dexterix.Makeathon_Participants values('$largestNumber','$event','$team','$name1','$usn1','$phone1','$email1','$college1','$branch1','$sem1','$problemstatement','$requirements','$tid');";
    $flagAdd=mysqli_query($dbHandle,$query2);
  
    if($flagAdd)
    {
            $to = $email1;
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
            $headers .='Reply-To: '. $to . "\r\n" ;
            $headers .='X-Mailer: PHP/' . phpversion();
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
        if(mail($to, $subject, $body,$headers)) {
            echo('<br>'."Email Sent ;D ".'</br>');
                header("Location: registration_successful.html");
                exit();

                } 
                else 
                {header("Location: registration_failed.html");
                echo("<p>Email Message delivery failed...</p>");
                exit();

                }
    }
    else{
header("Location: registration_failed.html");
        print "Error:".mysqli_error($dbHandle); 

                exit();

    }
    ?>


