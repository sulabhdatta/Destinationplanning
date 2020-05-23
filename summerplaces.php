

<html>
     <title>
           summer places
       </title>
  <head>
  <h1 style="font-family: 'Bungee Inline', cursive;">
      <center>
   BEST PLACES FOR VACATION IN SUMMER
      </center>
  </h1>
       <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
       <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <link href="https://fonts.googleapis.com/css?family=Bungee+Inline&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
$con=new mysqli("localhost","root","","project_website");
$sql = "select * from addplaces";
$result = $con->query($sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>

        <div class="conatainer-fluid" style="background-color: skyblue;">
           
            <div class="row" >
                <div class="col-lg-12">
                    <div class="text" style="font-size:30px;font-weight:bold;font-family: 'Bungee Inline', cursive;">   <?php echo  $row['pname'];?></div>
                    <br>
                </div>
            </div>
                    <div class="row">
                       
                        <div class="col-lg-5"><vr> <img class="d-block w-100" style="margin-left:2px; "img src="images/<?php echo $row['pimage'];?>"</div>
                    
                    </div>
       
            
            <div class="col-lg-7" style="font-family: 'McLaren', cursive;font-size: 20px;">
                
                <?php echo $row['pdescription']; ?>
                <br><br><br><br><br><br><br>
                <button name="more" class="btn-primary" style="margin-left:250px;font-family: 'Cabin Sketch', cursive;" > EXPLORE MORE</button>
                 
            </div>
            
        </div>
        
    <hr>
   
    </div>
        <?php
                }
                ?>
    </body>
</html>


