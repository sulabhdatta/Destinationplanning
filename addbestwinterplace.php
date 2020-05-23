<?php
if(isset($_POST['submit'])){
     if(isset($_FILES['image']))
{
    $pname=$_POST['placename'];
    $pimage = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $pdescription=$_POST['description'];
    $con=new mysqli("localhost","root","","project_website");
    $sql="Insert into addbestwinterplace(pname,pimage,pdescription)"
            ."values('".$pname."','".$pimage."','".$pdescription."')";
   
        $result = $con->query($sql);
//      
      
}
}
?>
<html>
    <head>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <style>
            body{
                background-image:url("https://www.hihonor.com/content/dam/honor/global/blog/2018/take-photos-with-blurred-background-effects-using-honor-10/blog-img1-take-photos-with-blurred-background-effects-using-honor-10.jpg");
            }
        </style>
        <title>
          best  winter places
        </title>
    </head>
 
    <body>
        
        <form class="upload_form" method="post" enctype="multipart/form-data">
                    <b><label style="margin-left:10px;"> NAME :</label></b>
                <input type="text" required name="placename" class="form-control" style="width:300px;margin-left:10px;"/>
                <br><br>
                <b> <label style="margin-left:10px;">
                    Upload image :
                    </label></b>
                <br>
                <input type="file" required name="image" class="input-group" style="margin-left:10px;"> 
                <br><br>
                <label style="margin-left:10px ">
                    <b>         Description :</b>
                </label>
                <br>
                <textarea name="description" class="input-group" style="width:500px;height:200px;margin-left:10px;"></textarea>
                <br><br>
                <input type="submit" name="submit" class="btn btn-primary" style="margin-left:200px;">
                </form>
       <?php
       if ($result == TRUE) {
            if (move_uploaded_file($image_temp, "images/".$pimage));
       echo "add succesfully";
       }
       ?>
    </body>
      
   
</html>



