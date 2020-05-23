<?php
$con=new mysqli("localhost","root","","project_website");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phoneno'];
    $addess=$_POST['address'];
    $sql="Inter into  "
}
