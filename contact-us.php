<!DOCTYPE html>
<html>
    <head>
          <title>Contact us - Dexterix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
          <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
          <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
          <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
      
          <link href="css/agency.css" rel="stylesheet">
          <link  type="text/css" rel="stylesheet"  href="css/bootstrap.css" />
          <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
          <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
          <script     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvEF88TUQE1XfTDginYNRWpU5YzDkGGrc&callback=initMap"></script>
          
          


     <script>

      function init_map() {
		  var var_location = new google.maps.LatLng(13.0325489,77.5899031);

        var var_mapoptions = {
          center: var_location,
          zoom: 16
        };

		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			title:"Atria Institute of Technology"});

        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);

		var_marker.setMap(var_map);

      }
      google.maps.event.addDomListener(window, 'load', init_map);
    </script>


        <style>
            body{
                margin-top:50px;





            }
            #for_bg{
              background-image: url("image/me/bg.png");
            }
            footer{
                margin-top:20px;

            }
             .navbar-fixed-top {
                min-height: 59px!important;
            }

            .navbar-nav > li > a {
                padding-top: 0px;
                padding-bottom: 0px;
                font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
                padding-left: 0px;
                line-height: 59px;
            }
            #map-container { height: 300px }

            /*Contact sectiom*/
              .content-header{
                font-family: 'Oleo Script', cursive;
                color:#fcc500;
                font-size: 45px;
              }

              .section-content{
                text-align: center;

              }
              #contact{

                  font-family: 'Teko', sans-serif;
                padding-top: 60px;
                width: 100%;
                width: 100vw;
                height: 550px;
                color : #000000;
              }
              .contact-section{
                padding-top: 40px;
              }
              .contact-section .col-md-6{
                width: 50%;
              }

              .form-line{
                border-right: 1px solid #B29999;
              }

              .form-group{
                margin-top: 10px;
              }
              label{
                font-size: 1.3em;
                line-height: 1em;
                font-weight: normal;
              }
              .form-control{
                font-size: 1.3em;
                color: #080808;
              }
              textarea.form-control {
                  height: 135px;
                 /* margin-top: px;*/
              }

              .submit{
                font-size: 1.1em;
                float: right;
                width: 150px;
                background-color: transparent;
                color: #fff;

              }

                footer{
                margin-top:20px;
                height:50px;
                padding: 5px 0!important;
            
                 }
          
            footer{
                margin-top:20px;
                height:50px;
                padding: 5px 0!important;

            }
             @media (max-width: 1200px) {
             footer{
                margin-top:20px;
                height:100px;
                padding: 5px 0!important;
             }
            }
            @media (max-width: 700px) {
             footer{
                margin-top:20px;
                height:150px;
                padding: 5px 0!important;
             }
            }
             @media (max-width: 500px) {
             footer{
                margin-top:20px;
                height:180px;
                padding: 5px 0!important;
             }
            }

            #footer span.copyright{
                font-size:90%;
                line-height:40px;
                text-transform:none;
                font-family:Montserrat,'Helvetica Neue',Helvetica,Arial,sans-serif;
                text-transform:uppercase}
                footer ul.quicklinks{font-size:90%;
                    line-height:40px;
                    margin-bottom:0;
                    text-transform:none;
                    font-family:Montserrat,'Helvetica Neue',Helvetica,Arial,sans-serif;
                text-transform:uppercase}
        </style>
    </head>
    <body>
         <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:black;" >
            <div class="container">
                <div class="navbar-header" style="margin-left:-28px;">
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu" >
                        <!--
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        -->
                    Menu
                    </button>
                   
                    <a href="index.html" class="navbar-brand"  id="dextrix" style="color: white;  line-height: 20px; font-size:25px;     font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;" >
                          <img alt="Brand" src="images/dexterix-1.png" style="height:40px; line-height: 20px; margin-top:-6px; "> 
                        DEXTERIX
                    </a>
                   
                      &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
                </div>
                    
                <div class="collapse navbar-collapse" id="primary-menu">
                    <ul class="nav navbar-nav"  >
                       <li><a href="index.html"  style="color: white; ">HOME</a></li>
                        <li><a href="about-us.html"  style="color: white; ">ABOUT</a></li>
                        <li><a href="Makeathon/makeathon.html"  style="color: white; ">MAKEATHON</a></li>
                        <li class="dropdown" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">EVENTS</a>
                            <ul class="dropdown-menu" style="background-color: black;color:#424242; ">
                                 &nbsp <b>INTRA-COLLEGE</b>
                                 <li><a href="cse_events.html" style="color: white;">Computer Science</a></li>
                                <li><a href="ise_events.html" style="color: white;">Information Science</a></li>
                                <li><a href="civil_events.html" style="color: white;">Civil Engineering</a></li>
                                <li><a href="me_events.html" style="color: white;">Mechanical Engineering</a></li>
                                <li><a href="ece_events.html" style="color: white;">Electronics and Communcation</a></li>
                                <li><a href="mba_events.html" style="color: white;">MBA</a></li>
                                
                            </ul>
                              
                        </li>
                        <li class="dropdown" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">REGISTER</a>
                            <ul class="dropdown-menu" style="background-color: black;color:#424242; "> &nbsp <b>INTRA-COLLEGE</b>
                                 <li><a href="register_solo.php" style="color: white;"  id="hovertext"  title="SyntactiX,Tech Say">Solo Events </a></li>
                                <li><a href="register_group2.php" style="color: white;">Team of 2</a></li>
                                <li><a href="register_group3.php" style="color: white;">Team of 3</a></li>
                                <li><a href="register_group4.php" style="color: white;">Team of 4</a></li>
                                <li><a href="register_group7.php" style="color: white;">Team of 7</a></li>&nbsp <b>INTER-COLLEGE</b>
                                 <li><a href="regis_makeathon_solo.php" style="color: white;">Makeathon Solo</a></li>
                                 <li><a href="regis_makeathon_group.php" style="color: white;">Makeathon - Team of 3</a></li>
                            </ul>
                              
                        </li>
                          <li> <a id="pdf" href="image/general/Schedule.pdf" style="color:white; " download> EVENT SCHEDULE</a> </li>
                        <li><a href="contact-us.php" style="color:white; ">CONTACT</a></li>

                    </ul>
                </div>
            </div>
        </nav>



    <br/>
    <div class="container">
           <div class="row">
                  <h2 style="text-align:center;">We are here</h2>
          </div>
    </div>

             <div id="map-container" class="col-md-12"></div>

<!-- contact details -->
<div id="for_bg">
<div class="section-content">
  <h1 class="section-header" style="font-size:20px;text-transform: none;">Contact us: support@dexterix.com<span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> </span></h1>

</div>

<div class="container">

  <div class="row">
    <div class="col-lg-4">
      <div style="margin-left: auto;
                	margin-right: auto;
                	text-align: center;">
        <i class="fa fa-phone fa-5x mar-bot20"></i>
        <h4 class="text-bold"><b>  Gowri Dixit</b></h4>
        <p><br>Phone: +91 96114 15251</b></p>


      </div>
    </div>
    <div class="col-lg-4">
      <div style="margin-left: auto;
                	margin-right: auto;
                	text-align: center;">
        <i class="fa fa-phone fa-5x mar-bot20"></i>
        <h4 class="text-bold"><b> Prashanth V</b></h4>
        <p><br>Phone: +91 96637 70961</b></p>


      </div>
    </div>
    <div class="col-lg-4">
      <div style="margin-left: auto;
                	margin-right: auto;
                	text-align: center;">
        <i class="fa fa-phone fa-5x mar-bot20"></i>
        <h4 class="text-bold"><b> Vibhav Hoskote</b></h4>
        <p><br> Phone: +91 99023 51146</b></p>
      </div>
    </div>



  </div>


</div>


<!-- contact form -->
    <section id="contact">
      <div class="section-content">
        <h3>Drop in a message</h3>
      </div>
    			<div class="contact-section">
    			<div class="container">
    				<form action="contact.php" method="POST" role="form">
    					<div class="col-md-6 col-xs-6 form-line">
    			  			<div class="form-group">
    			  				<label for="name">Your name</label>
    					    	<input type="text" class="form-control" id="name" name="name" placeholder=" Enter Name" required>
    				  		</div>
    				  		<div class="form-group">
    					    	<label for="email">Email Address</label>
    					    	<input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder=" Enter Email id" required>
    					  	</div>
    					  	<div class="form-group">
    					    	<label for="telephone">Mobile No.</label>
    					    	<input type="tel" class="form-control" id="telephone" name="telephone" placeholder=" Enter 10-digit mobile no." required>
    			  			</div>
    			  		</div>
    			  	<div class="col-md-6 col-xs-6 form-group">

    			  	<div class="form-group">
    			  				<label for ="description"> Message</label>
    			  			 	<textarea  class="form-control" id="description" name="description" placeholder="Enter Your Message" cols:"5" rows:"5" required></textarea>
               </div>
                  
                  	<div class="form-group" style="margin-top:15px;">

    			  				<button type="submit" style="color:black;" class="btn btn-default submit"><i class="fa fa-paper-plane" ></i>  Send Message</button>
    			  			</div>

    					</div>
    				</form>
    			</div>
        </div>
    		</section>

  </div>

     <footer style="background-color: black;">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span style="color: #E0E0E0;" class="copyright">Developed by: &nbsp Saarah Asad ,  &nbsp John Karamchand</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/DexteriX2k17">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/code.ait/">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/dexterix2k17/">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a style=" color: #E0E0E0;" href="https://atria.edu/">Atria Institute of Technology</a>
              </li>
            
            </ul>
          </div>
        </div>
      </div>
    </footer>



   <script src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.js"></script>



    </body>
</html>
