<?php 
if(isset($_POST['email'])) {           

    // EDIT THE 2 LINES BELOW AS REQUIRED     
    $email_to = "hello@papaciku.com"; 
    $email_subject = "Online Enquiry";
    
    
    function died($error) {         
      // If the form cannot send through, will show below error code         
      echo "We are very sorry, but there were error(s) found with the form you submitted. ";
      echo "Please go back and try again. Thank You.";
      die();
    }
    
    // The GREE and BLUE color words must same with your name="xxxxx" in HTML  
    $name = $_POST['name'];   
    $email = $_POST['email'];          
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $supermarket1 = $_POST['supermarket1'];
    $supermarket2 = $_POST['supermarket2'];
    $supermarket3 = $_POST['supermarket3'];
    $supermarket4 = $_POST['supermarket4'];
    $gender = $_POST['gender'];
    $comments = $_POST['comments'];               
    
      
    $email_message = "Online Enquiry from my website.\n\n";           
    
    function clean_string($string) {       
      $bad = array("content-type","bcc:","to:","cc:","href");       
      return str_replace($bad,"",$string);     
    }           
    
    // The BLUE color words must same as above, The GREEN color words will display in your email.
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";     
    $email_message .= "phone: ".clean_string($phone)."\n";  
    $email_message .= "State: ".clean_string($state)."\n";
    $email_message .= "supermarket: ".clean_string($supermarket1)."\n";
    $email_message .= "supermarket: ".clean_string($supermarket2)."\n";
    $email_message .= "supermarket: ".clean_string($supermarket3)."\n";
    $email_message .= "supermarket: ".clean_string($supermarket4)."\n";
    $email_message .= "Gender: ".clean_string($gender)."\n";
    $email_message .= "comments: ".clean_string($comments)."\n";             


// create email headers 
$headers = 'From: '.$email."\r\n". 
'Reply-To: '.$email."\r\n" . 
'X-Mailer: PHP/' . phpversion(); 
@mail($email_to, $email_subject, $email_message, $headers);   
?>   


<!-- When form send successfully, Good Mail goes here. Can customize in CSS -->

<!DOCTYPE html>
<html>
<head>
<title>Good Mail</title>
<link rel="stylesheet" href="css/style.css">

</head>
<body id="goodmail">

  <div id="mailsection"> 

    <p>Thank you for contacting us. We will be in touch with you very soon.</p>
    <a href="index.html">Back to the main page</a>
    
  </div>
  
</body>
</html> 

<?php 
} 
?>