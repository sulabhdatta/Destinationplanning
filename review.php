<h2  style="font-family:'Fugaz One'";><center>Customer Reviews :</center></h2>
<?php
$con=new mysqli("localhost","root","","project_website");
$sql="Select * from feedback where id= '" . $_GET['id'] . "'";
$result=$con->query($sql);
while($row=mysqli_fetch_array($result)) {

?>
<html>
    <head>
    <h2> 
        
        <title>
            review page
            
        </title>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
            <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Luckiest+Guy|Press+Start+2P|Righteous|Shojumaru&display=swap" rel="stylesheet">        

    </head>
    <body style="background-image:url(https://image.freepik.com/free-vector/clear-blue-sky-with-clouds-pattern-background-illustration_38782-226.jpg);background-size:cover;"> 
     
        <table class="table table-striped" style="width:600px;border:2px solid black">
            <tr>
            <td style="width:300px;height:50px;font-family:'Fugaz One'";>
             User Name :
            </td>
            <td style="width:300px;height:50px;font-family:'Fugaz One'";>  <?php echo $row['Name'];?>
            </td>
            </tr>
            <tr>
            <td style="width:300px;height:50px;font-family:'Fugaz One'";>
                Email-id :
            </td>
            <td style="width:300px;height:50px;font-family:'Fugaz One'";>
                <?php echo $row['email'];?>
            </td>
            </tr>
            <td style="width:300px;height:50px;" colspan="2">
            <span style="margin-left:170px;font-family:'Fugaz One'";>  Customer review: </span>
                
            </td>
            <tr>
            <td style="width:300px;height:200px;font-family:'Fugaz One'" colspan="2">
                <?php echo $row['feedback'];?>
            </td>
            </tr>
        </table>  
    </body>
    <?php
}
?>
</html>