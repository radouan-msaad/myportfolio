<?php
require('mail.php');
function is_connected(){
  $connected=@fsockopen("www.google.com",80);
  return $connected?1:0;
}
$fullname = isset($_POST['fullname'])?$_POST['fullname']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$country = isset($_POST['country'])?$_POST['country']:"";
$msg = isset($_POST['msg'])?$_POST['msg']:"";
$to = 'radwanhnino21@gmail.com';
$subject = 'Message';
if(is_connected()){
$result = sendMail('Radouan Msaad',$to,$subject,$msg);
if($result=='success'){
   echo '<div class="alert alert-success">success</div>';
}
else{
   echo '<div class="alert alert-danger">'.$result.'</div>';
}
}else{
	echo'<div class="alert alert-danger">Check your internet connection then try again!</div>';
}

?>