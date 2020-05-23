<html>
    <head>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                <link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Righteous|Shojumaru&display=swap" rel="stylesheet">        
                <style>
                    body{
                        background-color:lightcyan;
                    }
                </style>
    </head>
    <body>
<?php
if (isset($_GET['id'])) {
   

$con=new mysqli("localhost", "root", "", "project_website");
        /* @var $hotel_id type */
       $sql="select * from hotel_page where hotel_id='" .$_GET['id']. "' ";


$result=$con->query($sql);


                while ($row = mysqli_fetch_array($result)) {
    ?>
       
    <div class="row">
        <div class="col-lg-6">
          <h4 style="font-family:'Alconica'";>
              
               <?php echo $row['hotel_name'];?>
              <br>
              <img src="images/<?php echo $row['image']; ?>">
              
             
             
             
                      </div>
                                 
        <div class="col-lg-6">
            <br>
            <h4 style="font-family:'Shojumaru'";> Details :<br><?php echo $row['details']; ?>
                <br>
                <a href="payment.php?id=<?php echo $_GET['id'];?>,<?php echo $row['hotel_name'];?>"> <input type="submit" class="btn-group-lg" value="Add hotel" style="border-radius:5px;background-color:lightskyblue";/> </a>
        </div>
        
        
    </div>
        <hr>
        
    
<hr>

    <?php
}
}
?>    

    </body>
</html>