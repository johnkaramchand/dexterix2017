<?php
/* Set e-mail recipient */
$myemail  = 'saarahasad26@gmail.com';
$subject = "DexteriX Enquiry" ;

$name = 'notset';

$email    =$_POST['email'];
$telephone    = $_POST['telephone'];

$description =$_POST['description'];

if (isset($_POST['name'])) {
$name = $_POST['name'];

}



/* Let's prepare the message for the e-mail */
$message = "Hello!

Your contact form has been submitted by:

Name: $name
E-mail: $email
Phoneno: $telephone

Comments:
$description

End of message
";
 $headers = 'From: DEXTERIX 2017 no-reply@dexterix.com' . "\r\n" ;
    $headers .='Reply-To: '. $myemail . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
/* Send the message using mail() function */
mail($myemail, $subject, $message,$headers);
echo "Thank You! We will Get back to you ASAP";


/* Redirect visitor to the thank you page */
header('Location: contact-us.html');
exit();


function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>
