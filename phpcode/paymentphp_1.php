<?php
$con=new mysqli("localhost","root","","project_website");
if(isset($_POST['submit']))
{
    $package_id=$_POST['packid'];
    $cardholder=$_POST['cname'];
    $number=$_POST['card'];
    $exp=$_POST['exp'];
    $cvv=$_POST['cvv'];
    
    $order_date=date("Y-m-d");
    $userid=$_SESSION['login_session'];
    $sql="Insert into payment(cardholder,cardno,exp_date,cvv,package_id,order_date,userid) values('".$cardholder."','".$number."','".$exp."','".$cvv."','".$package_id."','".$order_date."','".$userid."')";
   echo $sql;
    $result=$con->query($sql);
   
if($result==TRUE)
    {
?>
    <script>
        alert("Thanku for making payment");
        window.location.href="PACKAGE_PAGE.php";
    </script>
   

    <?php
}


    }
?>
