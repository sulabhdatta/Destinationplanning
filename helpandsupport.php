<?php
include_once 'header.php';
?>
<html>
    <head>
        <title>
            help and support
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="main_css.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>


        <link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Quando|Righteous|Shojumaru&display=swap" rel="stylesheet">


        <link href="helpcss.css" rel="stylesheet" type="text/css"/>

        <style>
            #payment{
                animation-name:pay;
                animation-delay:2s;
                animation-iteration-count:infinite;
                animation-direction:alternate;
                animation-timing-function:linear;
                animation-duration:1s;
                 
            }
            @keyframes pay{
                0%{
                    height:100px;
                    width:100px
            
             
                }
                50%{
                    height:103px;
                    width:103px;
                }
                100%{
                    height:105px;
                    width:105px;
                }
            }
        </style>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="container-fluid" style='border:0px;padding-left:0;padding-right:0;height:650px';>
            <div class="row" >
                <div class='col-lg-12'>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/hands3.jpg" height="420px" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 style="color:navy;font-family:'Righteous';" > HOW CAN WE HELP U?  </h3>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/hands2.jpg" height="420px" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 style="color:pink;font-family:'Righteous';" > HOW CAN WE HELP U?  </h3>

                                </div>
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>  
            </div>


            <hr>
            <!--<div class="container-fluid">-->
            <div class="row1">
                <div class="col-lg-12">
                    <br>
                    <a href="Payment_related_issue.php" target="_blank"> <div class="payment" style="margin-left:400px;">
                            <img src="images/pay-per-click.png"  height="100px" width="100px" id="payment" style="margin-left:5px;" alt=""/><br>
                            <span style="margin-left:25px;font-weight:bold;font-family:'Quando'";>Payment</span> <span style="margin-left:5px;font-weight:bold;font-family:'Quando'";>related issue</span>
                        </div></a>
                    <a href="Pacakge_related_issue.php" target="_blank">  <div class="package">
                            <img src="images/travel.png" height="100px" width="100px" id="payment" style="margin-left:25px;" alt=""/><br>
                            <span style="margin-left:30px;font-weight:bold;font-family:'Quando'";>Pacakage</span><br> <span style="margin-left:1px;font-weight:bold;font-family:'Quando'";>related-issue</span>
                        </div></a>
                    <a href="Login_related_issue.php" target="_blank"><div class="login1">
                            <img src="images/login.png" height="100px" width="100px" id="payment" style="margin-left:0px;" alt=""/><br>
                            <span style="margin-left:29px;font-weight:bold;font-family:'Quando'";>Login</span><br> <span style="margin-left:1px;font-weight:bold;font-family:'Quando'";>related issue</span>

                        </div></a>
                    <a href="website_related_issue.php" target="_blank">    <div class="service">
                            <img src="images/customer-service.png" height="100px" width="100px" id="payment" style="margin-left:10px;" alt=""/><br>
                            <span style="margin-left:10px;font-weight:bold;font-family:'Quando'";>Website</span><br> <span style="margin-left:-10px;font-weight:bold;font-family:'Quando'";>related-issue</span>

                        </div></a>
                </div>

            </div>

        </div>
        <hr>

    </body>
</html>

<?php
include_once 'footer.php';
?>