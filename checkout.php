<?php
$con=new mysqli("localhost","root","","project_website");
if(isset($_POST['buynow'])){
    $sql = "select * from add_package";
    $result = $con->query($sql);
                while ($row = mysqli_fetch_array($result))
    ?>
<html>  
    <head>
        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<div class="col-md-4">
                        <div class="features-box" style="height: 500px;">

                            <div class="features-image">
                                <img src="images/<?php echo $row['image']; ?>">
                                <div class="price">
                                    <i class="fa fa-inr"><p><?php echo $row['price']; ?></p></i>
                                </div>
                                
                            </div>
                        </div>
     </div>

<?php
}
?>
    </body>
</html>