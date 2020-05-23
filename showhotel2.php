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


$con=new mysqli("localhost", "root", "", "project_website");
        /* @var $hotel_id type */
       $sql="select * from hotel_page";


$result=$con->query($sql);


                while ($row = mysqli_fetch_array($result)) {
    ?>
       
    <div class="row">
        <div class="col-lg-6">
             <h4 style="font-family:'Alconica';margin-left:4px;margin-top:5px;">
             <?php echo $row['hotel_name'];?></h4>
            <p> 
             <img src="images/<?php echo $row['image'];?>"
            </p>
                  <br>
             
             
             
                      </div>
                                 
        <div class="col-lg-6">
            <h4 style="font-family:'Alconica';margin-top:5px;"> Details :<br><?php echo $row['details']; ?> </h4>
                <br>
                 <input type="submit" class="btn-group-lg" value="Add hotel" style="border-radius:5px;background-color:lightskyblue;font-family:'Shojumaru'";/>
        </div>
        
        
    </div>
        <hr>
        
    
<hr>

    <?php
}
?>    

    </body>
</html>