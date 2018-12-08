<?php

// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
//nasrajan@gmail.com;

//$select = $_POST['test'];
$to = 'supriyajain3010@gmail.com';
//if($select == "crossworld")
  //$to = 'supriyajain3010@gmail.com';
/*else if($select == "crunchies")
   $to = 'tech.priyanka.10@gmail.com';
 else if ($select == "darter")
    $to = 'shalu.jsr@gmail.com';
  else if ($select == "hearty")
    $to = 'nasrajan@gmail.com';*/
     
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
//$name = "supriya";
//$email_address = "supriyajain3010@gmail.com";
//$phone = "dfgg";
//$message = "hfks";


$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: supriyajain3010@gmail.com"; 
$headers .= "Reply-To: $email_address";   
if (mail($to,$email_subject,$email_body,$headers))
{
    echo "$select";
    echo "Message accepted";
    return true;
}
else
{
    echo "Error: Message not accepted";
    return false;
}
return false;      
?>