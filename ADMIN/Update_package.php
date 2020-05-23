<?php
if (isset($_POST['update'])) {
    if (isset($_FILES['image'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $detail = $_POST['detail'];
        $image = $_FILES['image']['name']; //for image ke name ke liye
        $image_temp = $_FILES['image']['tmp_name'];
        $location = $_POST['location'];
        $days = $_POST['days'];
        $nights = $_POST['nights'];
        $con = new mysqli("localhost", "root", "", "project_website");
        $sql = "update add_package set name='" . $name . "'  ,price='" . $price . "'  ,detail='" . $detail . "'  ,image='" . $image . "',"
                . "location='" . $location . "' ,days='" . $days . "' ,night='" . $nights . "'   "
                . "where id='" . $id . "'   ";

        $result = $con->query($sql);
//        echo $sql;
        if ($result == TRUE) {
            ?>
            <script>
                confirm(" You want to update the package");
                alert("Your package update succesully");
            </script>

            <?php
        } else {
            echo "error hhh";
        }
    }
}

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../CSS_FILES/admincss.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
       
        
           
              <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark|Shojumaru|Vast+Shadow&display=swap" rel="stylesheet">
              <style>
                  body{
                      background-color:lightcoral;
                  }
              </style>
    </head>
    <body>

 

    <span style="font-size:25px;font-weight:bold;margin-left:140px;font-family: 'Shojumaru'"> UPDATE PACKAGE</span>
        <hr>
         <form class="upload_form" method="post" id="update" enctype="multipart/form-data">

<label style="font-family:'Vast Shadow'";>ID</label>
     <input type="text" style="width:470px;margin-left:1px;"  name="id" class="input-group"> <input type="submit" id="add" name="submit" value="fetch" style="font-family:'Vast Shadow'"; class="btn btn-primary" style="margin-left:195px;">
         </form>        
 <?php
if(isset($_POST['submit'])){
    $id=$_POST['id'];
  $con=new mysqli("localhost","root","","project_website");
$sql="select * from add_package where id='" . $id . "' ";
  $result=$con->query($sql);
 while($row = mysqli_fetch_array($result)) {

                    
?>        
        <form class="upload_form" method="post" id="update" border="2" enctype="multipart/form-data">
<label style="font-family:'Vast Shadow'";>ID</label>
<input type="text" style="width:470px;margin-left:1px;" required name="id" class="input-group" value="<?php echo $row['id'];?>" >
            <label style="font-family:'Vast Shadow'";>NAME :</label>
                <input type="text" style="width:470px;margin-left:1px;"   name="name" class="input-group" value="<?php echo $row['name'];?>"/>
                <label style="font-family:'Vast Shadow'";>PRICE :</label>
                        <input type="text" style="width:470px;margin-left:1px;" required name="price" class="input-group" value="<?php echo $row['price'];?>"/>   
               <label style="font-family:'Vast Shadow'";>DETAIL :</label><br>
               <textarea name="detail" required style="width:450px;margin-left:1px;">  <?php echo $row['detail'];?> </textarea>
                 
               <br>
                        <label style="font-family:'Vast Shadow'";>IMAGE</label>
                        <input type="file" required name="image" class="input-group" value="<?php echo $row['image'];?>">  
                         <label style="font-family:'Vast Shadow'";>LOCATION :</label>
                        <input type="text" style="width:470px;margin-left:1px;" required  name="location" class="input-group" value="<?php echo $row['location'];?>">
                        <label style="font-family:'Vast Shadow'";>DAYS :</label>
                        <input type="text" style="width:470px;margin-left:1px;" required  name="days" class="input-group" value="<?php echo $row['days'];?>">
                        <br>
                        <label style="font-family:'Vast Shadow'";>NIGHTS :</label>
                        <input type="text" style="width:470px;margin-left:1px;" required name="nights" class="input-group" value="<?php echo $row['night'];?>">
                        <input type="submit" id="add" name="update" value="update" style="font-family:'Vast Shadow'"; class="btn btn-primary" style="margin-left:195px;">

        </form>
      <?php
 }
}
?>
        
             
</body>
</html>
        
