<?php
$v="";
if(isset($_POST['submit']))
{
 $email=$_POST['mail'];
 $textarea=$_POST['t'];
 $con=new mysqli("localhost","root","","project_website");
 $sql="insert into website_issue(email,query) values('".$email."','".$textarea."')";
 $result=$con->query($sql);
 if($result==True)
 {
     $v="<span style='margin-left:150px;'> Sends successfully </span>";
 }
}
?>

