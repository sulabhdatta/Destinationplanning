<?php
$c="";
$p="";
$d="";
if(isset($_POST['submit'])){
  $userid=$_POST['userid'];
  $password=$_POST['password'];
  $confirmpass=$_POST['confirmpass'];
    $con=new mysqli("localhost","root","","project_website");
   
        
       $sql1="select userid from createaccount where userid='$userid'";
       $result1=$con->query($sql1);
       
        if(mysqli_num_rows($result1)==1)
        {
    $sql="Update createaccount set password='".$password."' where userid='".$userid."'";
    $result=$con->query($sql);
     if($result==TRUE){
     $p="<span style='color:white;margin-left:90px;'>Password changed successfully</span>";
}   
}
    
       
    
 else {
//$c="<span style='color:white;margin-left:90px;'>Password not matched</span>";
$d="<span style='color:white;margin-left:90px;'>User id is incorrect</span>";

}
}
?>