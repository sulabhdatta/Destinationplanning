<!DOCTYPE html>
<?php
if(isset($_POST['submit'])){
    $con= new mysqli("localhost","root","","project_website");
    $id=$_POST['hotel'];
    $sql="delete  from hotel_page where hotel_id='". $id ."'";
    $result=$con->query($sql);
    {
        if($result==TRUE)
        {
            echo("Delete successully");
        }
 else {
     echo $sql;
 }
}
}
?>
<html>
    <head>
        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                             <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark|Shojumaru|Vast+Shadow&display=swap" rel="stylesheet">

        <style>
            body{
                background-color:plum;
            }
        </style>
       
    </head>
    <body>
        <form method="POST" id="form" enctype="multipart/form-data">
            <span style="font-size:28px;font-weight:bold;font-family:'Vast Shadow'";>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp DELETE PACKAGE</span>
            <br><br>
            <label style="font-family:'Vast Shadow'">
                Hotel_id:
            </label><br>
            <input type="text" name="hotel" placeholder="Enter the hotel id" class="input-group" style="width:300px;border-radius:8px;" required/>
            <br>
            <input type="submit" name="submit" class="btn-primary" value="Delete" style="border-radius:5px;font-family:'Vast Shadow'"/>
        </form>
    </body>
</html>

