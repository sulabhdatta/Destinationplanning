<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>     
        <link href="main_css.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Quando|Righteous|Shojumaru&display=swap" rel="stylesheet">
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <style>
            .links .login-btn{
    margin-left:130px;
    width:128px;
    margin-top:-30px;
    outline: none !important;
   background: transparent;
       color:black;
    border-radius:50px;
    float:left;
    font-weight:bold;
    text-shadow:2px 2px 1px white;
}
.links .login-btn:hover{
    opacity:0.7;
}
#btn{
 animation-name: btn;
 animation-duration:5s;
 animation-delay:5s;
 animation-iteration-count: infinite;
 animation-timing-function: linear;
 animation-direction:alternate;
 
}
@keyframes btn{
      0%{
                  width:200px;
                  
              }
             25%{
                  width:300px;
                 
              }
              50%{
                  width:450px;
              }
              75%{
                  width:700px;
              }
              100%{
                  width:1100px;
              }
}
.booking-btn{
    animation-name:booking;
 animation-duration:3s;
 animation-delay:1s;
 animation-iteration-count: infinite;
 animation-timing-function: linear;
 animation-direction:alternate;
}
@keyframes booking{
    
        0%{
            color:red;
        }
        50%{
            color:pink;
        }
        100%{
            color:orange;
        }
    
}
.login-btn{
     animation-name:login;
 animation-duration:4s;
 animation-iteration-count: infinite;
 animation-timing-function: linear;
 animation-direction:alternate;
}
@keyframes login{
    
        25%{
            color:red;
        }
        100%{
            color:navy;
        }
       
    
}
#buybutton{
    animation-name:buy;
 animation-duration:2s;
 animation-iteration-count: infinite;
 animation-timing-function: linear;
 animation-direction:alternate;
}
@keyframes buy
{
     25%{
            color:red;
        }
        100%{
            color:navy;
        }
       
}

        </style>
<!--        <script type="text/javascript">

function my_code(){
//    window.location.href='mainpage.php';
}

window.onload=my_code();
</script>-->
       
    </head>
    <body>
        <section class="header"> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="images/mainlogo1_1.png"   style="margin-left:-30px;margin-top:-50px;width:250px;height:200px"/><br>
                        <!--<br><br> <span style="margin-left:-500px;font-size:20px;font-weight:bold;"> Destination Planning</span>-->
                    </div>
                    <div class="col-lg-4">  <span style="margin-right:0px;"> <?php
                          if (isset($_SESSION['login_session'])) {
                              
                              echo   "<p  style='color:white;text-shadow:2px 2px 2px black;font-size:18px;font-family:Aclonica;font-weight:bold;'> welcome -"." ".$_SESSION['login_session']."</p>"; 
                            }
                            ?></span></div>
                    <div class="col-lg-4"><?php
                        if (isset($_SESSION['login_session'])) {
                            ?>
                            <a href="LOG_OUT.php"> <button type="button" class="login-btn" style="margin-top:10px;font-family:'Aclonica';color:red";>LOG OUT</button></a>
                            <?php
                        } else {
                            ?>
                            <a href="login.php"> <button type="button" class="login-btn" style="margin-top:10px;font-family:'Aclonica';color:black;text-shadow:2px 2px 1px white";>LOG IN</button></a>
                            <?php
                        }
                        ?>

                    </div>


                </div>


                <div class="links">
                    <br>
                    <button type="button" id="btnindex" class="login-btn" style="font-family:'Aclonica'";>Home</button>

                    <a href="CONTACT.php"><button type="button" id="btnindex" class="login-btn" style="font-family:'Aclonica'";>Contact</button></a>
                    <a href="About_us.php">    <button type="button" id="btnindex" class="login-btn" style="font-family:'Aclonica'";>About us</button></a>
                    <a href="helpandsupport.php">    <button type="button" id="btnindex" class="login-btn" style="font-family:'Aclonica'";>Support</button></a>
                    <a href="famousplacesforvacation.php">    <button type="button" id="btnindex" class="login-btn" style="font-family:'Aclonica'";>Places</button></a>
                </div>
                <img src="images/pane.png" height="200px" width="200px" style="margin-left:500px;margin-top:-280px;">
                        <h1 style="margin-top:-50px;color:white;text-shadow:2px 2px 2px red;font-family:'Fugaz One'";>Travel Across The Globe</h1>
                <p style="font-family:'Quando'";> The Best You Can Plan</p>
               
                <form method="GET" action="">
                    <div class="input-group">

                        <input type="text"  name="text" class="form-control" style="font-family:'Fugaz One'"; placeholder="search city here......" required>
                        <div class="input-group-append">
                                <button type="submit" name="add" class="input-group-text btn">
                                Search
                                </button>
                         <?php
                   
                
                   if(isset($_GET['add'])) {
                       header('location:PACKAGE_PAGE.php');
             }
                        ?>
                        </div>
                    </div>

                    
                </form>

            </div>

        </section>
        <!--===============================================================================================================-->
        <!--features section-->
        <!--===========================================================================================================-->
        <section class="features" style="background-color:lightgrey; height: 850px;">
<ul class="list-group">
       <li class="list-group-item alert-heading" style="font-family: 'Aclonica';width:550px;height:90px;font-size:35px;margin-left:380px;text-shadow:3px 3px 4px red"> FEATURED DESTINATIONS   </li>   </ul> 
            <hr style="background-color:gray;">
            <div class="container">

                <div class="row">
                    <?php
                 
              $con = new mysqli("localhost", "root", "", "project_website");
                    $sql = "select * from add_package limit 4";
                    $result = $con->query($sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="col-md-3" style="background-color:"> 
                            <div class="features-box">
                                <div class="features-image">
                                    <a href="details.php?id=<?php echo $row['id']; ?>"> <img src="images/<?php echo $row['image'] ?>" alt=""/></a>
                                    <div class="price">
                                        <i class="fa fa-inr" style="color: white"><p><?php echo $row['price']; ?></p></i>
                                    </div>
                                </div>
                                <div class="features-details">
                                    <h4><?php echo $row['name']; ?></h4>
                                    <p><u>Description-:</u><br> <?php echo $row['detail']; ?></p>
                                    <hr>
                                    <div>
                                            <span><a href="<?php echo $row['location']; ?>"
                                                 <i class="fa fa-map-marker" style="color: orangered;">
                                                         <?php echo $row['name']; ?>
                                                </i></a>
                                        </span>
                                        <span><i class="fa fa-sun-o" style="color: orangered;"><?php echo $row['days'] . "Days"; ?></i></span>
                                        <span><i class="fa fa-moon-o"style="color: orangered;"><?php echo $row['night'] . "Nights"; ?></i></span> </div>
                                </div>
                                <div class="buybutton">
                                
                                  <a href="payment.php?id=<?php echo $row['id'];?>">      <button  id="buybutton" style="
                                                width: 100px;
                                                height: 40px;
                                                background-color: lightsteelblue;
                                                border: 2px solid #6666ff;
                                                border-radius: 50px;
                                                text-align: center;
                                                /*margin: 5px 5px 5px 5px;*/
                                                margin-left: 50px;
                                                margin-top: 10px;
                                                margin-bottom: 20px;
                                                ">BUY NOW</button>
                                                
                                    </a>    
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <br>

            <a href="PACKAGE_PAGE.php"><button id="btn"  class="btn btn-primary" style=" color: white;
                                               margin-left: 130px; width: 1100px;font-weight:bold;font-family:'Quando';width:900px;";>More Packages</button></a><br>
        </section>
        <!--====================================================================================
        book nowaday=
        ===================================================================================-->
        <section class="booknow" >
            
            <div class="banner-high">
                 
                <div class="container">
                  
                    <div class="row">
                        
                        <div class="col-sm-8">
                            <h2 style="font-family:'Quando';text-shadow:2px 2px 2px skyblue";>Get upto 30% discount on top Destinations</h2>
                            <p style="font-family:'Quando'";>Book your tickets till 31<sup>th</sup> and avail the offer of flat 30% discount.</p>
                        </div>
                        <div class="col-sm-4">
                            <a href="PACKAGE_PAGE.php" target="_blank">   <button class="booking-btn" style="font-family:'Quando'";>  Book Now </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--        =================================================================================================
                usre review section
                ====================================================================================================-->

        <section  class="user-feedback" style="height:550px; width:100%;">
            <h1 style="font-family:'Quando';text-shadow:2px 2px 4px red";> USER REVIEW</h1> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                    <div class="user-review">
                            <p style="font-family:'Righteous'";>
                                I found that the Service provided by the website is great.
                                
                            </p>
                            <h4 style="font-family:'Righteous'";>Priyank Sharma
                            </h4>
                            <img src="images/review1.png" alt="" style=""/>

                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="user-review">
                            <p style="font-family:'Righteous'";>
                                  i recommend  you to book your vacation from DESTINATION PLANNING
                            </p>
                            <h4 style="font-family:'Righteous'";>Kamaljeet</h4>
                            <img src="images/review2.jpg"  alt=""  style=""/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="user-review">
                            <p style="font-family:'Righteous'";>
                               
                                i found that everything was accurate and properly arranged
                            </p>

                            <h4 style="font-family:'Righteous'"; >Prerna Bhardwaj</h4>

                            <img src="images/review3.jpg" alt=""/>
                        </div>
                    </div>
                    
                </div>
                <br>
              
            </div>
           
                   <div class="row">
                       <div class="col-lg-2"></div>
                       <div class="col-lg-8">
                           <div class="progress">
                        <div class="progress-bar bg-success" style="width:30%;height:70px;">
                            Work pending in customer review
                        </div>
                   <div class="progress-bar progress-bar-animated" style="width:30%;height:100px;">
        Work pending in customer review
                       </div>
                    </div>
                           
        </div>
                       
                   </div>  
         
        </section>
        <!--        ========================================================================================
                fotter
                ==============================================================================================-->
        <section class="fotter" style="height: 330px;">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-3 "> 
                        <div class="fotter-logo">
                            <img src="images/mainlogo1_1.png" alt="" height="270px" style="margin-left:-50px;margin-top:-50px;"/>
<!--                            <p style="margin-top:-115px;font-size:20px;font-weight:bold;font-family:sans-serif"> Destination Planning</p>-->

                        </div>
                    </div>
                    <div class="col-lg-3"> 
                     <ul class="list-group">
                         <li class="list-group-item alert-danger" style="font-family:'Righteous';height:50px;"> Features </li> </ul>
                       <br>
                       <p style="font-family:'Quando'";> <a href="" style="color:white;">Deals & offers</a></p>
                        <p style="font-family:'Quando'";><a href="" style="color:white;">Customers reviews</a></p>
                        <p style="font-family:'Quando'";><a href="" style="color:white;">Cancellation policy's</a></p>
                    
                    </div>
                    <div class="col-lg-4" style="background-color: ">  
                        <ul class="list-group">
                            <li class="list-group-item alert-heading" style="font-family:'Righteous';height:50px;color:red;">Quick contact</li></ul>
                        <br>
                        <p style="font-family:'Quando'";><i class="fa fa-phone-square"></i>+91 807678292</p>
                        <p style="font-family:'Quando'";><i class="fa fa-envelope"></i>destinationplanning1234@gmail.com</p>
                        <p style="font-family:'Quando'";><i class="fa fa-home"></i>B-40, shahdara delhi.</p>
                        <P style="font-family:'Quando'";><i class="fa fa-map-marker">&nbsp&nbsp&nbsp&nbsp&nbsp<a href="https://goo.gl/maps/jN9LzXkoW2fEV2Ea6" style="color:white;"> MAP DIRECTION</a></i>


                    </div>
                    <div class="col-lg-2" style="background-color:  "> 
                        <ul class="list-group">
                            <li class="list-group-item alert-heading " style="font-family: 'Righteous';color:blue;">Follow Us On  </li>  </ul>
                        <br>
                        <p style="cursor:pointer;font-family:'Quando'";><i class="fa fa-youtube"></i>You tube</p>
                        <a href="https://www.instagram.com/destinationplanning2/?hl=en" target="_blank" style="text-decoration:none;color:white;font-family:'Quando'";>      <p style="cursor:pointer"><i class="fa fa-instagram"></i>Instagram</p></a>
                        <a href="https://www.facebook.com/Destination-Planning-101078424573886/?modal=admin_todo_tour" target="_blank" style="text-decoration:none;color:white;font-family:'Quando'";>   <p style="cursor:pointer"><i class="fa fa-facebook-official"></i> Facebook</p></a>
                        <img src="images/qr.png" width="65px" height="60px"/>

                    </div>
                </div >
                <hr style="color:#efefef;">

                <center class="copyright">
                    <pre style=" text-align:center; color: white;font-family:'Quando'";>
     Copyright@2019 Destination planning INDIA.Inc. All Rights reserved <a href="" style="color:white" target="_blank"><u>Term of Use</u></a> | <a href="" style="color:white" target="_blank"><u> Privacy Policy-Revised</u></a
                    </pre>  
                </center> 

            </div>

        </section>
    </body>
</html>
