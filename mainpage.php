<!DOCTYPE html>
<html>
<head>
<title>
    Welcome page.
</title>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Righteous|Shojumaru&display=swap" rel="stylesheet">        
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
       
        <style>
        .conatainer-fluid{
           
            background-image:url("https://mcdn.wallpapersafari.com/medium/1/69/GhLtFz.jpg");
           background-size:cover;          
        }
        .main{
            font-size:30px;
            font-weight:bolder;
           
             margin-left:500px;
        
            
            margin-top:-20px;
            width:420px;
            height:230px;
            -webkit-box-shadow: 32px 16px 59px 0px rgba(0,0,0,0.90);
-moz-box-shadow: 32px 16px 59px 0px rgba(0,0,0,0.90);
box-shadow: 32px 16px 59px 0px rgba(0,0,0,0.90);
            
        }
        .fa-arrow-circle-right{
            margin-left:680px;
            color:red;
            cursor:pointer;
            
            
            
        }
        .fa-arrow-circle-right:hover{
            color:background;
        }
    </style>
</head>
<body>
    <div class="conatainer-fluid">
        <div class="row">
            <div class="col-lg-10">
                <img src="images/mainlogo1_1.png" id="img1"  style="width:250px;height:200px;opacity:0.1;"/> </div> 
            <div class="col-lg-2">   <img src="images/moon.png" id="moon" width="150px" height="150px"  style="opacity:0.1;" /></div>
        </div>
    
    <div class="main">
        <marquee direction="up" behavior="scroll">    <pre style="margin-left:110px;text-shadow:1px 1px blacks;font-family:'Shojumaru';color:white";>  Welcome </pre>
      <pre  style="margin-left:130px;font-family:'Shojumaru';color:white";>    TO   </pre> 
      <center>    <pre style="text-shadow:1px 1px black;font-family:'Shojumaru';color:white";> Destination  Planning  </pre></center>
        </marquee>
    </div>
        
    <div class="next">
        <a href="index.php">   <i class="fa fa-arrow-circle-right fa-4x"></i></a>
       
    </div>
        <div class="row" style="height:290px">
        <div class="col-lg-10">
            <marquee direction="down" behavior="slide"> <marquee direction="right" behavior="slide">   <img src="images/car.png" id="car" height="200px" width="200px" style="margin-top:80px;"></marquee>  </marquee>
        </div>
        <div class="col-lg-2" >
            <img src="images/hotell.png" width="200px" height="290px" style="margin-top:-40px;"/>
        </div>
    </div>
    
    </div>
<script>
 $(function(){
     var x=$("#moon");
     x.animate({opacity:1},3000);
    var y=$("#img1");
    y.animate({opacity:1},3000);
     
 });
 </script>
</body>
</html>

