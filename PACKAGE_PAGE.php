<?php

//$cartid = "";
//if (isset($_SESSION['cartid'])) {
//   if ($_SESSION['cartid'] != "") {
//        $cartid = $_SESSION['cartid'];
//    } else {
//
//        $cartid = Date('Y') . "" . Date('m') . "" . Date('d') . "" . Date('h') . "" . Date('i') . "" . Date('s');
//        $_SESSION['cartid'] = $cartid;
//    }
//} else {
//
//   $cartid = Date('Y') . "" . Date('m') . "" . Date('d') . "" . Date('h') . "" . Date('i') . "" . Date('s');
//    $_SESSION['cartid'] = $cartid;
//}
session_start();
//if (isset($_POST['buynow'])) {
//    if (isset($_SESSION['login_session']))
//        {
//    
//        header("Location:../payment.php");
//       
//    } else {
//        header("Location:../login.php");
//    }
//}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Luckiest+Guy|Press+Start+2P|Righteous|Shojumaru&display=swap" rel="stylesheet">        
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<link href="main_css.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
            <style>
                body{
                    background-color:lightcyan;
                }
            </style>
    </head>
    <body> 
        <div class="container" >
            <h1 style="text-align:center;font-family:'Aclonica';text-shadow:3px 3px 3px goldenrod";>
                <hr>
                ...................--MORE PACKAGES--.......................
                <hr>
            </h1>
            <div class="container-fluid" id='a'>
                <div class="row">
                
                    <div class="col-lg-12">
                        <form method="get">
                            <p style="font-family:'Fugaz One'";>   Sort By:</p><input type="submit" id="low" name="low_high" value="low to high" style="background-color:skyblue;width:110px;border-radius:3px;font-family:'Fugaz One'";/>
                      <input type="submit" id="low" name="high_low" value="high to low" style="background-color:skyblue;width:110px;border-radius:3px;font-family:'Fugaz One'";/> 
                      
                        </form>
                        <form method="get">
                            <div class="input-group" style="background-color:buttonface;">
                                
                                <input type="search"  name="searchbar" class="form-control" placeholder="search city here......" required style="font-family:'Fugaz One'";>
                                <div class="input-group-append" >
                                    <button type="submit" name="search" class="input-group-text btn" style="font-family:'Fugaz One'";>
                                        Search
                                    </button>
                                </div>

                            </div>   
                        </form>

                    </div>

                </div>
            </div>
            <br>
            <div class="row">

                <?php
                $con = new mysqli("localhost", "root", "", "project_website");
                $sql = "select * from add_package";
                if (isset($_GET['search']) && $_GET['searchbar'] != "") {
                    $s = $_GET['searchbar'];
                    $sql = "select * from add_package where name like  '%" . $s . "%' ";
                }
                if(isset($_GET['low_high']))
                {
                    $sql = "select * from add_package order by price";
                }
                if(isset($_GET['high_low']))
                {
                    $sql = "select * from add_package order by price desc";
                }
//filter
               

//echo "<br>".$sql;
                $result = $con->query($sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-lg-4">
                       
                        <div class="features-box">

                            <div class="features-image">
                               
                             <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
                            <div class="carousel-inner">
                             <div class="carousel-item active">
                 
                                
                                 <a href="details.php?id=<?php echo $row['id']; ?>">     <img class="d-block w-100" img src="images/<?php echo $row['image']; ?>"alt="First slide"></a>
                             </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" img src="images/<?php echo $row['image2'];?>"alt="Second slide">
                                </div>
                            </div>
                                 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                         
                               
                             
                                
                           
                                <div class="price">
                                    <i class="fa fa-inr">  <p style="font-family:'Fugaz One'";><?php echo $row['price']; ?></p></i> 
                                    
                                </div>
 
                                   
                            </div>
                            
                            
                            <a href="review.php?id=<?php echo $row['id'];?>">    <span style="margin-left:200px;font-family:'Fugaz One'";> Customer Reviews</span></a>
                            <div class="features-details">
                                <h4><?php echo $row['name']; ?></h4>
                                <p style="font-family:'Righteous'";><u>Description-:</u> <br> <?php echo $row['detail']; ?></p>
                                <hr>
                                <div>
                                    <span><i class="fa fa-map-marker" style="color: orangered;"><?php echo $row['name']; ?></i></span>
                                    <span><i class="fa fa-sun-o" style="color: orangered;"> <?php echo $row['days'] . "Days";?> </i></span>
                                    <span><i class="fa fa-moon-o"style="color: orangered;"><?php echo $row['night'] . "Nights"; ?></i></span>
                                </div>
                                <a href="show_hotel.php?id=<?php echo $row['id'];?>">  
                                    
                                    
                                    
                                    
                                        <button  name="buynow" style="
                                             width: 100px;
                                             height: 40px;
                                             outline: none !important;
                                             background-color: lightsteelblue;
                                             background: none;
                                             border: 2px solid #6666ff;
                                             border-radius: 50px;
                                             margin: 5px 5px 5px 5px;
                                             margin-left: 100px;
                                             margin-top: 10px;
                                             font-family:'Fugaz One'";
                                             >
                                        BUY NOW
                                        </button></a>
                                </a>
                                <a href="feedback.php?id=<?php echo $row['id'];?>">        <button name="customer review"
                                         style=" width: 170px;
                                             height: 45px;
                                             outline: none !important;
                                             background-color: lightsteelblue;
                                             background: none;
                                             border: 2px solid #6666ff;
                                             border-radius: 50px;
                                             margin: 5px 5px 5px 5px;
                                             margin-left: 75px;
                                             margin-top: 10px;
                                             font-family: 'Fugaz One'"; > Give your feedback</button>
                                </a>
                            </div>
                        </div>
                        <br>
                       
                    </div>

                    <hr>
                    <?php
                }
                ?>                 
            </div>

      
  



    </body>
</html>

