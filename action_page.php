<?php
if(isset($_POST['submit'])){
$to="frostyvi92@gmail.com";// this is your Email address
$from=$_POST['email'];// this is the sender's Email address
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$subject="Form submission";
$subject2="Copy of your form submission";
$ph_number="Name: ".$name."\nEMAIL is: ".$email."\Subject: ".$_POST['subject']."\nMessage:".$_POST['message'];
$ph_number2="Here is a copy of your Form ".$name."\n\n".$_POST['ph_number'];
$headers="From:".$from;
$headers2="From:".$to;
mail($to,$subject,$ph_number,$headers);
mail($from,$subject2,$ph_number2,$headers2);// sends a copy of the ph_number to the sender
echo "Thanks".$name."We received your email.";
// You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>