<?php
$s="";
$c="";
if(isset($_POST['submit']))
        
{
    $userid=$_POST['userid'];
    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $con=new mysqli("localhost","root","","project_website");
    $sql1="select userid from createaccount where userid='$userid' ";
    $result1=$con->query($sql1);
    
    if(mysqli_num_rows($result1)==0)
   
    {
    $sql="insert into createaccount(userid,name,number,email,password)"
            . " values('".$userid."','".$name."','".$number."','".$email."','".$password."')";
   
    $result=$con->query($sql);
if($result==TRUE)
    {
//       
//        
        $c="Account created successfully";
      
    }
    }

    else{
        $s="* Userid Already Exists";
    }
}
       ?>
<!--<script>
          alert(" saved succesfully");
    window.location.href='login.php';
</script>-->
    
  