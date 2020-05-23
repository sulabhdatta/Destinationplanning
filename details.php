     <?php
                $con = new mysqli("localhost", "root", "", "project_website");
                $id=$_GET['id'];
                $sql = "select * from add_package where id='".$id."'";
                


//echo "<br>".$sql;
                $result = $con->query($sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
<html>
    <head>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
            .container-fluid{
                background-color:white;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
    <div class="row">
       
                        

                            
            <img src="images/<?php echo $row['image']; ?> " style="height:500px;width:100%;">
                       
<!--                                <div class="price">
                                    <i class="fa fa-inr">  <p><?php // echo $row['price']; ?></p></i>
                                </div>-->
                   
                            </div>
            
                <div class="row">
                    <div class="col-lg-4"style="background-color:grey">
                    <span style="font-size:25px;font-weight:bold;margin-left:130px;color:white">    DETAILS: </span>
                    </div>
                    <div class="col-lg-12"></div>
                    </div>
            <br>
             <div class="row">
                 <p style="margin-left:38px;font-size:25px;font-weight: bold;">PRICE:<i class="fa fa-inr" style="margin-left:10px;"><?php  echo $row['price']; ?></i></p>
                                </div>
        
            <div class="row">
                <h4 style="margin-left:36px;font-weight:bold"> Place: </h4> <h4 style="margin-left:6px;"> <?php echo $row['name']; ?></h4>
            </div>
            <br>
            <div class="row">
                <p style="font-size:20px;margin-left:34px;"><span style="font-weight:bold;">Description-:</span> <br> <?php  echo $row['detail']; ?></p>
                                <hr>
            </div>
            <br>
                                <div class="row">
                                    <span><i class="fa fa-map-marker fa-2x" style="color: orangered;margin-left:25px;"><?php  echo $row['name']; ?></i></span>
                                    <span><i class="fa fa-sun-o fa-2x" style="color: orangered;"><?php echo $row['days'] . "Days"; ?></i></span>
                                    <span><i class="fa fa-moon-o fa-2x"style="color: orangered;"><?php  echo $row['night'] . "Nights"; ?></i></span>
                                </div>
            <br>
            <div class="row">
                                <a href="payment.php?id=<?php echo $row['id'];?>">       <button  name="buynow" style="
                                             width: 100px;
                                             height: 40px;
                                             background-color: lightsteelblue;
                                             background: none;
                                             border: 2px solid #6666ff;
                                             border-radius: 50px;
                                             margin: 5px 5px 5px 5px;
                                             margin-left: 100px;
                                             margin-top: 10px;
                                             ">
                                        BUY NOW
                                    </button>
                                </a>
                            </div>
                        </div>
                        <br>
    
              

                    <hr>
                    <?php
                }
                ?>    
</body>
</html>