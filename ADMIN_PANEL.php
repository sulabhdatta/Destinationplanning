<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
<!--        <link href="CSS_FILES/admincss.css" rel="stylesheet" type="text/css"/>-->
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Righteous|Shojumaru&display=swap" rel="stylesheet">        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
            .container-fluid{
               
             background-image:url("https://lh3.googleusercontent.com/proxy/4cj1WOHm-uU8DJEiE9xKXQGsaLF1HAmHeuPJe9U3bv3HbgZvtlwGmN5kGduGbYqCkAh4Fqsr-SBWwt7r-qyoOvzc8UtZ9EHUMah5ea2mvoE8qHpWN8k4NrwcJuXyAsW6NzGklA04LGBUylum-XmX0DcUjurB78y7e-N2Esc ");
               background-size:cover;
            }
            .dd:hover{
                color:red;
            }
            hr{
                border-color: black;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div style="background-color:rosybrown;border-radius:3px;border:4px;border-style:ridge;height:90px;">
           
            <h1 class="heading" style="font-family:'Shojumaru';text-shadow:2px 2px 2px red;opacity:0.1";>
                <center>   <b>  ADMIN PANEL</b></center>
            </h1>
           
            </div>
            <div class="boxes">
                <div class="row">
                    <div class="col-lg-3" id="dd">
                        <br>
                        <img src="images/add.png" height="270px" width="270px"  alt="" data-toggle="modal" data-target="#myModal_add"  style="cursor:pointer;"/>
                        <h3 style="margin-top:-26px; margin-left:30px;font-family:'Shojumaru';text-shadow:2px 2px 2px red";>ADD PACKAGES</h3>
                    </div>
                    <div class="col-lg-3">
                        
                        <img src="images/modify.png" height="290px" width="270px" alt="" data-toggle="modal" data-target="#myModal_update" style="cursor:pointer;"/>
                        <h3 style="margin-top:-26px; margin-left:26px;font-family:'Shojumaru';text-shadow:2px 2px 2px red";>MODIFY PACKAGE</h3>
                    </div>
                    
                    <div class="col-lg-3">
                        <br><br>
                        <center>      <img src="images/poster3_9_19019.png" height="230px" width="235px" alt="" data-toggle="modal" data-target="#myModal_delete"style="cursor:pointer;"/></center>
                        <h3 style="font-family:'Shojumaru';margin-top:-8px;text-shadow:2px 2px 2px red";>DELETE PACKAGES</h3>
                    </div>
                    <div class="col-lg-3">
                        <br><br>
                        <a href="./ADMIN/checklist.php"><img src="images/poster3_9_172339.png" height="240px" width="250px"  alt="" style="cursor:pointer;"/></a>
                        <h3 style="font-family:'Shojumaru';margin-top:-10px;text-shadow:2px 2px 2px red";>&nbsp PACKAGE LIST</h3>
                    </div>
                </div>    
            
                <hr style="color:red;">
       
        <div class="row">
            <div class="col-lg-3" id="hotel">
                <img src="images/hotel.png" height="310px" width="270px" alt="" data-toggle="modal" data-target="#myModal_hotel"style="cursor:pointer;"/></center>
              <h3 style="font-family:'Shojumaru';margin-top:-45px;margin-left: 50px;text-shadow:2px 2px 2px red">ADD HOTEL</h3>
            </div>
             <div class="col-lg-3">
                        
                 <img src="images/modify2.png" height="290px" width="270px" alt="" data-toggle="modal" data-target="#myModal_updatehotel" style="cursor:pointer;"/>
                        <h3 style="margin-top:-26px; margin-left:26px;font-family:'Shojumaru';text-shadow:2px 2px 2px lime";>MODIFY Hotel</h3>
                    </div>
             <div class="col-lg-3">
                        
                 <a href="./ADMIN/hotelchecklist.php">   <img src="images/checklist.png" height="290px" width="280px" style="cursor:pointer;"/></a>
                        <h3 style="margin-top:-26px; margin-left:5px;font-family:'Shojumaru';text-shadow:2px 2px 1px rosybrown";>HOTEL CHECKLIST</h3>
                    </div>
            <div class="col-lg-3">
                <img src="images/addplaces.png" height="290px" width="280px" style="cursor:pointer;" data-toggle="modal" data-target="#myModal_winter123"/>
                <center>           <h3 style="margin-top:-26px;font-family:'Shojumaru';text-shadow:2px 2px 3px greenyellow";>ADD Winter</h3></center>

            </div>
        </div>
                <hr>
                <div class="row">
                    
                    <div class="col-lg-3">
                         
                        <img src="images/hotel_add.png" height="290px" width="280px" style="cursor:pointer;" data-toggle="modal" data-target="#myModal_addhotel"/>
                        <h3 style="margin-top:-26px;font-family:'Shojumaru';margin-left:50px;text-shadow:2px 2px 2px red";>ADD Hotel</h3>
                 
                    </div>
                    <div class="col-lg-3"><br>
                        <img src="images/deleteplace.png" height="250px" width="260px" style="cursor:pointer;margin-left:20px;" data-toggle="modal" data-target="#myModal_addhotel"/>
                        <h3 style="margin-top:-20px;font-family:'Shojumaru';margin-left:30px;text-shadow:2px 2px 2px red";>Delete Place</h3>

                    </div>
                    <div class="col-lg-3">
                        <img src="images/addplace2.png" height="270px" width="270px" style="cursor:pointer;margin-left:0px;" data-toggle="modal" data-target="#myModal_splaces"/>
                      <center>           <h3 style="margin-top:-26px;font-family:'Shojumaru';text-shadow:2px 2px 2px red";>SummerPLACES</h3></center>

                    </div>
                </div>
        </div>
        </div>
        <div class="modal fade" id="myModal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width:570px;height:750px;background-color:lightsalmon;">

                    <?php include './ADMIN/ADD_PACKAGES.php'; ?>
                    <br>
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-family:'Fugaz One';font-size:18px;";>Close</button>

                </div>

            </div>
        </div>
        <div class="modal fade" id="myModal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width:580px;height:720px;background-color:lightskyblue;">

                    <?php include './ADMIN/Update_Package.php'; ?>
                    <br>
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-family:'Fugaz One'";>Close</button>

                </div>

            </div>
        </div>
        <div class="modal fade" id="myModal_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="margin-top:200px;height:320px;background-color:lightcyan;">

                    <?php include './ADMIN/delete_Package.php'; ?>
                    <br><br><br><br>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
        <div class="modal fade" id="myModal_hotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width:500px;height:500px;background-color:linen;">

                    <?php include './ADMIN/add_hotel.php'; ?>
                    <br>
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
         <div class="modal fade" id="myModal_updatehotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width:580px;height:500px;background-color:lightskyblue;">

                    <?php include './ADMIN/modify_hotel.php'; ?>
                    <br>
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
         <div class="modal fade" id="myModal_hotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width:500px;height:500px;background-color:linen;">

                    <?php include './ADMIN/add_hotel.php'; ?>
                    <br>
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
          <div class="modal fade" id="myModal_winter123" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width:580px;height:780px;background-color:lightsalmon;">

                    <?php include './ADMIN/winter.php'; ?>
                    <br>
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
         <div class="modal fade" id="myModal_splaces" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="width:580px;height:780px;background-color:lightsalmon;">

                    <?php include './ADMIN/place.php'; ?>
                    <br>
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
       
        <script>
            $(function(){
                var x=$(".heading");
                x.animate({opacity:1},2500);
               
                
            });
            </script>
    </body>
</html>


