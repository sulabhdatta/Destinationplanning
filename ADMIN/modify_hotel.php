


<?php
if(isset($_POST['update'])) {
    if (isset($_FILES['image'])) {
        $hotel_id = $_POST['id'];
        $hotel_name = $_POST['name']; 
        $details =$_POST['detail'];
        $image = $_FILES['image']['name']; //for image ke name ke liye
        $image_temp = $_FILES['image']['tmp_name'];
        $con = new mysqli("localhost", "root", "", "project_website");
        $sql = "update hotel_page set hotel_name='". $hotel_name ."', details='" . $details ."',image='". $image ."' where hotel_id='" . $hotel_id . "'   ";

        $result = $con->query($sql);
//        echo $sql;
        if ($result == TRUE) {
            ?>
            <script>
                confirm(" You want to update the hotel");
            </script>
     <?php
        } else {
            echo("ERROR !!");
        }
    }
}
?>

    
<html>
    <head>
        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
                       <link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Quando|Righteous|Shojumaru&display=swap" rel="stylesheet">

        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color:linen">
        <h2 style="font-family:'Fugaz One'">
            MODIFY PACKAGE
        </h2>
        <br>
        <form action=""  method="post"/>

            <label style="font-family:'Fugaz One'";>ID :</label>
                        <input type="text" style="width:470px;margin-left:1px;border-radius:5px;" required name="id" class="input-group">
                               <input type="submit" name="fetch" value="fetch value" style="font-family:'Fugaz One'"; class="btn btn-primary" />

                        <br>
                        
                    </form>
       <?php
if(isset($_POST['fetch'])){
    $id=$_POST['id'];
  $con=new mysqli("localhost","root","","project_website");
$sql="select * from hotel_page where hotel_id='" . $id . "' ";
  $result=$con->query($sql);
 while($row = mysqli_fetch_array($result)) {

                    
?>        
        
                  <form class="upload_form" method="post" id="upload" border="2" enctype="multipart/form-data">

         <label style="font-family:'Fugaz One'";>ID :</label>
                        <input type="text" style="width:470px;margin-left:1px;border-radius:5px;"  name="id" class="input-group" value="<?php echo $row['hotel_id'];?>"/>
      <label style="font-family:'Fugaz One';">HOTEL NAME :</label>
                         <input type="text" style="width:470px;margin-left:1px;border-radius:5px;"   name="name" class="input-group" value="<?php echo $row['hotel_name'];?>"/>
                        
                        <br>
                        <label style="font-family:'Fugaz One'";>DETAIL :</label><br>
                        <textarea name="detail" required style="width:450px;margin-left:1px;border-radius:8px;">
                             <?php echo $row['details'];?>
                        </textarea>
                        <br>
                        <label style="font-family:'Fugaz One'";>IMAGE</label>
                        <input type="file" required name="image" class="input-group">                  
                        <br>
                        <input type="submit" id="add" name="update" value="update" class="btn btn-primary" style="margin-left:195px;font-family:'Fugaz One'";>
                  </form>
        <?php
                }
        }
        
        ?>
    </body>
     
</html>

