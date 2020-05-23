<!DOCTYPE HTML>

<html>
    <head>
        <title>
            ADD PACAKAGE
        </title>
        <link href="../CSS_FILES/admincss.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark|Shojumaru|Vast+Shadow&display=swap" rel="stylesheet">
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
                      
        <form action="" method="post">    
                        <label style="font-family:'Vast Shadow'";>ID</label>
     <input type="text" style="width:470px;margin-left:1px;"  name="id" class="input-group">                        <input type="submit" id="add" name="submit" value="fetch" style="font-family:'Vast Shadow'"; class="btn btn-primary" style="margin-left:195px;">

                        
             
      
                     </form>
        <?php
if(isset($_POST['submit'])){
    $id=$_POST['id'];
  $con=new mysqli("localhost","root","","project_website");
$sql="select * from add_package where id='" . $id . "' ";
  $result=$con->query($sql);
 while($row = mysqli_fetch_array($result)) {

                    
?>        
        <form action="" method="POST">
            <label style="font-family:'Vast Shadow'";>NAME</label>
                <input type="text" style="width:470px;margin-left:1px;"   name="name" class="input-group" value="<?php echo $row['name'];?>"/>
                <label style="font-family:'Vast Shadow'";>PRICE</label>
                        <input type="text" style="width:470px;margin-left:1px;" required name="price" class="input-group" value="<?php echo $row['price'];?>"/>   
               <label style="font-family:'Vast Shadow'";>DETAIL</label><br>
                        <textarea name="detail" required style="width:450px;margin-left:1px;" value="<?php echo $row['detail'];?>"></textarea>
                        <label style="font-family:'Vast Shadow'";>IMAGE</label>
                        <input type="file" required name="image" class="input-group" value="<?php echo $row['image'];?>">  
                         <label style="font-family:'Vast Shadow'";>LOCATION</label>
                        <input type="text" style="width:470px;margin-left:1px;" required  name="location" class="input-group" value="<?php echo $row['location'];?>">
                        <label style="font-family:'Vast Shadow'";>DAYS</label>
                        <input type="text" style="width:470px;margin-left:1px;" required  name="days" class="input-group" value="<?php echo $row['days'];?>">
                        <br>
                        <label style="font-family:'Vast Shadow'";>NIGHTS</label>
                        <input type="text" style="width:470px;margin-left:1px;" required name="nights" class="input-group" value="<?php echo $row['night'];?>">
                        <input type="submit" id="add" name="submit" value="update" style="font-family:'Vast Shadow'"; class="btn btn-primary" style="margin-left:195px;">

        </form>
      <?php
 }
}
?>
        
             
</body>
</html>
         
              
 <form class="upload_form" method="post" id="update" border="2" enctype="multipart/form-data">
            <label style="font-family:'Vast Shadow'";>ID :</label>
         <input type="text" style=" width: 470px;margin-left:1px;"  name="id" class="input-group">
            <label style="font-family:'Vast Shadow'";>NAME :</label>
    <input type="text"  style=" width: 470px;margin-left:1px;" name="name" class="input-group">
            <label style="font-family:'Vast Shadow'";>PRICE :</label>
            <input type="text" style=" width: 470px;margin-left:1px;"  name="price" class="input-group">
            <br>
            <label style="font-family:'Vast Shadow'";>DETAIL :</label><br>
            <textarea name="detail"  style=" width: 380px;margin-left:1px;"></textarea>
            <br>
            <label style="font-family:'Vast Shadow'";>IMAGE :</label>
            <input type="file"  name="image" class="input-group">
            <br>
            <label style="font-family:'Vast Shadow'";>LOCATION :</label>
            <input type="text" style=" width: 470px;margin-left:1px;"   name="location" class="input-group">
            <br>
            <label style="font-family:'Vast Shadow'";>DAYS :</label>
            <input type="text" style=" width: 470px;margin-left:1px;"   name="days" class="input-group">
            <br>
            <label style="font-family:'Vast Shadow'";>NIGHTS :</label>
            <input type="text" style=" width: 470px;margin-left:1px;"  name="nights" class="input-group">
            <br>
            <input type="submit" name="update" value="update" style="font-family:'Vast Shadow'"; class="btn btn-primary" class="btn btn-primary">
            <input type="submit" name="submit" value="fetch value" style="font-family:'Vast Shadow'"; class="btn btn-primary" >
             </form>    
        <?php
     }
}
     ?>