<?php
if(isset($_POST['submit']))
{
    $package_id=$_POST['packid'];
    $name=$_POST['name'];
    $email=$_POST['mail'];
    $detail=$_POST['txt1'];
    $con=new mysqli("localhost","root","","project_website");
    $sql="Insert into feedback(id,Name,email,feedback) values('".$package_id."','".$name."','".$email."','".$detail."')";
    $result=$con->query($sql);
    if($result==true)
        ?>
    
    <script>{
        alert("Thank u for your feedback");
    }
        </script>
<?php
    }

?>