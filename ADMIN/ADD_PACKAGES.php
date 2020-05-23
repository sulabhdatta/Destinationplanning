<?php
if (isset($_POST['upload'])) {
    if (isset($_FILES['image'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $detail = $_POST['detail'];
         $image = $_FILES['image']['name'];
         //for image ke name ke liye
//        $image2=$_FILES['image2']['name'];
        $image_temp = $_FILES['image']['tmp_name'];
//       $image2_temp=$_FILES['image2']['tmp_name'];
        $location=$_POST['location'];
        $days=$_POST['days'];
        $nights=$_POST['nights'];
        
        $con = new mysqli("localhost", "root", "", "project_website");
        $sql = "Insert into add_package(id,name,price,detail,image,location,days,night)"
                . "values('" . $id . "','" . $name . "','" . $price . "','" . $detail . "','"
                . $image . "', '". $location . "','" . $days . "','" . $nights . "')";
       
        $result = $con->query($sql);
//      
        if ($result == TRUE) {
            if (move_uploaded_file($image_temp, "images/" . $image)) {
              echo' <strong>ADD SUCCESSFULLY</strong>';
            }
          
           }
        }
      
        
    }
?>
<html>
    <head>
        <title>
            ADD PACAKAGE
        </title>
        <link href="../CSS_FILES/admincss.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    
        <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark|Shojumaru|Vast+Shadow&display=swap" rel="stylesheet">
        <style>
            body{
                background-color:lightsalmon;
            }
        </style>
    </head>
                      <body>
        <div class="row">
            <div class="col-lg-11" style="margin-left:20px;font-family:'Vast Shadow'";>
        <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ADD PACKAGES</h1>
            </div>
            </div>           
        <hr>
                    <form class="upload_form" method="post" border="2" enctype="multipart/form-data">
                        <label style="font-family:'Vast Shadow'";>ID</label>
                        <input type="text" style="width:470px;margin-left:1px;" required name="id" class="input-group">
                        <label style="font-family:'Vast Shadow'";>NAME</label>
                        <input type="text" style="width:470px;margin-left:1px;"  required name="name" class="input-group">
                        <label style="font-family:'Vast Shadow'";>PRICE</label>
                        <input type="text" style="width:470px;margin-left:1px;" required name="price" class="input-group">
                        <br>
                        <label style="font-family:'Vast Shadow'";>DETAIL</label><br>
                        <textarea name="detail" required style="width:450px;margin-left:1px;"></textarea>
                        <br>
                        <label style="font-family:'Vast Shadow'";>IMAGE</label>
                        <input type="file" required name="image" class="input-group">                  
<!--                        <b> <lable style="font-family:'Vast Shadow'";>IMAGE2</lable></b>
                        <input type="file" required name="image2" class="input-group">
                            
                        <br>-->
                        <label style="font-family:'Vast Shadow'";>LOCATION</label>
                        <input type="text" style="width:470px;margin-left:1px;" required  name="location" class="input-group">
                        <br>
                        <label style="font-family:'Vast Shadow'";>DAYS</label>
                        <input type="text" style="width:470px;margin-left:1px;" required  name="days" class="input-group">
                        <br>
                        <label style="font-family:'Vast Shadow'";>NIGHTS</label>
                        <input type="text" style="width:470px;margin-left:1px;" required name="nights" class="input-group">
                      
                        <br>
                        <input type="submit" id="add" name="upload" value="upload" style="font-family:'Vast Shadow'"; class="btn btn-primary" style="margin-left:195px;">
                        
                    </form>
</body>
</html>