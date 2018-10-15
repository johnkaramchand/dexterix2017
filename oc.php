<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/dexterix-1.png">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
 
    <!-- Custom styles for this template -->
       <link  type="text/css" rel="stylesheet"  href="css/bootstrap.css" />  
        <link href="css/agency.css" rel="stylesheet">
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
@media (max-width: 500px) {
           
             select {
                font-size: 8px!important;
                }

           
            }
</style>
</head>
<body>
	<div class="container">
		<h2>Registration Details</h2>
	</div>
	 <form action="" method="POST" class="form-horizontal col-sm-12" role="form">
                              
                          
                             <div class="form-group">
                                <label for="event"class="control-label col-md-2 col-sm-2">Event</label>
                                <div class="col-md-6 col-sm-10">
                                   <select class="form-control" id="event" name="event" >
                                        <optgroup value="paycse" label="Computer Science">
                                            <option value="cse1">SyntactiX</option>
                                            <option value="cse2">Competitive Coding</option>
                                            <option value="cse3">Tech Say</option>
                                            <option value="cse4">Tech Ladder</option>
                                            <option value="cse5">Tech Hunt</option>
                                        </optgroup>
                                        <optgroup value="payis" label="Information Science">
                                            <option value="ise1">Tech Quiz</option>
                                            <option value="ise2">Cryptography</option>
                                            <option value="ise3">Web Design</option>
                                            <option value="ise4">Start-up Pitch</option>
                                            <option value="ise5">Meme Generator</option>
                                     
                                        </optgroup>
                                  
                                        <optgroup value="payme" label="Mechanical Engineering">
                                            <option value="me1">Terrain Survival</option>
                                            <option value="me2">Pirate Battle</option>
                                            <option value="me3">Rocket League</option>       
                                            <option value="me4">Tool Tantra</option>
                                            <option value="me5">Tool Hunt</option>
                                            <option value="me6">Mech Manthana</option>
                                            <option value="me7">Sport Pilot</option>
                                            <option value="me8">Roar</option>
                                         </optgroup>
                                         <optgroup label="Civil Engineering">
                                            <option value="civil1">Quick Surveying</option>
                                            <option value="civil2">Bridge Construction</option>
                                            <option value="civil3">Structure Capture</option>
                                            <option value="civil4">Tower Builder</option>
                                            <option value="civil5">Model Art</option>
                                         </optgroup>
                                         <optgroup label="Electronics and Communications">
                                            <option value="ece1">Circutrix</option>
                                            <option value="ece2">Ram Rom Evoke</option>
                                            <option value="ece3">Advertise It</option>
                                            <option value="ece4">Atria Court Room</option>
                                            <option value="ece5">Scraptures</option>
                                            <option value="ece6">Beg and Borrow</option>
                                            <option value="ece7">Typo Interface</option>
                                            <option value="ece8">LED Design</option>
                                            <option value="ece9">Brainiax</option>
                                            <option value="ece10">DOTA 2</option>
                                            
                                        </optgroup>
                                        <optgroup label="MBA">
                                            <option value="mba1">Product Launch</option>
                                            <option value="mba2">Brand Charades</option>
                                            <option value="mba3">Business Quiz</option>
                                        </optgroup>
                                        <optgroup label="By Departments">
                                            <option value="cse%">CSE events</option>
                                             <option value="ise%">IS events</option>
                                            <option value="civil%">Civil events</option>
                                            <option value="me%">ME events</option>
                                            <option value="ece%">ECE events</option>
                                            <option value="mba%">MBA events</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            
                          
                            <div class="form-group">
                                <div class="col-md-offset-2 col-sm-offset-2 col-md-2"  >
                                    <button type="submit" value="Send" class="btn btn-success btn-block"> Retrieve </button>
                                </div>
                            </div>
                          
                    </form>
</body>
</html>
<?php
    include('db_connection.php');

    $event = $_POST['event'];
    if($event!='cse%' && $event!='ise%' && $event!='me%' && $event!='ece%' && $event!='mba%' && $event!='civil%'){
    
    $query1="Select ename from Events where eid='$event';";
    $flagAdd=mysqli_query($dbHandle,$query1);
    $row = mysqli_fetch_array($flagAdd,MYSQLI_ASSOC);
    print "<h4 class='text-center'>".$row['ename']."</h4>";
    
     if(!$flagAdd){
       die("Could not connect".mysqli_error($dbHandle));
    }
     $query2="Select count(*) from Groups where feid='$event';";
    $flagAdd=mysqli_query($dbHandle,$query2);
    $row = mysqli_fetch_array($flagAdd,MYSQLI_ASSOC);
    print "<h5 class='text-center'>No. of teams: ".$row['count(*)']."</h5>";
     
     
    $query3="Select count(*) from Participants where fk_eid='$event';";
    $flagAdd=mysqli_query($dbHandle,$query3);
    $row = mysqli_fetch_array($flagAdd,MYSQLI_ASSOC);
     print "<h5 class='text-center'>Head count: ".$row['count(*)']."</h5>";

    $query="Select * from Participants where fk_eid='$event';";
    $objList=mysqli_query($dbHandle,$query);
     print"</br>";
    print "<table cellpading=10 cellspacing=10 >";
    print "<tr>";
    print"<td  border: none;>Gid</td>";
    print"<td  border: none;>Group</td>";
    print"<td  border: none;>Name</td>";
    print"<td border: none;>Usn</td>";
    print"<td border: none;>Phone</td>";
    print"<td border: none;>Email</td>";
    print"<td border: none;>Dep</td>";
    print"<td border: none;>Sem</td>";
    print"<td border: none;>Sec</td>";
    print"<td border: none;>P/A</td>";
    print"</tr>";
    if(!$objList){
       die("Could not connect".mysqli_error($dbHandle));
    }


    while($row=mysqli_fetch_array($objList))
    {
        $gid=$row['gid'];
        $group=$row['group'];
        $name=$row['name'];
        $usn=$row['usn'];
        $phone=$row['phone'];
        $email=$row['email'];
        $dep=$row['dep'];
        $sem=$row['sem'];
        $sec=$row['sec'];
        print "<tr>";
        print"<td>$gid</td>";
        print"<td>$group</td>";
        print"<td>$name</td>";
        print"<td>$usn</td>";
        print"<td>$phone</td>";
        print"<td>$email</td>";
        print"<td>$dep</td>";
        print"<td>$sem</td>";
        print"<td>$sec</td>";
         print"<td> </td>";
        print"</tr>";
        /*print "<pre>";
        print_r($row);
        print "</pre>";*/
    }
    //print_r($objList);
    print"</table>";
    }
    else
    {
    if($event=='cse%')
    	print "<h4 class='text-center'>CSE Events</h4>";
    else if($event=='ise%')
   	print "<h4 class='text-center'>IS Events</h4>";
    else if($event=='ece%')
   	print "<h4 class='text-center'>ECE Events</h4>";	
    else if($event=='civil%')
   	print "<h4 class='text-center'>Civil Events</h4>";
     else if($event=='me%')
   	print "<h4 class='text-center'>ME Events</h4>";
    else
   	print "<h4 class='text-center'>MBA Events</h4>";
      $query2="Select count(*) from Groups where feid LIKE'$event';";
      
    $flagAdd=mysqli_query($dbHandle,$query2);
    $row = mysqli_fetch_array($flagAdd,MYSQLI_ASSOC);
    print "<h5 class='text-center'>No. of teams: ".$row['count(*)']."</h5>";
     
     
    $query3="Select count(*) from Participants where fk_eid LIKE '$event';";
    $flagAdd=mysqli_query($dbHandle,$query3);
    $row = mysqli_fetch_array($flagAdd,MYSQLI_ASSOC);
     print "<h5 class='text-center'>Head count: ".$row['count(*)']."</h5>";

    $query="Select * from Participants where fk_eid LIKE'$event';";
    $objList=mysqli_query($dbHandle,$query);
    
     print"</br>";
    print "<table cellpading=10 cellspacing=10 >";
    print "<tr>";
    print"<td  border: none;>Gid</td>";
    print"<td  border: none;>Event id</td>";
    print"<td  border: none;>Group</td>";
    print"<td  border: none;>Name</td>";
    print"<td border: none;>Usn</td>";
    print"<td border: none;>Phone</td>";
    print"<td border: none;>Email</td>";
    print"<td border: none;>Dep</td>";
    print"<td border: none;>Sem</td>";
    print"<td border: none;>Sec</td>";
    print"</tr>";
    if(!$objList){
       die("Could not connect".mysqli_error($dbHandle));
    }


    while($row=mysqli_fetch_array($objList))
    {
        $gid=$row['gid'];
        $feid=$row['fk_eid'];
        $group=$row['group'];
        $name=$row['name'];
        $usn=$row['usn'];
        $phone=$row['phone'];
        $email=$row['email'];
        $dep=$row['dep'];
        $sem=$row['sem'];
        $sec=$row['sec'];
        print "<tr>";
        print"<td>$gid</td>";
         print"<td>$feid</td>";
        print"<td>$group</td>";
        print"<td>$name</td>";
        print"<td>$usn</td>";
        print"<td>$phone</td>";
        print"<td>$email</td>";
        print"<td>$dep</td>";
        print"<td>$sem</td>";
        print"<td>$sec</td>";
        print"</tr>";
        /*print "<pre>";
        print_r($row);
        print "</pre>";*/
    }
    //print_r($objList);
    print"</table>";
    }
   
   
    ?>