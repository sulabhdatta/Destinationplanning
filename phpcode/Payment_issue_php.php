<?php
$a="";
if(isset($_POST['submit']))
{
 $email=$_POST['mail'];
 $textarea=$_POST['t'];
 $con=new mysqli("localhost","root","","project_website");
 $sql="insert into paymentrelatedissue(email,query) values('".$email."','".$textarea."')";
 $result=$con->query($sql);
 if($result==True)
 {
     $a="<span style='margin-left:150px;'> Sends successfully </span>";
 }
}
?>
