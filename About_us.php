<?php 
include_once 'header.php';
?>
<html>
    <head>
        <title>
            About us
        </title>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Righteous|Shojumaru&display=swap" rel="stylesheet">        
<style>
            .container-fluid{
                background-color:white;
            }
            #aboutus{
                height:400px;
                background-image:url("https://www.thespacestation.co.za/wp-content/uploads/iphone-slider-contact-us-page.jpg");
                background-size:cover;
              


            }
            
        </style>
    </head>
    <body>
        <div class="container-fluid" style="height:1100px; background-color:yellow">
            <div class="row" id="aboutus">
                <div class="col-lg-12">
                    <br><br><br>
                    <ul class="list-group">
                        <li class="list-group-item alert-light" style="color:black;font-size:35px;text-align:center;font-weight:bold;width:450px;margin-left:450px;background-color:whitesmoke;text-shadow:2px 2px 3px red;font-family:'Fugaz One';">  Destination Planning </li> </ul><br>
                    <span style="color:white;font-size:15px;margin-left:590px;text-align: center;font-family: 'Righteous';background-color:black;text-shadow:1px 1px 2px red";> We makes your destination happy</span>
                </div>
            </div>
            <div class="row" >
                <div class="col-lg-12" style="background-color: silver;height:100px;">
                    <span  style="color:black;font-size:60px;font-weight:bold;margin-left:570px; 
                           text-align: center;font-family: 'Aclonica';text-shadow:2px 2px 4px red">About Us</span>
           </div> 
            </div>
            <div class="row">
                <div class="col-lg-12"  style="background-image: linear-gradient(lightblue,lightpink);height:430px;font-family:'Righteous';">
                    <center>
                    <pre style="font-family: 'Aclonica';word-spacing:1.5px;">
<br>
                    Destination planning website provides a facility through which customer can makes thier vacation plans easily.
 We can also provides the best pacakges with lowest price for vacations.User can easily book thier vacation and make payment
 with various modes.Users can ask any query related to thier pacakge and payment.user also search thier pacakge and
 make thier pacakge by own.


SOTC Travel Limited (Formerly SOTC Travel Pvt. Ltd.) is a step-down subsidiary of Fairfax Financial Holdings Group;
 held through its Indian listed subsidiary, Thomas Cook (India) Limited (TCIL).
 SOTC India is a leading travel and tourism company active across various travel segments including Leisure Travel,
 Incentive Travel and Business Travel.

SOTC was established in 1949. Since then, it has escorted lakhs of travelers across the globe for more than 70 years to
 various destinations around the world. It is one of the leaders in segments, namely Escorted Group Tours, Customised 
Holidays of India and Incentive Travel amongst others. SOTC’s customer focus, innovation and operational excellence has 
not only tapped the existing market potential but has also created new markets through innovative packages. 
Its vast array of holiday services is taking holidaying to an entirely new level. A new age innovative holiday maker,
 SOTC strives to make holidays a priority for every Indian. Through investments in technology and with a strong online 
presence the company serves its customers through an omni-channel play.
                    </pre>                    
</center>
                    
                        
            </div>
            </div>
            <div class="row" style="background-color:greenyellow;height:200px";>
               
                <div class="col-lg-4">
                    
                    <br>
                    <i class="fa fa-users fa-5x" style="margin-left:140px;color:red;text-shadow:2px 2px 3px lightgoldenrodyellow"></i><br>
                    <span style="font-size:20px;font-weight:bold;margin-left:100px;font-family:'Fugaz One';text-shadow:2px 2px 3px white";>Happy Customer's </span>
                    <br>
                    <span style="font-size:25px;font-weight:bold;margin-left:165px;font-family: 'Righteous';text-shadow:2px 2px 3px red" id="num"> 500</span>
                   
                </div>
                <div class="col-lg-4">
                    <br>
                    <i class="fa fa-bar-chart fa-5x" style="margin-left:150px;text-shadow:2px 2px 3px paleturquoise"></i>
                    <br>
                    <span style="font-size:20px;font-weight:bold;margin-left:130px;font-family: 'Bungee Inline';text-shadow:2px 2px 4px red";> Experience </span>
                    <br>
                    <span style="font-size:25px;font-weight:bold;margin-left:150px;font-family: 'Righteous';text-shadow:2px 2px 4px white"> 1 year</span>
                    
                </div>
               
                <div class="col-lg-4">
                    <br>
                    <i class="fa fa-user-plus fa-5x" style="margin-left:150px;color:blue;text-shadow:2px 2px 3px red";></i>
                    <br>
                    <span style="font-size:20px;font-weight:bold;margin-left:120px;font-family:'Fugaz One';text-shadow:2px 2px 3px whitesmoke";> Staff members </span>
                    <br>
                    <span style="font-size:25px;font-weight:bold;margin-left:170px;font-family:'Fugaz One';text-shadow:2px 2px 3px red"; id="ss"> 50</span>
              
                </div>
            </div>
        </div>
    </body>
     <script>
                      window.onload=function(){ 
                    var i=1;
                    var x=setInterval(function (){
                        i++;
                        document.getElementById("num").innerHTML=+i;
                        if(i==500)
                        {
                            clearInterval(x);
                        }
                    },100);
                };
                var i=1;
                    var x=setInterval(function (){
                        i++;
                        document.getElementById("ss").innerHTML=+i;
                        if(i==50)
                        {
                            clearInterval(x);
                        }
                    },200);
                    
                   
                
                    </script>
</html>
