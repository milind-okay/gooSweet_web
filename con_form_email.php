<?php 

if(isset($_POST['contact_N']) && isset($_POST['contact_E']) && isset($_POST['contact_T'])){
$con_name = $_POST['contact_N'];
$con_email = $_POST['contact_E'];
$con_text = $_POST['contact_T'];
if(!empty($con_name) && !empty($con_email) && !empty($con_text)){

$to = 'milind.rohit2013je0359@gmail.com';
$sub= 'Contact from gooSweet';
$body = "$con_name \n $con_text";
$header= 'From: '.$con_email;
if(mail($to, $sub, $body, $header))
{
echo "Thanks $to for contacting us. We\'ll be in touch soon";
}
else
{
echo 'Sorry, an error occurred. Please try again later.';
}
}

else
{
echo 'All fields are required.';
}
}
?>