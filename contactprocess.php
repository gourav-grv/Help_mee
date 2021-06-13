<?php

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
 
$msg=$_POST['message'];

$to ="shrivastavagourav724@gmail.com";
$subject="Our services related issue contact us";
$body="  Name :$name \n Email : $email \n Phone Number :$phone  \n  Subject :$subject  Message : \n $msg ";
$headers ="From:maggu440@gmail.com";


if(mail($to,$subject,$body,$headers))
{

   echo"<script>alert('Email successfully send  $to')</script>";

}
else
{
    echo "Email Sending failed";
}
}

?>