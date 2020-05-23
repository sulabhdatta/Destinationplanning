<?php

$con=new mysqli("localhost", "root", "", "project_website");
if(isset($_POST['submit'])){
    $username = $_POST['userid'];
    $password =$_POST['password'];
    $sql = "select * from  createaccount where userid='" . $username . "' and password='" . $password . "'";
    
    $result=$con->query($sql);
    if ($username=="admin001" && $password=="abcd"){
        header("Location:./ADMIN_PANEL.php");
    } else if ($row=mysqli_fetch_array($result)){
        $_SESSION['login_session'] =$username;
        header("Location:index.php");
    } else{
        echo"<script> alert('invalid password') </script> ";
    }
}
?>

