<html>
     <title>
           BEST WINTER PLACE
       </title>
  <head>
  <h1 style="font-family: 'Bungee Inline', cursive;">
      <center>
   BEST PLACES FOR VACATION IN WINTER
      </center>
  </h1>
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline&display=swap" rel="stylesheet">
       <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
       <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      
       
    </head>
    <body>
        <?php
$con=new mysqli("localhost","root","","project_website");
$sql = "select * from addbestwinterplace";
$result = $con->query($sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>

        <div class="conatainer-fluid" style="background-color: skyblue;">
           
            <div class="row" >
                <div class="col-lg-12">
                    <div class="text" style="font-size:30px;font-weight:bold;">   <?php echo  $row['pname'];?></div>
                    <br>
                </div>
            </div>
                    <div class="row">
                       
                        <div class="col-lg-5"><vr> <img class="d-block w-100" style="margin-left:2px; "img src="images/<?php echo $row['pimage'];?>"</div>
                    
                    </div>
       
            
            <div class="col-lg-7">
                
                <?php echo $row['pdescription'];?>
                
                 
            </div>
            
        </div>
        
    <hr>
   
    </div>
        <?php
                }
                ?>
    </body>
</html>

