<html>    <title>
        Famous places
    </title>
    <head>
        <script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=Bungee+Inline&display=swap" rel="stylesheet">
    <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <style>
        .container-fluid{
            height:100vh;
            background-image:url("http://www.paulroe.org/wp-content/uploads/2018/08/paulroe-vacation.jpg");
      background-size:cover;
        }
        .row{
            
           height:200px; 
        }
        
        .bb:hover{
       transform:scale(1);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    } 
    .bc:hover{
        transform:scale(1);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    } 
    </style>
</head>
    <body>
        <div class="container-fluid" style="font-size:50px;font-style:bold;font-family: 'Bungee Inline', cursive;">
           
            <ul class="list-group">    
                <li class="list-group-item alert-heading" style="width:500px;margin-left:400px;text-shadow:2px 2px 2px paleturquoise">      FAMOUS PLACES </li>
            </ul>
            

            <div class="row">
               
                <div class="col-lg-6">
                    
                   
                    <a href="places.php">     <img src="images/SUMMER.jpg"  height="300px" width="400px" id="summer" style="margin-top:90px;margin-left:30px;border-style:ridge;opacity:0.1;" class="bb" alt=""/></a>
               
                </div>
                <div class="col-lg-6">
                    <center>
                        <a href="wintersbestplaces.php">        <img src="images/WINTERS.jpg" height="300px" width="400px" id="win" style="margin-top:90px;border-style:ridge;opacity:0.1;" class="bc"  alt=""/></a>
                    </center>
                </div>
                
            </div>
        </div>
        <script>
            $(function(){
            var x=$("#summer");
           x.animate({opacity:1},3000);
           var x=$("#win");
           x.animate({opacity:1},3000);
        });
            </script>
    </body>
</html>
