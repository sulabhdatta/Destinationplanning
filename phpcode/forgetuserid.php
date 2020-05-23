<?php
$c="";
$p="";
$d="";
if(isset($_POST['submit'])){
  $number=$_POST['number'];
  $password=$_POST['password'];
 
    $con=new mysqli("localhost","root","","project_website");
   
        
       $sql1="select number from createaccount where number='$number'";
       $result1=$con->query($sql1);
       
        if(mysqli_num_rows($result1)==1)
        {
    $sql="Update createaccount set password='".$password."' where number='".$number."'";
    $result=$con->query($sql);
     if($result==TRUE){
     $p="<span style='color:white;margin-left:90px;'>Password changed successfully</span>";
}   
}
    
       
    
 else {
//$c="<span style='color:white;margin-left:90px;'>Password not matched</span>";
$d="<span style='color:white;margin-left:90px;'>Mobile number is incorrect</span>";

}
}
?>