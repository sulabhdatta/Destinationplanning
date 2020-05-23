<?php
if(isset($_POST['upload'])){
    if(isset($_FILES['images'])){
    $id=$_POST['hotelid'];
    $name=$_POST['hotelname'];
    $detail=$_POST['detail'];
    $images =$_FILES['images']['name'];
    $image_temp=$_FILES['images']['tmp_name'];
    $con=new mysqli("localhost","root","","project_website");
    $sql="Insert into hotel_page(hotel_id,hotel_name,details,image)"
         ."values('" .$id. "','" .$name. "', '" .$detail."' ,'". $images."')";
   
    
    $result = $con->query($sql);
//      
        if ($result == TRUE) {
            if (move_uploaded_file($image_temp, "images/" . $images)) {
              echo("ADD successully");
            }
          
           }
        }
      
        
    }
?>
<html>
    <head>
    <h2 style="font-family:'Aclonica'"; >
        ADD HOTEL
    </h2>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Luckiest+Guy|Press+Start+2P|Righteous|Shojumaru&display=swap" rel="stylesheet">        
        <style>
            body{
                background-color:pink;
            }
        </style>   
</head>
    <body>
        
    <form class="upload_form" method="post" border="2" enctype="multipart/form-data">
        <label style="font-family:'Aclonica'";>
            Hotel Id :
        </label>
        <input type="text" class="input-group" name="hotelid" required style="width:470px;margin-left:1px;"/>
        <label style="font-family:'Aclonica'";>
            Hotel Name :
        </label>
        <br>
        <input type="text" class="input-group" name="hotelname" required style="width:470px;margin-left:1px;"/>
        <br>
       <label style="font-family:'Aclonica'";>IMAGE :</label>
                        <input type="file" required name="images" class="input-group">    
        <br>
        <label style="font-family:'Aclonica'";>
            Hotel detail :
        </label>
        <br>
         <textarea name="detail" required style="width:450px;margin-left:1px;"></textarea>
         <br><br>
                                <input type="submit" id="add" name="upload" value="upload" style="font-family:'Aclonica'"; class="btn btn-primary" style="margin-left:195px;">

    </form>
</body>
</html>
