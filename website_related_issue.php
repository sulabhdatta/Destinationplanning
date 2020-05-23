
<?php include_once './phpcode/Website_issue_php.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            payment related issue's
        </title>  <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrapfile/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                        <link href="https://fonts.googleapis.com/css?family=Aclonica|Black+Ops+One|Bungee+Inline|Fugaz+One|Love+Ya+Like+A+Sister|Luckiest+Guy|Press+Start+2P|Quando|Righteous|Shojumaru&display=swap" rel="stylesheet">

     <style>
            .container-fluid{
                height:100vh;
              background-image:url("https://free4kwallpapers.com/uploads/originals/2015/09/25/blurred-background-city.jpg");

                  background-size:cover;
            }
            input[type='email']{
                width:350px;
                height:50px;
           margin-left:25px;
            }
            #textarea{
                margin-left:20px;
                border-radius:5px;
            }
            input[type='submit']{
                margin-left:80px;
                width:250px;
            }
            
            #formp{
                height:450px;
                margin-top:90px;
                border-radius:10px;
              -webkit-box-shadow: 3px 6px 19px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 3px 6px 19px 0px rgba(0,0,0,0.75);
box-shadow: 3px 6px 19px 0px rgba(0,0,0,0.75);
            }
            
        </style>
    </head>
    <body>
    <div class="container-fluid">
                <center><span style="color:black;background-color:white;font-size:35px;border-radius:5px;font-family:'Fugaz One'";> Website Related Issue </span></center>

        <div class="row">
            <div class="col-lg-4"></div>
            <div  class="col-lg-4">
                <div  id="formp" class="form-group">
                    <form method="post">
                        <br>
                        <input type="email" name="mail" class="form-control" placeholder="Enter your mail-id :" style="font-family:'Fugaz One'" required/> <br>
                        <textarea name="t" id='textarea' rows="10" cols="40" placeholder="Query :" style="font-family:'Fugaz One'" required></textarea>
                        <input type="submit" name="submit" class="btn btn-success" value="submit" style="font-family:'Fugaz One'"/>
                        <br>
                        <?php echo $v;?>
                    </form>
                </div>
                
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
        
    </body>
</html>

