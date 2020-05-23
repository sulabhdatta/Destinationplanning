<?php
$v="";
if(isset($_POST['submit']))
{
 $email=$_POST['mail'];
 $textarea=$_POST['t'];
 $con=new mysqli("localhost","root","","destinationplanning");
 $sql="insert into package_issue(email,query) values('".$email."','".$textarea."')";
 $result=$con->query($sql);
 if($result==True)
 {
     $v="<span style='margin-left:150px;'> Sends successfully </span>";
 }
}
?>

